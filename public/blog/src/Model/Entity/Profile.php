<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $last_name
 * @property string $first_name
 * @property string $gender
 * @property \Cake\I18n\FrozenDate $born_on
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\User $user
 */
class Profile extends Entity
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
        'user_id' => true,
        'last_name' => true,
        'first_name' => true,
        'gender' => true,
        'born_on' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true
    ];
}
