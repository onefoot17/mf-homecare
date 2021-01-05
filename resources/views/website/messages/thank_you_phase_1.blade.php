@section( 'title' ) {{ $title ?? __( 'Caregiver and Companionship Services for the Elderly - MF Homecare' ) }} @stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent
@stop

@section( 'content' )
    <div role="main" class="main">        

        <div class="mf__section mf__features mf__features--services">
            <div class="container">
                <div class="row">
                    <p>Thank you for completing Phase 1 of the Caregiver Registration process with MF Homecare.</p>
                    <br>
                    <br>
<p>You will receive an email momentarily from our partner <strong> Certn</strong>, who will process your Background Check. Please follow the instructions in that email in order to proceed with and complete your background check.</p>
<br>
<p>After your Background Check is complete, and if itś successful, please refer back to the email received from MF Homecare and click on the button to continue your registration with Phase 2.</p>
<br>
<p><strong>MF Homecare Team</strong></p>

                </div>
            </div>
        </div>
    </div>

    @include( 'website.layouts.footernav' )
@stop

@section( 'footer-scripts' )
@stop
