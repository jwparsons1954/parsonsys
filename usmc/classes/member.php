<?php
class Member {

  const MEMBER = 1;

  const MODERATOR = 2;

  const ADMINISTRATOR = 3;

  private $username;

  private $level;

  public function __construct( $username, $level ) {

    $this->username = $username;

    $this->level = $level;

  }

  public function getUsername() {

    return $this->username;

  }

  public function getLevel() {

    if ( $this->level == self::MEMBER ) return "a member";

    if ( $this->level == self::MODERATOR ) return "a moderator";

    if ( $this->level == self::ADMINISTRATOR ) return "an administrator";

    return "unknown";

  }

}

$aMember = new Member( "fred", Member::MEMBER );

$anotherMember = new Member( "mary", Member::ADMINISTRATOR );

echo $aMember->getUsername() . " is " . $aMember->getLevel() . "";  // Displays "fred is a member"

echo $anotherMember->getUsername() . " is " . $anotherMember->getLevel() . "";

// Displays "mary is an administrator"

?>
