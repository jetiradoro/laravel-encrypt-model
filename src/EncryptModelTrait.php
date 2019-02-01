<?php
namespace Jetiradoro\EncryptModel;

use  \Illuminate\Support\Facades\Crypt;
trait Encryptable
{
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if(isset($this->encryptable) && in_array($key, $this->encryptable)){
                $value = Crypt::decrypt($value);
        }
        return $value;
    }

    public function setAttribute($key, $value)
    {
        if (isset($this->encryptable) && in_array($key, $this->encryptable)) {
            $value = Crypt::encrypt($value);
        }
        return parent::setAttribute($key, $value);
    }
}