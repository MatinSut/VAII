<?php

namespace App\Models;

use Framework\Core\Model;

class Cat extends Model
{
    protected static ?string $tableName = 'cats';
    protected static array $columnsMap = [
        'adoption_status' => 'adoptionStatus',
        'age_unit' => 'ageUnit',
    ];
    protected static ?array $fillable = ['name', 'age', 'ageUnit', 'personality', 'description', 'adoptionStatus'];

    public int|string|null $id = null;
    public ?string $name = null;
    public ?string $age = null;
    public ?string $ageUnit = null;
    public ?string $personality = null;
    public ?string $description = null;
    public ?string $adoptionStatus = null;
}
