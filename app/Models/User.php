<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Mongodb\Laravel\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'users';

    protected $fillable = ['ownerName', 'address', 'phoneNumber', 'email', 'chasisNumber', 'vehicleMake', 'vehicleType', 'licenceFee', 'licenseType', 'weightAuthorized', 'personAuthorized', 'transactionId', 'transactionRef', 'paymentCode', 'paymentUrl', 'nabrolRef', 'plateNumber', 'paymentDate', 'approved', 'status', 'dateOfBirth', 'issueDate', 'expiredDate', 'password'];
}
