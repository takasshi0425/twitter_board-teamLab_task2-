<?php

namespace Twitter;

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Message;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Phalcon\Mvc\Model\Validator\InclusionIn;

class Users extends Model
{
  public function validation()
      {

          if ($this->twitter_id === NULL) {
              $this->appendMessage(
                  new Message("This user is not active")
                  );
          }

          if ($this->validationHasFailed() === true) {
              return false;
          }
      }
}
