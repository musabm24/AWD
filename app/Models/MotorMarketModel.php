<?php
// small comment
namespace App\Models;

use CodeIgniter\Model;

class MotorMarketModel extends Model
{
    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'make', 'model', 'description', 'price', 'milage', 'year', 'gearbox', 'fuel', 'image'
    ];
    /**
     * @param false|string $make
     *
     * @return array|null
     */
    public function getCars($make = false)
    {
        if ($make === false) {
            return $this->findAll();
        }

        return $this->where(['make' => $make])->first();
    }

    public function searchNews($search)
    {
        return $this->like('make', $search)->findAll();
    }
}