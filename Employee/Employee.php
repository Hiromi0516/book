<?php

    class Employee{

        private  $name;
        private  $civil_status;
        private  $position;
        private  $employee_status;
        private  $gross_incon;
        private  $net_income;

        public function setValues($name, $civil_status,$position,$employee_status,$gross_incon,$net_income){
            $this->name = $name;
            $this->civil_status = $civil_status;
            $this->position = $position;
            $this->employee_status = $employee_status;
            $this->gross_incon =$gross_incon;
      
        }
        public function computeRegularPay(){
              if($this->position == "admin"){
                  if($this->position == "1"){
                      return($this->regular * 62.5);
                  }elseif($this->position=="2"){
                      return($this->Probatinary * 50) ;
                  }elseif($this->position == "3"){
                      return($this->contractual * 43.75);
                  }
                  
              }elseif($this->position =="staff"){
                  if($this->positionn == "1"){
                      return($this->regular * 50);
                  }elseif($this->position == "2"){
                      return($this->Probatinary * 43.75);
                  }elseif($this->position == "3"){
                      return($this->contractual * 37.5);
                  }
              }
        }
        public function overtimePay(){
            if($this-> employee_status== "admin"){
                if($this->employee_status == "1"){
                    return($this->regular * 40);
                }elseif($this->employee_status=="2"){
                    return($this->probationary * 30) ;
                }elseif($this->employee_status == "3"){
                    return($this->contractual * 15) ;
                }
            }elseif($this->employee_status =="staff"){
                if($this->employee_status == "1"){
                    return($this->regular * 30);
                }elseif($this->employee_status == "2"){
                    return($this->Probationary * 25);
                }elseif($this->employee_status == "3"){
                    return($this->employee_status * 10);
                }
            }
      }
      
      }
      public function computeGrossincome(){   /////////////
        if($this->laboratory == "lab"){
            if($this->year_level == "1"){
                return($this->units * 550) +3359;
            }elseif($this->year_level=="2"){
                return($this->units * 630) +4000;
            }elseif($this->year_level == "3"){
                return($this->units * 470) + 2890;
            }elseif($this->year_level == "4"){
                return($this->units * 501) + 3555;
            }    
        }elseif($this->laboratory =="no_lab"){
            if($this->year_level == "1"){
                return($this->units * 550);
            }elseif($this->year_level == "2"){
                return($this->units * 630);
            }elseif($this->year_level == "3"){
                return($this->units * 470);
            }elseif ($this->year_level == "4"){
            return($this->units * 501);
            }
        }
  }
      public function computeN6etincome(){
        if($this->laboratory == "lab"){
            if($this->year_level == "1"){
                return($this->units * 550) +3359;
            }elseif($this->year_level=="2"){
                return($this->units * 630) +4000;
            }elseif($this->year_level == "3"){
                return($this->units * 470) + 2890;
            }elseif($this->year_level == "4"){
                return($this->units * 501) + 3555;
            }    
        }elseif($this->laboratory =="no_lab"){
            if($this->year_level == "1"){
                return($this->units * 550);
            }elseif($this->year_level == "2"){
                return($this->units * 630);
            }elseif($this->year_level == "3"){
                return($this->units * 470);
            }elseif ($this->year_level == "4"){
            return($this->units * 501);
            }
        }
  }




    