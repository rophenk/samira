<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function role()
  {
    return $this->hasOne('App\Role', 'id', 'role_id');
  }
  public function hasRole($roles)
  {
    $this->have_role = $this->getUserRole();
    // Check if the user is a root account
    if($this->have_role->name == 'Root') {
      return true;
    }
    if(is_array($roles)){
      foreach($roles as $need_role){
        if($this->checkIfUserHasRole($need_role)) {
          return true;
        }
      }
    } else{
      return $this->checkIfUserHasRole($roles);
    }
    return false;
  }
  private function getUserRole()
  {
    return $this->role()->getResults();
  }
  private function checkIfUserHasRole($need_role)
  {
    return (strtolower($need_role)==strtolower($this->have_role->name)) ? true : false;
  }
}
