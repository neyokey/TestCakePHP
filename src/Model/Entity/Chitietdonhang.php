<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chitietdonhang Entity
 *
 * @property int $id
 * @property int $donhang_id
 * @property int $monan_id
 * @property int $quantity
 *
 * @property \App\Model\Entity\Donhang $donhang
 * @property \App\Model\Entity\Monan $monan
 */
class Chitietdonhang extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'donhang_id' => true,
        'monan_id' => true,
        'quantity' => true,
        'donhang' => true,
        'monan' => true
    ];
}
