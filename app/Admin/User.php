
<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'user';
    protected $connection = 'location';

    public function saveUser($data)
                    {
        $this->customer_id = $data['customer_id']
        $this->first_name = $data['first_name'];
        $this->middle_name = $data['middle_name'];
         $this->last_name = $data['last_name'];
          $this->email = $data['email'];
           $this->gender = $data['gender'];
            $this->mobile = $data['mobile'];
             $this->phone = $data['phone'];
              $this->building_no = $data['building_no'];
               $this->street = $data['street'];
                $this->city_or_town = $data['city_or_town'];
                 $this->region = $data['region'];
                  $this->postcode = $data['postcode'];
                   $this->country = $data['country'];
                    $this->status = $data['status'];
        $this->save();
        return 1;
}
}
