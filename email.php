


<?php

//Emailer Class Definition
class Emailer {
	//add variables or properties
	 private $sendTo="";
	 private $sentFrom="";
	 private $emailMsg="";
	 private $emailSubject="";
	 
	 public function_construct()
	 {
	 	
	 }
	 
	 public function setSendTo($inSendTo)
	 {
	 	
		$this->sentFrom = $inSentFrom;
		//$this means class(current object)
		//->(arrow) takes place of .
	 }
	 
	 public function setSentFrom($inSendTo)
	 {
	 		 $this->sentFrom = $inSentFrom;
	 }
	 
	 public funtion setEmailSubject($inEmailSubject)
	 {
	 	     $this->emailSubject = $inEmailSubject;
	 }
	 
	 public function setEmailMsg($inEmailMsg)
	 {
	 	     $inEmailMsg = htmlentities($inEmailMsg); //entities changes into php symbols like @
			 $inEmailMsg = wordwrap($inEmailMsg, 70,"\n"); //only so many charachters  choose where to break the lines \n = new line
			 $this->emailMsg = $inEmailMsg;
	 }
	 
	 public function getSentTo()
	 {
	 	     return $this->sentTo;
	 }
	 
	 public function getSentFrom()
	 {
	 	     return $this=>sentFrom;
	 }
	 
	 public function getEmailSubject()
	 {
	 	return $this->emailSubject;
	 }
	 
	 public function get EmailMsg()
	  {
	  	     return $this->EmailMsg;
	  }

}
<?php

