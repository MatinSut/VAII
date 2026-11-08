<?php

namespace App\Controllers;

use App\Models\Cat;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class CatController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html(['cats' => Cat::getAll(null, [], '`id` ASC')]);
    }

    public function create(Request $request): Response
    {
        $cat = new Cat();
        if ($request->isPost()) {
            if (!$this->setCatFromRequest($cat, $request)) {
                return $this->html([
                    'cat' => $cat,
                    'error' => 'Vek musí byť celé nezáporné číslo.',
                ], 'add');
            }

            $cat->save();
            return $this->redirect($this->url('cat.index'));
        }

        return $this->html(['cat' => $cat], 'add');
    }

    public function edit(Request $request): Response
    {
        $cat = Cat::getOne($this->getCatId($request));
        if ($cat === null) {
            throw new HttpException(404);
        }

        if ($request->isPost()) {
            if (!$this->setCatFromRequest($cat, $request)) {
                return $this->html([
                    'cat' => $cat,
                    'error' => 'Vek musí byť celé nezáporné číslo.',
                ], 'form');
            }

            $cat->save();
            return $this->redirect($this->url('cat.index'));
        }

        return $this->html(['cat' => $cat], 'form');
    }

    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            throw new HttpException(405);
        }

        $cat = Cat::getOne($this->getCatId($request));
        if ($cat === null) {
            throw new HttpException(404);
        }

        $cat->delete();
        return $this->redirect($this->url('cat.index'));
    }

    private function getCatId(Request $request): int
    {
        $id = $request->value('id');
        if (!is_string($id) && !is_int($id)) {
            throw new HttpException(404);
        }

        $validatedId = filter_var($id, FILTER_VALIDATE_INT);
        if ($validatedId === false || $validatedId < 1) {
            throw new HttpException(404);
        }

        return $validatedId;
    }

    private function setCatFromRequest(Cat $cat, Request $request): bool
    {
        $age = $request->value('age');
        $ageUnit = $request->value('ageUnit');
        $cat->setFromRequest($request, ['name', 'personality', 'description', 'adoptionStatus']);
        $cat->age = is_string($age) ? $age : null;
        $cat->ageUnit = is_string($ageUnit) ? $ageUnit : null;

        if (!is_string($age) || !ctype_digit($age) || !in_array($ageUnit, ['mesiace', 'roky'], true)) {
            return false;
        }

        $age = ltrim($age, '0');
        $age = $age === '' ? '0' : $age;
        $validatedAge = filter_var($age, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 0, 'max_range' => 2147483647],
        ]);
        if ($validatedAge === false) {
            return false;
        }

        $cat->age = (string)$validatedAge;
        return true;
    }
}
