<?php
namespace Jetiradoro\EncryptModel;

use  \Illuminate\Support\Facades\Crypt;
trait Encryptable
{
    protected $encryptable = [];
    
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (in_array($key, $this->encryptable)) {
            $value = Crypt::decrypt($value);
        }
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable)) {
            $value = Crypt::encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }
}