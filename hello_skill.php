<?php

use \Alexa\Skill_Template;

class Hello_Skill extends Skill_Template {

  public function __construct( $app_id ) {
    $this->text_launch = "Welcome to hello skill";
    parent::__construct( $app_id );
  }

  public function intent_request() {
    $request = $this->input()->request();
    $response = $this->output()->response();

    switch ( $request->intent()->get_name() ) {
      case 'GeneralIntent':
        $reponse_text = "Hello world";

        $response->output_speech()->set_text( $reponse_text );
        $response->card()->set_title( 'Hello' );
        $response->card()->set_text( $reponse_text );
        $response->end_session();

        break;
      case 'PersonalIntent':
        $name = $request->intent()->get_slot_value( 'name' );

        $reponse_text = "Hello {$name}";
        $response->output_speech()->set_text( $reponse_text );
        $response->card()->set_title( "Hello" );
        $response->card()->set_text( $reponse_text );
        $response->end_session();

        break;
      default:
        $response->output_speech()->set_text( 'I did not understand, Repeat the sentence' );

        break;
    }
  }
}
