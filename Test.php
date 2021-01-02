<?php
use PHPUnit\FrameworkSTestCaSe;
use App\MoveForHunger\user;
class Test extetends TestCase 
{
I 
public $user;

 public function setup():void{
 
 $this->user = new User(); 
 }

public function test login_user(){
    Sthis->assertrue(Sthis->user->login('medha','123456')) ;
    Sthis->assertfalse(Sthis->user->login('medha',md5('123456'1)));
}
public function test_register_user(){
     Sthis->assertFalse(Sthis->user->register('mahbub','Medha','mahbubMedha','medha@gmail.com','medha@gmail.com','123','123'));
     Sthis->assertFalse(Sthis->user->register('mahbub','Medha','mahbubMedha','medha@gmail.com','medha@gmail.com','123456','123456'));
     Sthis->assertFalse(Sthis->user->register('mahbub','Medha','mahbubMedha','medha@gmail.com','12medha@gmail.com','123456','123456'));
     Sthis->assertFalse(Sthis->user->register('mahbub','Medha','mahbubMedha','medha11@gmail.com','medha@gmail.com','123456','123456'));
     Sthis->assertFalse(Sthis->user->register('         mahbub1            ','Medha','mahbubMedha','medha12@gmail.com','medha12@gmail.com','123456','123456'));

}
}

?>
