<?php 
  class serverInfo
  {
      public 
        $ip
       ,$cpu
       ,$os
       ,$kernel
       ,$CPUArchitecture
       ,$proccess
       ,$systemInfo = array()
      ;
	  
      public function __construct()
      {
        include("RAM.php");
          $serverInfo  = getInfoClass();
          $this->cpu = $serverInfo->getCPU();
          $this->ip = $_SERVER['SERVER_ADDR'];
          $this->os = $serverInfo->getOS();
          $this->kernel = $serverInfo->getKernel();
          $this->CPUArchitecture = $serverInfo->getCPUArchitecture();
          $this->proccess = $serverInfo->getProcessStats();
      }
  }
?>
