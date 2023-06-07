<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerGzG02IM\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerGzG02IM/EntityManagerGhost51e8656.php';
require __DIR__.'/ContainerGzG02IM/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerGzG02IM/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerGzG02IM/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerGzG02IM/getValidator_WhenService.php';
require __DIR__.'/ContainerGzG02IM/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerGzG02IM/getValidator_ExpressionService.php';
require __DIR__.'/ContainerGzG02IM/getValidator_EmailService.php';
require __DIR__.'/ContainerGzG02IM/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerGzG02IM/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerGzG02IM/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerGzG02IM/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerGzG02IM/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerGzG02IM/getSymfonycasts_ResetPassword_CleanerService.php';
require __DIR__.'/ContainerGzG02IM/getSession_FactoryService.php';
require __DIR__.'/ContainerGzG02IM/getServicesResetterService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_UserAuthenticatorService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_RememberMe_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_CheckRememberMeConditions_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Authenticator_RememberMeHandler_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Authenticator_RememberMe_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_Authenticator_Manager_MainService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerGzG02IM/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerGzG02IM/getSecrets_VaultService.php';
require __DIR__.'/ContainerGzG02IM/getRouting_LoaderService.php';
require __DIR__.'/ContainerGzG02IM/getPropertyAccessorService.php';
require __DIR__.'/ContainerGzG02IM/getMailer_TransportsService.php';
require __DIR__.'/ContainerGzG02IM/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerGzG02IM/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerGzG02IM/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerGzG02IM/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerGzG02IM/getMailer_TransportFactory_GmailService.php';
require __DIR__.'/ContainerGzG02IM/getMailer_MailerService.php';
require __DIR__.'/ContainerGzG02IM/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerGzG02IM/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerGzG02IM/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerGzG02IM/getForm_TypeExtension_Password_PasswordHasherService.php';
require __DIR__.'/ContainerGzG02IM/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerGzG02IM/getForm_TypeExtension_Form_PasswordHasherService.php';
require __DIR__.'/ContainerGzG02IM/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerGzG02IM/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerGzG02IM/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerGzG02IM/getForm_Type_FormService.php';
require __DIR__.'/ContainerGzG02IM/getForm_Type_FileService.php';
require __DIR__.'/ContainerGzG02IM/getForm_Type_EntityService.php';
require __DIR__.'/ContainerGzG02IM/getForm_Type_ColorService.php';
require __DIR__.'/ContainerGzG02IM/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerGzG02IM/getForm_ServerParamsService.php';
require __DIR__.'/ContainerGzG02IM/getForm_RegistryService.php';
require __DIR__.'/ContainerGzG02IM/getForm_Listener_PasswordHasherService.php';
require __DIR__.'/ContainerGzG02IM/getForm_FactoryService.php';
require __DIR__.'/ContainerGzG02IM/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerGzG02IM/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerGzG02IM/getErrorControllerService.php';
require __DIR__.'/ContainerGzG02IM/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerGzG02IM/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerGzG02IM/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerGzG02IM/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerGzG02IM/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerGzG02IM/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerGzG02IM/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerGzG02IM/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerGzG02IM/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerGzG02IM/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerGzG02IM/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerGzG02IM/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerGzG02IM/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerGzG02IM/getCache_SystemClearerService.php';
require __DIR__.'/ContainerGzG02IM/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerGzG02IM/getCache_AppClearerService.php';
require __DIR__.'/ContainerGzG02IM/getTemplateControllerService.php';
require __DIR__.'/ContainerGzG02IM/getRedirectControllerService.php';
require __DIR__.'/ContainerGzG02IM/getProfilerControllerService.php';
require __DIR__.'/ContainerGzG02IM/getPdfServiceService.php';
require __DIR__.'/ContainerGzG02IM/getLoginAuthenticatorService.php';
require __DIR__.'/ContainerGzG02IM/getTypePrixRepositoryService.php';
require __DIR__.'/ContainerGzG02IM/getResetPasswordRequestRepositoryService.php';
require __DIR__.'/ContainerGzG02IM/getReservationRepositoryService.php';
require __DIR__.'/ContainerGzG02IM/getPlaceRepositoryService.php';
require __DIR__.'/ContainerGzG02IM/getParkingRepositoryService.php';
require __DIR__.'/ContainerGzG02IM/getPaiementRepositoryService.php';
require __DIR__.'/ContainerGzG02IM/getEntreeSortieRepositoryService.php';
require __DIR__.'/ContainerGzG02IM/getClientRepositoryService.php';
require __DIR__.'/ContainerGzG02IM/getResetPasswordRequestFormTypeService.php';
require __DIR__.'/ContainerGzG02IM/getReservationTypeService.php';
require __DIR__.'/ContainerGzG02IM/getReservationStep2TypeService.php';
require __DIR__.'/ContainerGzG02IM/getReservationStep1TypeService.php';
require __DIR__.'/ContainerGzG02IM/getRegistrationFormTypeService.php';
require __DIR__.'/ContainerGzG02IM/getPlaceTypeService.php';
require __DIR__.'/ContainerGzG02IM/getParkingTypeService.php';
require __DIR__.'/ContainerGzG02IM/getPaiementTypeService.php';
require __DIR__.'/ContainerGzG02IM/getPaiement1TypeService.php';
require __DIR__.'/ContainerGzG02IM/getEntreeSortieTypeService.php';
require __DIR__.'/ContainerGzG02IM/getClientTypeService.php';
require __DIR__.'/ContainerGzG02IM/getChangePasswordFormTypeService.php';
require __DIR__.'/ContainerGzG02IM/getSessionControllerService.php';
require __DIR__.'/ContainerGzG02IM/getSecurityControllerService.php';
require __DIR__.'/ContainerGzG02IM/getResetPasswordControllerService.php';
require __DIR__.'/ContainerGzG02IM/getReservationControllerService.php';
require __DIR__.'/ContainerGzG02IM/getRegistrationControllerService.php';
require __DIR__.'/ContainerGzG02IM/getPlaceControllerService.php';
require __DIR__.'/ContainerGzG02IM/getParkingControllerService.php';
require __DIR__.'/ContainerGzG02IM/getPaiementControllerService.php';
require __DIR__.'/ContainerGzG02IM/getIParkControllerService.php';
require __DIR__.'/ContainerGzG02IM/getEntreeSortieControllerService.php';
require __DIR__.'/ContainerGzG02IM/getClientControllerService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_YzAlZASService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_YZoFQ81Service.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_UVvF4gLService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_TGqhVIService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_SUhGGztService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_RSTd_NAService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_LTbvCHwService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_HN9ZWIdService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_H9c0uBqService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_DoLz9aeService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_DSUTG_MService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_CaJHb8SService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_BSws_PLService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_QXTG4AService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_WprAEuService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_W6WaZsJService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_T1NedXTService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_Pl4zgr_Service.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_Og9uKc7Service.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_Mhqdd2rService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_LRiEkJYService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_JIwYVTkService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_CshazM0Service.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_9kKwU2tService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_69GazAService.php';
require __DIR__.'/ContainerGzG02IM/get_ServiceLocator_65t9AJdService.php';
require __DIR__.'/ContainerGzG02IM/get_Security_RequestMatcher_KLbKLHaService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\SymfonyCastsVerifyEmailBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\SymfonyCastsResetPasswordBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\Mailer\DataCollector\MessageDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpClient\TraceableHttpClient';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\ClientController';
$classes[] = 'App\Controller\EntreeSortieController';
$classes[] = 'App\Controller\IParkController';
$classes[] = 'App\Controller\PaiementController';
$classes[] = 'App\Controller\ParkingController';
$classes[] = 'App\Controller\PlaceController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Security\EmailVerifier';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator';
$classes[] = 'App\Controller\ReservationController';
$classes[] = 'App\Controller\ResetPasswordController';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\SessionController';
$classes[] = 'App\Form\ChangePasswordFormType';
$classes[] = 'App\Form\ClientType';
$classes[] = 'App\Form\EntreeSortieType';
$classes[] = 'App\Form\Paiement1Type';
$classes[] = 'App\Form\PaiementType';
$classes[] = 'App\Form\ParkingType';
$classes[] = 'App\Form\PlaceType';
$classes[] = 'App\Form\RegistrationFormType';
$classes[] = 'App\Form\ReservationStep1Type';
$classes[] = 'App\Form\ReservationStep2Type';
$classes[] = 'App\Form\ReservationType';
$classes[] = 'App\Form\ResetPasswordRequestFormType';
$classes[] = 'App\Repository\ClientRepository';
$classes[] = 'App\Repository\EntreeSortieRepository';
$classes[] = 'App\Repository\PaiementRepository';
$classes[] = 'App\Repository\ParkingRepository';
$classes[] = 'App\Repository\PlaceRepository';
$classes[] = 'App\Repository\ReservationRepository';
$classes[] = 'App\Repository\ResetPasswordRequestRepository';
$classes[] = 'App\Repository\TypePrixRepository';
$classes[] = 'App\Security\LoginAuthenticator';
$classes[] = 'App\Service\PdfService';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\FormTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\Mailer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessengerTransportListener';
$classes[] = 'Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler';
$classes[] = 'Symfony\Component\Security\Core\Signature\SignatureHasher';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\RememberMeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\UserAuthenticator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

$preloaded = Preloader::preload($classes);
