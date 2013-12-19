<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.cache' => 'getAssetic_CacheService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assetic.value_supplier.default' => 'getAssetic_ValueSupplier_DefaultService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.deprecation_logger_listener' => 'getDebug_DeprecationLoggerListenerService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService',
            'fos_rest.view.exception_wrapper_handler' => 'getFosRest_View_ExceptionWrapperHandlerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form.factory' => 'getFosUser_Group_Form_FactoryService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'gaufrette.sylius_image_filesystem' => 'getGaufrette_SyliusImageFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'hwi_oauth.http_client' => 'getHwiOauth_HttpClientService',
            'hwi_oauth.resource_owner.amazon' => 'getHwiOauth_ResourceOwner_AmazonService',
            'hwi_oauth.resource_owner.facebook' => 'getHwiOauth_ResourceOwner_FacebookService',
            'hwi_oauth.resource_owner.google' => 'getHwiOauth_ResourceOwner_GoogleService',
            'hwi_oauth.resource_ownermap.main' => 'getHwiOauth_ResourceOwnermap_MainService',
            'hwi_oauth.security.oauth_utils' => 'getHwiOauth_Security_OauthUtilsService',
            'hwi_oauth.storage.session' => 'getHwiOauth_Storage_SessionService',
            'hwi_oauth.templating.helper.oauth' => 'getHwiOauth_Templating_Helper_OauthService',
            'hwi_oauth.user_checker' => 'getHwiOauth_UserCheckerService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'jms_translation.config_factory' => 'getJmsTranslation_ConfigFactoryService',
            'jms_translation.loader_manager' => 'getJmsTranslation_LoaderManagerService',
            'jms_translation.twig_extension' => 'getJmsTranslation_TwigExtensionService',
            'jms_translation.updater' => 'getJmsTranslation_UpdaterService',
            'kernel' => 'getKernelService',
            'knp_gaufrette.filesystem_map' => 'getKnpGaufrette_FilesystemMapService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'knp_snappy.image' => 'getKnpSnappy_ImageService',
            'knp_snappy.pdf' => 'getKnpSnappy_PdfService',
            'liip_doctrine_cache.ns.sylius_settings' => 'getLiipDoctrineCache_Ns_SyliusSettingsService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.cache.clearer' => 'getLiipImagine_Cache_ClearerService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.no_cache' => 'getLiipImagine_Cache_Resolver_NoCacheService',
            'liip_imagine.cache.resolver.web_path' => 'getLiipImagine_Cache_Resolver_WebPathService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.loader.filesystem' => 'getLiipImagine_Data_Loader_FilesystemService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.routing.loader' => 'getLiipImagine_Routing_LoaderService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.firephp' => 'getMonolog_Handler_FirephpService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.deprecation' => 'getMonolog_Logger_DeprecationService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.snappy' => 'getMonolog_Logger_SnappyService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'payum' => 'getPayumService',
            'payum.action.capture_details_aggregated_model' => 'getPayum_Action_CaptureDetailsAggregatedModelService',
            'payum.action.status_details_aggregated_model' => 'getPayum_Action_StatusDetailsAggregatedModelService',
            'payum.action.sync_details_aggregated_model' => 'getPayum_Action_SyncDetailsAggregatedModelService',
            'payum.buzz.client' => 'getPayum_Buzz_ClientService',
            'payum.context._security_token.storage.syliusbundlepayumbundlemodelpaymentsecuritytoken' => 'getPayum_Context_SecurityToken_Storage_SyliusbundlepayumbundlemodelpaymentsecuritytokenService',
            'payum.context.be2bill.api' => 'getPayum_Context_Be2bill_ApiService',
            'payum.context.be2bill.payment' => 'getPayum_Context_Be2bill_PaymentService',
            'payum.context.be2bill.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_Be2bill_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_Be2bill_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.context.dummy.payment' => 'getPayum_Context_Dummy_PaymentService',
            'payum.context.dummy.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_Dummy_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_Dummy_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.context.paypal_express_checkout.api' => 'getPayum_Context_PaypalExpressCheckout_ApiService',
            'payum.context.paypal_express_checkout.payment' => 'getPayum_Context_PaypalExpressCheckout_PaymentService',
            'payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_PaypalExpressCheckout_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_PaypalExpressCheckout_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.context.stripe.action.capture' => 'getPayum_Context_Stripe_Action_CaptureService',
            'payum.context.stripe.action.status' => 'getPayum_Context_Stripe_Action_StatusService',
            'payum.context.stripe.gateway' => 'getPayum_Context_Stripe_GatewayService',
            'payum.context.stripe.payment' => 'getPayum_Context_Stripe_PaymentService',
            'payum.context.stripe.storage.syliusbundlecorebundlemodelorder' => 'getPayum_Context_Stripe_Storage_SyliusbundlecorebundlemodelorderService',
            'payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment' => 'getPayum_Context_Stripe_Storage_SyliusbundlepaymentsbundlemodelpaymentService',
            'payum.entity_manager' => 'getPayum_EntityManagerService',
            'payum.extension.endless_cycle_detector' => 'getPayum_Extension_EndlessCycleDetectorService',
            'payum.extension.log_executed_actions' => 'getPayum_Extension_LogExecutedActionsService',
            'payum.extension.logger' => 'getPayum_Extension_LoggerService',
            'payum.listener.interactive_request' => 'getPayum_Listener_InteractiveRequestService',
            'payum.security.http_request_verifier' => 'getPayum_Security_HttpRequestVerifierService',
            'payum.security.token_factory' => 'getPayum_Security_TokenFactoryService',
            'payum.security.token_storage' => 'getPayum_Security_TokenStorageService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.administration' => 'getSecurity_Firewall_Map_Context_AdministrationService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'sylius.availability_checker.default' => 'getSylius_AvailabilityChecker_DefaultService',
            'sylius.backorders_handler' => 'getSylius_BackordersHandlerService',
            'sylius.builder.product' => 'getSylius_Builder_ProductService',
            'sylius.builder.prototype' => 'getSylius_Builder_PrototypeService',
            'sylius.cart.purger' => 'getSylius_Cart_PurgerService',
            'sylius.cart_flash_listener' => 'getSylius_CartFlashListenerService',
            'sylius.cart_item_resolver.default' => 'getSylius_CartItemResolver_DefaultService',
            'sylius.cart_listener' => 'getSylius_CartListenerService',
            'sylius.cart_provider.default' => 'getSylius_CartProvider_DefaultService',
            'sylius.cart_storage.session' => 'getSylius_CartStorage_SessionService',
            'sylius.cart_twig' => 'getSylius_CartTwigService',
            'sylius.checker.restricted_zone' => 'getSylius_Checker_RestrictedZoneService',
            'sylius.checkout_form.addressing' => 'getSylius_CheckoutForm_AddressingService',
            'sylius.checkout_form.payment' => 'getSylius_CheckoutForm_PaymentService',
            'sylius.checkout_form.shipment' => 'getSylius_CheckoutForm_ShipmentService',
            'sylius.checkout_form.shipping' => 'getSylius_CheckoutForm_ShippingService',
            'sylius.checkout_scenario' => 'getSylius_CheckoutScenarioService',
            'sylius.checkout_step.addressing' => 'getSylius_CheckoutStep_AddressingService',
            'sylius.checkout_step.finalize' => 'getSylius_CheckoutStep_FinalizeService',
            'sylius.checkout_step.payment' => 'getSylius_CheckoutStep_PaymentService',
            'sylius.checkout_step.security' => 'getSylius_CheckoutStep_SecurityService',
            'sylius.checkout_step.shipping' => 'getSylius_CheckoutStep_ShippingService',
            'sylius.controller.address' => 'getSylius_Controller_AddressService',
            'sylius.controller.adjustment' => 'getSylius_Controller_AdjustmentService',
            'sylius.controller.backend.dashboard' => 'getSylius_Controller_Backend_DashboardService',
            'sylius.controller.backend.security' => 'getSylius_Controller_Backend_SecurityService',
            'sylius.controller.cart' => 'getSylius_Controller_CartService',
            'sylius.controller.cart_item' => 'getSylius_Controller_CartItemService',
            'sylius.controller.country' => 'getSylius_Controller_CountryService',
            'sylius.controller.currency' => 'getSylius_Controller_CurrencyService',
            'sylius.controller.exchange_rate' => 'getSylius_Controller_ExchangeRateService',
            'sylius.controller.frontend.account.order' => 'getSylius_Controller_Frontend_Account_OrderService',
            'sylius.controller.frontend.homepage' => 'getSylius_Controller_Frontend_HomepageService',
            'sylius.controller.group' => 'getSylius_Controller_GroupService',
            'sylius.controller.inventory_unit' => 'getSylius_Controller_InventoryUnitService',
            'sylius.controller.option' => 'getSylius_Controller_OptionService',
            'sylius.controller.order' => 'getSylius_Controller_OrderService',
            'sylius.controller.order_item' => 'getSylius_Controller_OrderItemService',
            'sylius.controller.payment' => 'getSylius_Controller_PaymentService',
            'sylius.controller.payment_method' => 'getSylius_Controller_PaymentMethodService',
            'sylius.controller.process' => 'getSylius_Controller_ProcessService',
            'sylius.controller.product' => 'getSylius_Controller_ProductService',
            'sylius.controller.promotion' => 'getSylius_Controller_PromotionService',
            'sylius.controller.promotion_action' => 'getSylius_Controller_PromotionActionService',
            'sylius.controller.promotion_coupon' => 'getSylius_Controller_PromotionCouponService',
            'sylius.controller.promotion_rule' => 'getSylius_Controller_PromotionRuleService',
            'sylius.controller.property' => 'getSylius_Controller_PropertyService',
            'sylius.controller.prototype' => 'getSylius_Controller_PrototypeService',
            'sylius.controller.province' => 'getSylius_Controller_ProvinceService',
            'sylius.controller.settings' => 'getSylius_Controller_SettingsService',
            'sylius.controller.shipment' => 'getSylius_Controller_ShipmentService',
            'sylius.controller.shipping_category' => 'getSylius_Controller_ShippingCategoryService',
            'sylius.controller.shipping_method' => 'getSylius_Controller_ShippingMethodService',
            'sylius.controller.tax_category' => 'getSylius_Controller_TaxCategoryService',
            'sylius.controller.tax_rate' => 'getSylius_Controller_TaxRateService',
            'sylius.controller.taxon' => 'getSylius_Controller_TaxonService',
            'sylius.controller.taxonomy' => 'getSylius_Controller_TaxonomyService',
            'sylius.controller.user' => 'getSylius_Controller_UserService',
            'sylius.controller.variant' => 'getSylius_Controller_VariantService',
            'sylius.controller.zone' => 'getSylius_Controller_ZoneService',
            'sylius.controller.zone_member' => 'getSylius_Controller_ZoneMemberService',
            'sylius.currency_context' => 'getSylius_CurrencyContextService',
            'sylius.currency_converter' => 'getSylius_CurrencyConverterService',
            'sylius.event_subscriber.load_metadata' => 'getSylius_EventSubscriber_LoadMetadataService',
            'sylius.form.frontend.profile.type' => 'getSylius_Form_Frontend_Profile_TypeService',
            'sylius.form.listener.address' => 'getSylius_Form_Listener_AddressService',
            'sylius.form.type.address' => 'getSylius_Form_Type_AddressService',
            'sylius.form.type.adjustment' => 'getSylius_Form_Type_AdjustmentService',
            'sylius.form.type.cart' => 'getSylius_Form_Type_CartService',
            'sylius.form.type.cart_item' => 'getSylius_Form_Type_CartItemService',
            'sylius.form.type.configuration' => 'getSylius_Form_Type_ConfigurationService',
            'sylius.form.type.configuration.database' => 'getSylius_Form_Type_Configuration_DatabaseService',
            'sylius.form.type.configuration.hidden' => 'getSylius_Form_Type_Configuration_HiddenService',
            'sylius.form.type.configuration.locale' => 'getSylius_Form_Type_Configuration_LocaleService',
            'sylius.form.type.configuration.mailer' => 'getSylius_Form_Type_Configuration_MailerService',
            'sylius.form.type.country' => 'getSylius_Form_Type_CountryService',
            'sylius.form.type.country_choice' => 'getSylius_Form_Type_CountryChoiceService',
            'sylius.form.type.credit_card' => 'getSylius_Form_Type_CreditCardService',
            'sylius.form.type.exchange_rate' => 'getSylius_Form_Type_ExchangeRateService',
            'sylius.form.type.group' => 'getSylius_Form_Type_GroupService',
            'sylius.form.type.group_choice' => 'getSylius_Form_Type_GroupChoiceService',
            'sylius.form.type.image' => 'getSylius_Form_Type_ImageService',
            'sylius.form.type.list' => 'getSylius_Form_Type_ListService',
            'sylius.form.type.money' => 'getSylius_Form_Type_MoneyService',
            'sylius.form.type.option' => 'getSylius_Form_Type_OptionService',
            'sylius.form.type.option_choice' => 'getSylius_Form_Type_OptionChoiceService',
            'sylius.form.type.option_value' => 'getSylius_Form_Type_OptionValueService',
            'sylius.form.type.option_value_choice' => 'getSylius_Form_Type_OptionValueChoiceService',
            'sylius.form.type.option_value_collection' => 'getSylius_Form_Type_OptionValueCollectionService',
            'sylius.form.type.order' => 'getSylius_Form_Type_OrderService',
            'sylius.form.type.order_filter' => 'getSylius_Form_Type_OrderFilterService',
            'sylius.form.type.order_item' => 'getSylius_Form_Type_OrderItemService',
            'sylius.form.type.payment' => 'getSylius_Form_Type_PaymentService',
            'sylius.form.type.payment_gateway_choice' => 'getSylius_Form_Type_PaymentGatewayChoiceService',
            'sylius.form.type.payment_method' => 'getSylius_Form_Type_PaymentMethodService',
            'sylius.form.type.payment_method_choice' => 'getSylius_Form_Type_PaymentMethodChoiceService',
            'sylius.form.type.product' => 'getSylius_Form_Type_ProductService',
            'sylius.form.type.product_filter' => 'getSylius_Form_Type_ProductFilterService',
            'sylius.form.type.product_property' => 'getSylius_Form_Type_ProductPropertyService',
            'sylius.form.type.product_to_identifier' => 'getSylius_Form_Type_ProductToIdentifierService',
            'sylius.form.type.promotion' => 'getSylius_Form_Type_PromotionService',
            'sylius.form.type.promotion_action' => 'getSylius_Form_Type_PromotionActionService',
            'sylius.form.type.promotion_action.fixed_discount_configuration' => 'getSylius_Form_Type_PromotionAction_FixedDiscountConfigurationService',
            'sylius.form.type.promotion_action.percentage_discount_configuration' => 'getSylius_Form_Type_PromotionAction_PercentageDiscountConfigurationService',
            'sylius.form.type.promotion_action_choice' => 'getSylius_Form_Type_PromotionActionChoiceService',
            'sylius.form.type.promotion_coupon' => 'getSylius_Form_Type_PromotionCouponService',
            'sylius.form.type.promotion_coupon_generate_instruction' => 'getSylius_Form_Type_PromotionCouponGenerateInstructionService',
            'sylius.form.type.promotion_coupon_to_code' => 'getSylius_Form_Type_PromotionCouponToCodeService',
            'sylius.form.type.promotion_rule' => 'getSylius_Form_Type_PromotionRuleService',
            'sylius.form.type.promotion_rule.item_count_configuration' => 'getSylius_Form_Type_PromotionRule_ItemCountConfigurationService',
            'sylius.form.type.promotion_rule.item_total_configuration' => 'getSylius_Form_Type_PromotionRule_ItemTotalConfigurationService',
            'sylius.form.type.promotion_rule_choice' => 'getSylius_Form_Type_PromotionRuleChoiceService',
            'sylius.form.type.property' => 'getSylius_Form_Type_PropertyService',
            'sylius.form.type.property_choice' => 'getSylius_Form_Type_PropertyChoiceService',
            'sylius.form.type.prototype' => 'getSylius_Form_Type_PrototypeService',
            'sylius.form.type.province' => 'getSylius_Form_Type_ProvinceService',
            'sylius.form.type.province_choice' => 'getSylius_Form_Type_ProvinceChoiceService',
            'sylius.form.type.setup' => 'getSylius_Form_Type_SetupService',
            'sylius.form.type.shipping_calculator.flat_rate_configuration' => 'getSylius_Form_Type_ShippingCalculator_FlatRateConfigurationService',
            'sylius.form.type.shipping_calculator.flexible_rate_configuration' => 'getSylius_Form_Type_ShippingCalculator_FlexibleRateConfigurationService',
            'sylius.form.type.shipping_calculator.per_item_rate_configuration' => 'getSylius_Form_Type_ShippingCalculator_PerItemRateConfigurationService',
            'sylius.form.type.shipping_calculator_choice' => 'getSylius_Form_Type_ShippingCalculatorChoiceService',
            'sylius.form.type.shipping_category' => 'getSylius_Form_Type_ShippingCategoryService',
            'sylius.form.type.shipping_category_choice' => 'getSylius_Form_Type_ShippingCategoryChoiceService',
            'sylius.form.type.shipping_method' => 'getSylius_Form_Type_ShippingMethodService',
            'sylius.form.type.shipping_method_choice' => 'getSylius_Form_Type_ShippingMethodChoiceService',
            'sylius.form.type.shipping_rule_item_count_configuration' => 'getSylius_Form_Type_ShippingRuleItemCountConfigurationService',
            'sylius.form.type.tax_calculator_choice' => 'getSylius_Form_Type_TaxCalculatorChoiceService',
            'sylius.form.type.tax_category' => 'getSylius_Form_Type_TaxCategoryService',
            'sylius.form.type.tax_category_choice' => 'getSylius_Form_Type_TaxCategoryChoiceService',
            'sylius.form.type.tax_rate' => 'getSylius_Form_Type_TaxRateService',
            'sylius.form.type.taxon' => 'getSylius_Form_Type_TaxonService',
            'sylius.form.type.taxon_choice' => 'getSylius_Form_Type_TaxonChoiceService',
            'sylius.form.type.taxon_selection' => 'getSylius_Form_Type_TaxonSelectionService',
            'sylius.form.type.taxonomy' => 'getSylius_Form_Type_TaxonomyService',
            'sylius.form.type.taxonomy_choice' => 'getSylius_Form_Type_TaxonomyChoiceService',
            'sylius.form.type.user' => 'getSylius_Form_Type_UserService',
            'sylius.form.type.user_filter' => 'getSylius_Form_Type_UserFilterService',
            'sylius.form.type.variant' => 'getSylius_Form_Type_VariantService',
            'sylius.form.type.variant_choice' => 'getSylius_Form_Type_VariantChoiceService',
            'sylius.form.type.variant_match' => 'getSylius_Form_Type_VariantMatchService',
            'sylius.form.type.variant_to_identifier' => 'getSylius_Form_Type_VariantToIdentifierService',
            'sylius.form.type.zone' => 'getSylius_Form_Type_ZoneService',
            'sylius.form.type.zone_choice' => 'getSylius_Form_Type_ZoneChoiceService',
            'sylius.form.type.zone_member_collection' => 'getSylius_Form_Type_ZoneMemberCollectionService',
            'sylius.form.type.zone_member_country' => 'getSylius_Form_Type_ZoneMemberCountryService',
            'sylius.form.type.zone_member_province' => 'getSylius_Form_Type_ZoneMemberProvinceService',
            'sylius.form.type.zone_member_zone' => 'getSylius_Form_Type_ZoneMemberZoneService',
            'sylius.generator.order_number' => 'getSylius_Generator_OrderNumberService',
            'sylius.generator.promotion_coupon' => 'getSylius_Generator_PromotionCouponService',
            'sylius.generator.variant' => 'getSylius_Generator_VariantService',
            'sylius.image_uploader' => 'getSylius_ImageUploaderService',
            'sylius.installer.scenario' => 'getSylius_Installer_ScenarioService',
            'sylius.installer.yaml_persister' => 'getSylius_Installer_YamlPersisterService',
            'sylius.inventory_listener' => 'getSylius_InventoryListenerService',
            'sylius.inventory_operator.default' => 'getSylius_InventoryOperator_DefaultService',
            'sylius.inventory_twig' => 'getSylius_InventoryTwigService',
            'sylius.inventory_unit_factory' => 'getSylius_InventoryUnitFactoryService',
            'sylius.listener.frontend.address' => 'getSylius_Listener_Frontend_AddressService',
            'sylius.listener.image_upload' => 'getSylius_Listener_ImageUploadService',
            'sylius.listener.locale' => 'getSylius_Listener_LocaleService',
            'sylius.listener.order_confirmation_email' => 'getSylius_Listener_OrderConfirmationEmailService',
            'sylius.listener.order_currency' => 'getSylius_Listener_OrderCurrencyService',
            'sylius.listener.order_inventory' => 'getSylius_Listener_OrderInventoryService',
            'sylius.listener.order_number' => 'getSylius_Listener_OrderNumberService',
            'sylius.listener.order_payment' => 'getSylius_Listener_OrderPaymentService',
            'sylius.listener.order_promotion' => 'getSylius_Listener_OrderPromotionService',
            'sylius.listener.order_shipping' => 'getSylius_Listener_OrderShippingService',
            'sylius.listener.order_state' => 'getSylius_Listener_OrderStateService',
            'sylius.listener.order_taxation' => 'getSylius_Listener_OrderTaxationService',
            'sylius.listener.restricted_zone' => 'getSylius_Listener_RestrictedZoneService',
            'sylius.listener.user_update' => 'getSylius_Listener_UserUpdateService',
            'sylius.mailer' => 'getSylius_MailerService',
            'sylius.mailer.order_confirmation' => 'getSylius_Mailer_OrderConfirmationService',
            'sylius.menu.backend.main' => 'getSylius_Menu_Backend_MainService',
            'sylius.menu.backend.sidebar' => 'getSylius_Menu_Backend_SidebarService',
            'sylius.menu.frontend.account' => 'getSylius_Menu_Frontend_AccountService',
            'sylius.menu.frontend.currency' => 'getSylius_Menu_Frontend_CurrencyService',
            'sylius.menu.frontend.main' => 'getSylius_Menu_Frontend_MainService',
            'sylius.menu.frontend.social' => 'getSylius_Menu_Frontend_SocialService',
            'sylius.menu.frontend.taxonomies' => 'getSylius_Menu_Frontend_TaxonomiesService',
            'sylius.menu_builder.backend' => 'getSylius_MenuBuilder_BackendService',
            'sylius.menu_builder.frontend' => 'getSylius_MenuBuilder_FrontendService',
            'sylius.oauth.user_provider' => 'getSylius_Oauth_UserProviderService',
            'sylius.order_processing.inventory_handler' => 'getSylius_OrderProcessing_InventoryHandlerService',
            'sylius.order_processing.payment_processor' => 'getSylius_OrderProcessing_PaymentProcessorService',
            'sylius.order_processing.shipment_factory' => 'getSylius_OrderProcessing_ShipmentFactoryService',
            'sylius.order_processing.shipping_processor' => 'getSylius_OrderProcessing_ShippingProcessorService',
            'sylius.order_processing.state_resolver' => 'getSylius_OrderProcessing_StateResolverService',
            'sylius.order_processing.taxation_processor' => 'getSylius_OrderProcessing_TaxationProcessorService',
            'sylius.payum.action.execute_same_request_with_payment_details' => 'getSylius_Payum_Action_ExecuteSameRequestWithPaymentDetailsService',
            'sylius.payum.action.obtain_credit_card' => 'getSylius_Payum_Action_ObtainCreditCardService',
            'sylius.payum.action.order_status' => 'getSylius_Payum_Action_OrderStatusService',
            'sylius.payum.be2bill.action.capture_order_using_credit_card' => 'getSylius_Payum_Be2bill_Action_CaptureOrderUsingCreditCardService',
            'sylius.payum.checkout_step.purchase' => 'getSylius_Payum_CheckoutStep_PurchaseService',
            'sylius.payum.dummy.action.capture_order' => 'getSylius_Payum_Dummy_Action_CaptureOrderService',
            'sylius.payum.dummy.action.order_status' => 'getSylius_Payum_Dummy_Action_OrderStatusService',
            'sylius.payum.paypal.action.capture_order_using_express_checkout' => 'getSylius_Payum_Paypal_Action_CaptureOrderUsingExpressCheckoutService',
            'sylius.payum.stripe.action.capture_order_using_credit_card' => 'getSylius_Payum_Stripe_Action_CaptureOrderUsingCreditCardService',
            'sylius.process.builder' => 'getSylius_Process_BuilderService',
            'sylius.process.context' => 'getSylius_Process_ContextService',
            'sylius.process.coordinator' => 'getSylius_Process_CoordinatorService',
            'sylius.process_storage.session' => 'getSylius_ProcessStorage_SessionService',
            'sylius.process_storage.session.bag' => 'getSylius_ProcessStorage_Session_BagService',
            'sylius.promotion_action.fixed_discount' => 'getSylius_PromotionAction_FixedDiscountService',
            'sylius.promotion_action.percentage_discount' => 'getSylius_PromotionAction_PercentageDiscountService',
            'sylius.promotion_applicator' => 'getSylius_PromotionApplicatorService',
            'sylius.promotion_eligibility_checker' => 'getSylius_PromotionEligibilityCheckerService',
            'sylius.promotion_processor' => 'getSylius_PromotionProcessorService',
            'sylius.promotion_rule_checker.item_count' => 'getSylius_PromotionRuleChecker_ItemCountService',
            'sylius.promotion_rule_checker.item_total' => 'getSylius_PromotionRuleChecker_ItemTotalService',
            'sylius.registry.promotion_action' => 'getSylius_Registry_PromotionActionService',
            'sylius.registry.promotion_rule_checker' => 'getSylius_Registry_PromotionRuleCheckerService',
            'sylius.repository.address' => 'getSylius_Repository_AddressService',
            'sylius.repository.adjustment' => 'getSylius_Repository_AdjustmentService',
            'sylius.repository.country' => 'getSylius_Repository_CountryService',
            'sylius.repository.credit_card' => 'getSylius_Repository_CreditCardService',
            'sylius.repository.exchange_rate' => 'getSylius_Repository_ExchangeRateService',
            'sylius.repository.group' => 'getSylius_Repository_GroupService',
            'sylius.repository.inventory_unit' => 'getSylius_Repository_InventoryUnitService',
            'sylius.repository.option' => 'getSylius_Repository_OptionService',
            'sylius.repository.option_value' => 'getSylius_Repository_OptionValueService',
            'sylius.repository.order' => 'getSylius_Repository_OrderService',
            'sylius.repository.order_item' => 'getSylius_Repository_OrderItemService',
            'sylius.repository.parameter' => 'getSylius_Repository_ParameterService',
            'sylius.repository.payment' => 'getSylius_Repository_PaymentService',
            'sylius.repository.payment_method' => 'getSylius_Repository_PaymentMethodService',
            'sylius.repository.payment_security_token' => 'getSylius_Repository_PaymentSecurityTokenService',
            'sylius.repository.product' => 'getSylius_Repository_ProductService',
            'sylius.repository.product_property' => 'getSylius_Repository_ProductPropertyService',
            'sylius.repository.promotion' => 'getSylius_Repository_PromotionService',
            'sylius.repository.promotion_action' => 'getSylius_Repository_PromotionActionService',
            'sylius.repository.promotion_coupon' => 'getSylius_Repository_PromotionCouponService',
            'sylius.repository.promotion_rule' => 'getSylius_Repository_PromotionRuleService',
            'sylius.repository.property' => 'getSylius_Repository_PropertyService',
            'sylius.repository.prototype' => 'getSylius_Repository_PrototypeService',
            'sylius.repository.province' => 'getSylius_Repository_ProvinceService',
            'sylius.repository.shipment' => 'getSylius_Repository_ShipmentService',
            'sylius.repository.shipment_item' => 'getSylius_Repository_ShipmentItemService',
            'sylius.repository.shipping_category' => 'getSylius_Repository_ShippingCategoryService',
            'sylius.repository.shipping_method' => 'getSylius_Repository_ShippingMethodService',
            'sylius.repository.shipping_method_rule' => 'getSylius_Repository_ShippingMethodRuleService',
            'sylius.repository.tax_category' => 'getSylius_Repository_TaxCategoryService',
            'sylius.repository.tax_rate' => 'getSylius_Repository_TaxRateService',
            'sylius.repository.taxon' => 'getSylius_Repository_TaxonService',
            'sylius.repository.taxonomy' => 'getSylius_Repository_TaxonomyService',
            'sylius.repository.user' => 'getSylius_Repository_UserService',
            'sylius.repository.variant' => 'getSylius_Repository_VariantService',
            'sylius.repository.zone' => 'getSylius_Repository_ZoneService',
            'sylius.repository.zone_member' => 'getSylius_Repository_ZoneMemberService',
            'sylius.repository.zone_member_country' => 'getSylius_Repository_ZoneMemberCountryService',
            'sylius.repository.zone_member_province' => 'getSylius_Repository_ZoneMemberProvinceService',
            'sylius.repository.zone_member_zone' => 'getSylius_Repository_ZoneMemberZoneService',
            'sylius.requirements' => 'getSylius_RequirementsService',
            'sylius.settings.form_factory' => 'getSylius_Settings_FormFactoryService',
            'sylius.settings.manager' => 'getSylius_Settings_ManagerService',
            'sylius.settings.schema_registry' => 'getSylius_Settings_SchemaRegistryService',
            'sylius.settings.twig' => 'getSylius_Settings_TwigService',
            'sylius.settings_schema.general' => 'getSylius_SettingsSchema_GeneralService',
            'sylius.settings_schema.taxation' => 'getSylius_SettingsSchema_TaxationService',
            'sylius.shipping_calculator' => 'getSylius_ShippingCalculatorService',
            'sylius.shipping_calculator.flexible_rate' => 'getSylius_ShippingCalculator_FlexibleRateService',
            'sylius.shipping_calculator.per_item_rate' => 'getSylius_ShippingCalculator_PerItemRateService',
            'sylius.shipping_calculator_registry' => 'getSylius_ShippingCalculatorRegistryService',
            'sylius.shipping_eligibility_checker' => 'getSylius_ShippingEligibilityCheckerService',
            'sylius.shipping_methods_resolver' => 'getSylius_ShippingMethodsResolverService',
            'sylius.shipping_rule_checker.item_count' => 'getSylius_ShippingRuleChecker_ItemCountService',
            'sylius.shipping_rule_checker_registry' => 'getSylius_ShippingRuleCheckerRegistryService',
            'sylius.shipping_shipping_calculator.flat_rate' => 'getSylius_ShippingShippingCalculator_FlatRateService',
            'sylius.tax_calculator' => 'getSylius_TaxCalculatorService',
            'sylius.tax_calculator.default' => 'getSylius_TaxCalculator_DefaultService',
            'sylius.tax_rate_resolver' => 'getSylius_TaxRateResolverService',
            'sylius.twig.money' => 'getSylius_Twig_MoneyService',
            'sylius.twig.restricted_zone_extension' => 'getSylius_Twig_RestrictedZoneExtensionService',
            'sylius.twig.text_extension' => 'getSylius_Twig_TextExtensionService',
            'sylius.user.registration.form.type' => 'getSylius_User_Registration_Form_TypeService',
            'sylius.validator.product.unique' => 'getSylius_Validator_Product_UniqueService',
            'sylius.validator.variant.combination' => 'getSylius_Validator_Variant_CombinationService',
            'sylius.validator.variant.unique' => 'getSylius_Validator_Variant_UniqueService',
            'sylius.zone_matcher' => 'getSylius_ZoneMatcherService',
            'sylius_resource.twig' => 'getSyliusResource_TwigService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.mapping.class_metadata_factory' => 'getValidator_Mapping_ClassMetadataFactoryService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'white_october_pagerfanta.view_factory' => 'getWhiteOctoberPagerfanta_ViewFactoryService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'debug.templating.engine.twig' => 'templating',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'router',
            'fos_rest.serializer' => 'jms_serializer',
            'fos_rest.templating' => 'templating',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'hwi_oauth.user.provider.entity.main' => 'sylius.oauth.user_provider',
            'mailer' => 'swiftmailer.mailer.default',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'sylius.availability_checker' => 'sylius.availability_checker.default',
            'sylius.cart_provider' => 'sylius.cart_provider.default',
            'sylius.cart_resolver' => 'sylius.cart_item_resolver.default',
            'sylius.cart_storage' => 'sylius.cart_storage.session',
            'sylius.inventory_operator' => 'sylius.inventory_operator.default',
            'sylius.manager.address' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.adjustment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.cart' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.cart_item' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.country' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.credit_card' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.exchange_rate' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.group' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.inventory_unit' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.option' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.option_value' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order_item' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.parameter' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_method' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_security_token' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_property' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_action' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_coupon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_rule' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.property' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.prototype' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.province' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipment_item' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_category' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_method' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_method_rule' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.tax_category' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.tax_rate' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxonomy' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.variant' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member_country' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member_province' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member_zone' => 'doctrine.orm.default_entity_manager',
            'sylius.process_storage' => 'sylius.process_storage.session',
            'sylius.repository.cart' => 'sylius.repository.order',
            'sylius.repository.cart_item' => 'sylius.repository.order_item',
            'sylius.settings.cache' => 'liip_doctrine_cache.ns.sylius_settings',
            'translator' => 'translator.default',
        );
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/var/www/lokisalle/app/cache/dev/annotations', true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/var/www/lokisalle/app/cache/dev/assetic/config'), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SyliusWebBundle', '/var/www/lokisalle/app/Resources/SyliusWebBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SyliusWebBundle', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/var/www/lokisalle/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * @return Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        $instance = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('request'), $this->get('assetic.asset_manager'), $this->get('assetic.cache'), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        if ($this->has('assetic.value_supplier.default')) {
            $instance->setValueSupplier($this->get('assetic.value_supplier.default', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('liip_imagine.cache.clearer')));
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/var/www/lokisalle/app/Resources');

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c)));
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.deprecation_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_DeprecationLoggerListenerService()
    {
        return $this->services['debug.deprecation_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('deprecation', $this->get('monolog.logger.deprecation', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.emergency_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher($this->get('event_dispatcher'), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setProfiler($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance.
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'imagine' => 'liip_imagine.templating.helper', 'jms_serializer' => 'jms_serializer.templating.helper.serializer', 'oauth' => 'hwi_oauth.templating.helper.oauth'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $b->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $c = new \Doctrine\DBAL\Configuration();
        $c->setSQLLogger($b);

        $d = new \Gedmo\Sluggable\SluggableListener();
        $d->setAnnotationReader($a);

        $e = new \Gedmo\Tree\TreeListener();
        $e->setAnnotationReader($a);

        $f = new \Gedmo\Timestampable\TimestampableListener();
        $f->setAnnotationReader($a);

        $g = new \Gedmo\SoftDeleteable\SoftDeleteableListener();
        $g->setAnnotationReader($a);

        $h = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $h->addResolveTargetEntity('Sylius\\Bundle\\OrderBundle\\Model\\OrderInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Order', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\OrderBundle\\Model\\OrderItemInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\OrderBundle\\Model\\AdjustmentInterface', 'Sylius\\Bundle\\OrderBundle\\Model\\Adjustment', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRateInterface', 'Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\SettingsBundle\\Model\\ParameterInterface', 'Sylius\\Bundle\\SettingsBundle\\Model\\Parameter', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\CartBundle\\Model\\CartInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Order', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\CartBundle\\Model\\CartItemInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ProductBundle\\Model\\ProductInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Product', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ProductBundle\\Model\\PropertyInterface', 'Sylius\\Bundle\\ProductBundle\\Model\\Property', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ProductBundle\\Model\\ProductPropertyInterface', 'Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ProductBundle\\Model\\PrototypeInterface', 'Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\VariableProductBundle\\Model\\VariantInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Variant', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\VariableProductBundle\\Model\\OptionInterface', 'Sylius\\Bundle\\VariableProductBundle\\Model\\Option', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValueInterface', 'Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategoryInterface', 'Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\TaxationBundle\\Model\\TaxRateInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\TaxRate', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShipmentInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Shipment', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShipmentItemInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategoryInterface', 'Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingMethodInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\ShippingBundle\\Model\\RuleInterface', 'Sylius\\Bundle\\ShippingBundle\\Model\\Rule', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCardInterface', 'Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentInterface', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentLogInterface', 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentLog', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethodInterface', 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod', array());
        $h->addResolveTargetEntity('Payum\\Security\\TokenInterface', 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\PromotionInterface', 'Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\CouponInterface', 'Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\RuleInterface', 'Sylius\\Bundle\\PromotionsBundle\\Model\\Rule', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\PromotionsBundle\\Model\\ActionInterface', 'Sylius\\Bundle\\PromotionsBundle\\Model\\Action', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\AddressInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\Address', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\CountryInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\Country', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ProvinceInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\Province', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\Zone', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberInterface', 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\InventoryBundle\\Model\\InventoryUnitInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\InventoryBundle\\Model\\StockableInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Variant', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\TaxonomiesBundle\\Model\\TaxonomyInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\TaxonomiesBundle\\Model\\TaxonInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Taxon', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\CoreBundle\\Model\\UserInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\User', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\CoreBundle\\Model\\GroupInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\Group', array());
        $h->addResolveTargetEntity('Sylius\\Bundle\\CoreBundle\\Model\\VariantImageInterface', 'Sylius\\Bundle\\CoreBundle\\Model\\VariantImage', array());

        $i = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $i->addEventSubscriber($this->get('sylius.event_subscriber.load_metadata'));
        $i->addEventSubscriber($d);
        $i->addEventSubscriber(new \FOS\UserBundle\Doctrine\Orm\UserListener($this));
        $i->addEventSubscriber($e);
        $i->addEventSubscriber($f);
        $i->addEventSubscriber($g);
        $i->addEventListener(array(0 => 'loadClassMetadata'), $h);

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'symfony_dev', 'host' => '127.0.0.1', 'port' => NULL, 'user' => 'root', 'password' => '93Hardcore9351.', 'charset' => 'UTF8', 'driver' => 'pdo_mysql', 'driverOptions' => array()), $c, $i, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_3ba4861fd23d6846c536ef4db395753d');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_3ba4861fd23d6846c536ef4db395753d');

        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_3ba4861fd23d6846c536ef4db395753d');

        $d = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine' => 'FOS\\UserBundle\\Entity'));
        $d->setGlobalBasename('mapping');

        $e = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $e->addDriver($d, 'FOS\\UserBundle\\Entity');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/OrderBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\OrderBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\OrderBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\MoneyBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\MoneyBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\SettingsBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\SettingsBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\CartBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\CartBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\ProductBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\ProductBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\VariableProductBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\VariableProductBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\TaxationBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\TaxationBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\ShippingBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\ShippingBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\PaymentsBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\PaymentsBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/PayumBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\PayumBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\PayumBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\PromotionsBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\PromotionsBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\AddressingBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\AddressingBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/InventoryBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\InventoryBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\InventoryBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\TaxonomiesBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\TaxonomiesBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/config/doctrine/model' => 'Sylius\\Bundle\\CoreBundle\\Model'), '.orm.xml')), 'Sylius\\Bundle\\CoreBundle\\Model');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine/model' => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $f = new \Doctrine\ORM\Configuration();
        $f->setEntityNamespaces(array('FOSUserBundle' => 'FOS\\UserBundle\\Entity'));
        $f->setMetadataCacheImpl($a);
        $f->setQueryCacheImpl($b);
        $f->setResultCacheImpl($c);
        $f->setMetadataDriverImpl($e);
        $f->setProxyDir('/var/www/lokisalle/app/cache/dev/doctrine/orm/Proxies');
        $f->setProxyNamespace('Proxies');
        $f->setAutoGenerateProxyClasses(true);
        $f->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $f->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $f->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $f->addFilter('softdeleteable', 'Gedmo\\SoftDeleteable\\Filter\\SoftDeleteableFilter');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $f);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(0 => 'softdeleteable'), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.order_number', 1 => 'generateOrderNumber'), 10);
        $instance->addListenerService('sylius.user.post_create', array(0 => 'sylius.listener.user_update', 1 => 'processUser'), 0);
        $instance->addListenerService('sylius.user.post_update', array(0 => 'sylius.listener.user_update', 1 => 'processUser'), 0);
        $instance->addListenerService('sylius.checkout.finalize.pre_complete', array(0 => 'sylius.listener.order_inventory', 1 => 'onCheckoutFinalizePreComplete'), 0);
        $instance->addListenerService('sylius.cart_change', array(0 => 'sylius.listener.order_inventory', 1 => 'onCartChange'), 0);
        $instance->addListenerService('sylius.checkout.finalize.pre_complete', array(0 => 'sylius.listener.order_state', 1 => 'onCheckoutFinalizePreComplete'), 0);
        $instance->addListenerService('sylius.cart_change', array(0 => 'sylius.listener.order_taxation', 1 => 'onCartChange'), 0);
        $instance->addListenerService('sylius.checkout.addressing.pre_complete', array(0 => 'sylius.listener.order_taxation', 1 => 'onCartChange'), 0);
        $instance->addListenerService('sylius.checkout.shipping.initialize', array(0 => 'sylius.listener.order_shipping', 1 => 'processOrderShipments'), 0);
        $instance->addListenerService('sylius.checkout.shipping.pre_complete', array(0 => 'sylius.listener.order_shipping', 1 => 'processOrderShippingCharges'), 0);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.order_shipping', 1 => 'processShipmentStates'), 0);
        $instance->addListenerService('sylius.checkout.payment.initialize', array(0 => 'sylius.listener.order_payment', 1 => 'processOrderPayment'), 0);
        $instance->addListenerService('sylius.cart_change', array(0 => 'sylius.listener.order_promotion', 1 => 'processOrderPromotion'), 0);
        $instance->addListenerService('sylius.promotion.coupon_invalid', array(0 => 'sylius.listener.order_promotion', 1 => 'handleCouponPromotion'), 0);
        $instance->addListenerService('sylius.promotion.coupon_eligible', array(0 => 'sylius.listener.order_promotion', 1 => 'handleCouponPromotion'), 0);
        $instance->addListenerService('sylius.promotion.coupon_not_eligible', array(0 => 'sylius.listener.order_promotion', 1 => 'handleCouponPromotion'), 0);
        $instance->addListenerService('sylius.order.pre_create', array(0 => 'sylius.listener.order_currency', 1 => 'processOrderCurrency'), 0);
        $instance->addListenerService('sylius.order.pre_update', array(0 => 'sylius.listener.order_currency', 1 => 'processOrderCurrency'), 0);
        $instance->addListenerService('sylius.address.post_update', array(0 => 'sylius.listener.restricted_zone', 1 => 'handleRestrictedZone'), 0);
        $instance->addListenerService('sylius.checkout.addressing.complete', array(0 => 'sylius.listener.restricted_zone', 1 => 'handleRestrictedZone'), 0);
        $instance->addListenerService('sylius.product.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.product.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.variant.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.variant.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadProductImage'), 0);
        $instance->addListenerService('sylius.taxon.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonImage'), 0);
        $instance->addListenerService('sylius.taxon.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonImage'), 0);
        $instance->addListenerService('sylius.taxonomy.pre_create', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonomyImage'), 0);
        $instance->addListenerService('sylius.taxonomy.pre_update', array(0 => 'sylius.listener.image_upload', 1 => 'uploadTaxonomyImage'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'sylius.listener.locale', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('sylius.checkout.finalize.complete', array(0 => 'sylius.listener.order_confirmation_email', 1 => 'processOrderConfirmation'), 0);
        $instance->addListenerService('sylius.address.pre_delete', array(0 => 'sylius.listener.frontend.address', 1 => 'onAddressPreDelete'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'sylius_resource.twig', 1 => 'fetchRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'monolog.handler.firephp', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('kernel.exception', array(0 => 'payum.listener.interactive_request', 1 => 'onKernelException'), 128);
        $instance->addSubscriberService('sylius.cart_listener', 'Sylius\\Bundle\\CartBundle\\EventListener\\CartListener');
        $instance->addSubscriberService('sylius.cart_flash_listener', 'Sylius\\Bundle\\CartBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('debug.deprecation_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/var/www/lokisalle/app/Resources');
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider A Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), 'abc');
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('sylius_configuration' => 'sylius.form.type.configuration', 'sylius_configuration_database' => 'sylius.form.type.configuration.database', 'sylius_configuration_mailer' => 'sylius.form.type.configuration.mailer', 'sylius_configuration_locale' => 'sylius.form.type.configuration.locale', 'sylius_configuration_hidden' => 'sylius.form.type.configuration.hidden', 'sylius_setup' => 'sylius.form.type.setup', 'sylius_order' => 'sylius.form.type.order', 'sylius_order_item' => 'sylius.form.type.order_item', 'sylius_adjustment' => 'sylius.form.type.adjustment', 'sylius_money' => 'sylius.form.type.money', 'sylius_exchange_rate' => 'sylius.form.type.exchange_rate', 'sylius_cart' => 'sylius.form.type.cart', 'sylius_cart_item' => 'sylius.form.type.cart_item', 'sylius_product' => 'sylius.form.type.product', 'sylius_product_to_identifier' => 'sylius.form.type.product_to_identifier', 'sylius_property' => 'sylius.form.type.property', 'sylius_property_choice' => 'sylius.form.type.property_choice', 'sylius_product_property' => 'sylius.form.type.product_property', 'sylius_prototype' => 'sylius.form.type.prototype', 'sylius_option' => 'sylius.form.type.option', 'sylius_option_choice' => 'sylius.form.type.option_choice', 'sylius_option_value' => 'sylius.form.type.option_value', 'sylius_option_value_choice' => 'sylius.form.type.option_value_choice', 'sylius_option_value_collection' => 'sylius.form.type.option_value_collection', 'sylius_variant' => 'sylius.form.type.variant', 'sylius_variant_choice' => 'sylius.form.type.variant_choice', 'sylius_variant_match' => 'sylius.form.type.variant_match', 'sylius_variant_to_identifier' => 'sylius.form.type.variant_to_identifier', 'sylius_tax_category' => 'sylius.form.type.tax_category', 'sylius_tax_rate' => 'sylius.form.type.tax_rate', 'sylius_tax_calculator_choice' => 'sylius.form.type.tax_calculator_choice', 'sylius_tax_category_choice' => 'sylius.form.type.tax_category_choice', 'sylius_shipping_rule_item_count_configuration' => 'sylius.form.type.shipping_rule_item_count_configuration', 'sylius_shipping_category' => 'sylius.form.type.shipping_category', 'sylius_shipping_method' => 'sylius.form.type.shipping_method', 'sylius_shipping_category_choice' => 'sylius.form.type.shipping_category_choice', 'sylius_shipping_method_choice' => 'sylius.form.type.shipping_method_choice', 'sylius_shipping_calculator_choice' => 'sylius.form.type.shipping_calculator_choice', 'sylius_shipping_calculator_flat_rate_configuration' => 'sylius.form.type.shipping_calculator.flat_rate_configuration', 'sylius_shipping_calculator_per_item_rate_configuration' => 'sylius.form.type.shipping_calculator.per_item_rate_configuration', 'sylius_shipping_calculator_flexible_rate_configuration' => 'sylius.form.type.shipping_calculator.flexible_rate_configuration', 'sylius_payment_method' => 'sylius.form.type.payment_method', 'sylius_payment_method_choice' => 'sylius.form.type.payment_method_choice', 'sylius_payment' => 'sylius.form.type.payment', 'sylius_payment_gateway_choice' => 'sylius.form.type.payment_gateway_choice', 'sylius_credit_card' => 'sylius.form.type.credit_card', 'sylius_promotion' => 'sylius.form.type.promotion', 'sylius_promotion_coupon' => 'sylius.form.type.promotion_coupon', 'sylius_promotion_rule' => 'sylius.form.type.promotion_rule', 'sylius_promotion_action' => 'sylius.form.type.promotion_action', 'sylius_promotion_rule_choice' => 'sylius.form.type.promotion_rule_choice', 'sylius_promotion_rule_item_total_configuration' => 'sylius.form.type.promotion_rule.item_total_configuration', 'sylius_promotion_rule_item_count_configuration' => 'sylius.form.type.promotion_rule.item_count_configuration', 'sylius_promotion_action_choice' => 'sylius.form.type.promotion_action_choice', 'sylius_promotion_action_fixed_discount_configuration' => 'sylius.form.type.promotion_action.fixed_discount_configuration', 'sylius_promotion_action_percentage_discount_configuration' => 'sylius.form.type.promotion_action.percentage_discount_configuration', 'sylius_promotion_coupon_to_code' => 'sylius.form.type.promotion_coupon_to_code', 'sylius_promotion_coupon_generate_instruction' => 'sylius.form.type.promotion_coupon_generate_instruction', 'sylius_zone_member_collection' => 'sylius.form.type.zone_member_collection', 'sylius_address' => 'sylius.form.type.address', 'sylius_country' => 'sylius.form.type.country', 'sylius_province' => 'sylius.form.type.province', 'sylius_zone' => 'sylius.form.type.zone', 'sylius_zone_member_country' => 'sylius.form.type.zone_member_country', 'sylius_zone_member_province' => 'sylius.form.type.zone_member_province', 'sylius_zone_member_zone' => 'sylius.form.type.zone_member_zone', 'sylius_country_choice' => 'sylius.form.type.country_choice', 'sylius_province_choice' => 'sylius.form.type.province_choice', 'sylius_zone_choice' => 'sylius.form.type.zone_choice', 'sylius_taxonomy' => 'sylius.form.type.taxonomy', 'sylius_taxonomy_choice' => 'sylius.form.type.taxonomy_choice', 'sylius_taxon' => 'sylius.form.type.taxon', 'sylius_taxon_choice' => 'sylius.form.type.taxon_choice', 'sylius_taxon_selection' => 'sylius.form.type.taxon_selection', 'sylius_user' => 'sylius.form.type.user', 'sylius_group' => 'sylius.form.type.group', 'sylius_checkout_addressing' => 'sylius.checkout_form.addressing', 'sylius_checkout_shipping' => 'sylius.checkout_form.shipping', 'sylius_checkout_shipment' => 'sylius.checkout_form.shipment', 'sylius_checkout_payment' => 'sylius.checkout_form.payment', 'sylius_image' => 'sylius.form.type.image', 'list' => 'sylius.form.type.list', 'sylius_user_filter' => 'sylius.form.type.user_filter', 'sylius_product_filter' => 'sylius.form.type.product_filter', 'sylius_order_filter' => 'sylius.form.type.order_filter', 'sylius_group_choice' => 'sylius.form.type.group_choice', 'sylius_user_profile' => 'sylius.form.frontend.profile.type', 'sylius_user_registration' => 'sylius.user.registration.form.type', 'entity' => 'form.type.entity', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'liip_imagine_image' => 'liip_imagine.form.type.image', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.doctrine', 1 => 'form.type_guesser.validator'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }

    /**
     * Gets the 'fos_rest.body_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\EventListener\BodyListener A FOS\RestBundle\EventListener\BodyListener instance.
     */
    protected function getFosRest_BodyListenerService()
    {
        return $this->services['fos_rest.body_listener'] = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'));
    }

    /**
     * Gets the 'fos_rest.decoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Decoder\JsonDecoder A FOS\RestBundle\Decoder\JsonDecoder instance.
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.jsontoform' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Decoder\JsonToFormDecoder A FOS\RestBundle\Decoder\JsonToFormDecoder instance.
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Decoder\XmlDecoder A FOS\RestBundle\Decoder\XmlDecoder instance.
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Decoder\ContainerDecoderProvider A FOS\RestBundle\Decoder\ContainerDecoderProvider instance.
     */
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Util\FormatNegotiator A FOS\RestBundle\Util\FormatNegotiator instance.
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        return $this->services['fos_rest.format_negotiator'] = new \FOS\RestBundle\Util\FormatNegotiator();
    }

    /**
     * Gets the 'fos_rest.inflector.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Util\Inflector\DoctrineInflector A FOS\RestBundle\Util\Inflector\DoctrineInflector instance.
     */
    protected function getFosRest_Inflector_DoctrineService()
    {
        return $this->services['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Util\Inflector\DoctrineInflector();
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Request\ParamFetcher A FOS\RestBundle\Request\ParamFetcher instance.
     * 
     * @throws InactiveScopeException when the 'fos_rest.request.param_fetcher' service is requested while the 'request' scope is not active
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_rest.request.param_fetcher', 'request');
        }

        return $this->services['fos_rest.request.param_fetcher'] = $this->scopedServices['request']['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request'));
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Request\ParamReader A FOS\RestBundle\Request\ParamReader instance.
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestRouteLoader A FOS\RestBundle\Routing\Loader\RestRouteLoader instance.
     */
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }

    /**
     * Gets the 'fos_rest.routing.loader.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestRouteProcessor A FOS\RestBundle\Routing\Loader\RestRouteProcessor instance.
     */
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\Reader\RestActionReader A FOS\RestBundle\Routing\Loader\Reader\RestActionReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector.doctrine'), true, array('json' => false, 'xml' => false, 'html' => true));
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\Reader\RestControllerReader A FOS\RestBundle\Routing\Loader\Reader\RestControllerReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.xml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader A FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.yaml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader A FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }

    /**
     * Gets the 'fos_rest.view.exception_wrapper_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\View\ExceptionWrapperHandler A FOS\RestBundle\View\ExceptionWrapperHandler instance.
     */
    protected function getFosRest_View_ExceptionWrapperHandlerService()
    {
        return $this->services['fos_rest.view.exception_wrapper_handler'] = new \FOS\RestBundle\View\ExceptionWrapperHandler();
    }

    /**
     * Gets the 'fos_rest.view_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\View\ViewHandler A FOS\RestBundle\View\ViewHandler instance.
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'fos_user_change_password', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance.
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'fos_user.group.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Group_Form_FactoryService()
    {
        return $this->services['fos_user.group.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_group_form', 'fos_user_group', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.group.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\GroupFormType A FOS\UserBundle\Form\Type\GroupFormType instance.
     */
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('Sylius\\Bundle\\CoreBundle\\Model\\Group');
    }

    /**
     * Gets the 'fos_user.group_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Doctrine\GroupManager A FOS\UserBundle\Doctrine\GroupManager instance.
     */
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Group');
    }

    /**
     * Gets the 'fos_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\AuthenticationListener A FOS\UserBundle\EventListener\AuthenticationListener instance.
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /**
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance.
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));
    }

    /**
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance.
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance.
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }

    /**
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'sylius_user_profile', array(0 => 'Profile', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance.
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'sylius_user_registration', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'fos_user_resetting', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance.
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance.
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance.
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('hwi_oauth.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Doctrine\UserManager A FOS\UserBundle\Doctrine\UserManager instance.
     */
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance.
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance.
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance.
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\FragmentHandler A Symfony\Component\HttpKernel\Fragment\FragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), true);

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer A Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'gaufrette.sylius_image_filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gaufrette\Filesystem A Gaufrette\Filesystem instance.
     */
    protected function getGaufrette_SyliusImageFilesystemService()
    {
        return $this->services['gaufrette.sylius_image_filesystem'] = new \Gaufrette\Filesystem(new \Gaufrette\Adapter\Local('/var/www/lokisalle/app/../web/media/image', true));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'));
    }

    /**
     * Gets the 'hwi_oauth.resource_owner.amazon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\AmazonResourceOwner A HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\AmazonResourceOwner instance.
     */
    protected function getHwiOauth_ResourceOwner_AmazonService()
    {
        return $this->services['hwi_oauth.resource_owner.amazon'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\AmazonResourceOwner($this->get('hwi_oauth.http_client'), $this->get('security.http_utils'), array('client_id' => '<amazon_client_id>', 'client_secret' => '<amazon_client_secret>', 'paths' => array(), 'options' => array()), 'amazon', $this->get('hwi_oauth.storage.session'));
    }

    /**
     * Gets the 'hwi_oauth.resource_owner.facebook' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner A HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner instance.
     */
    protected function getHwiOauth_ResourceOwner_FacebookService()
    {
        return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner($this->get('hwi_oauth.http_client'), $this->get('security.http_utils'), array('client_id' => '<facebook_client_id>', 'client_secret' => '<facebook_client_secret>', 'paths' => array(), 'options' => array()), 'facebook', $this->get('hwi_oauth.storage.session'));
    }

    /**
     * Gets the 'hwi_oauth.resource_owner.google' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\GoogleResourceOwner A HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\GoogleResourceOwner instance.
     */
    protected function getHwiOauth_ResourceOwner_GoogleService()
    {
        return $this->services['hwi_oauth.resource_owner.google'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\GoogleResourceOwner($this->get('hwi_oauth.http_client'), $this->get('security.http_utils'), array('client_id' => '<google_client_id>', 'client_secret' => '<google_client_secret>', 'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile', 'paths' => array(), 'options' => array()), 'google', $this->get('hwi_oauth.storage.session'));
    }

    /**
     * Gets the 'hwi_oauth.resource_ownermap.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap A HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap instance.
     */
    protected function getHwiOauth_ResourceOwnermap_MainService()
    {
        $this->services['hwi_oauth.resource_ownermap.main'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap($this->get('security.http_utils'), array(0 => 'amazon', 1 => 'facebook', 2 => 'google'), array('amazon' => '/login/check-amazon', 'facebook' => '/login/check-facebook', 'google' => '/login/check-google'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'hwi_oauth.security.oauth_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return HWI\Bundle\OAuthBundle\Security\OAuthUtils A HWI\Bundle\OAuthBundle\Security\OAuthUtils instance.
     */
    protected function getHwiOauth_Security_OauthUtilsService()
    {
        $this->services['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils($this->get('security.http_utils'), $this->get('security.context'), false);

        $instance->setResourceOwnerMap($this->get('hwi_oauth.resource_ownermap.main'));

        return $instance;
    }

    /**
     * Gets the 'hwi_oauth.templating.helper.oauth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper A HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper instance.
     */
    protected function getHwiOauth_Templating_Helper_OauthService()
    {
        $this->services['hwi_oauth.templating.helper.oauth'] = $instance = new \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper($this->get('hwi_oauth.security.oauth_utils'));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'hwi_oauth.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance.
     */
    protected function getHwiOauth_UserCheckerService()
    {
        return $this->services['hwi_oauth.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'jms_serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Serializer A JMS\Serializer\Serializer instance.
     */
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache('/var/www/lokisalle/app/cache/dev/jms_serializer'));

        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL))));

        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $b);
    }

    /**
     * Gets the 'jms_serializer.array_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Handler\ArrayCollectionHandler A JMS\Serializer\Handler\ArrayCollectionHandler instance.
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.constraint_violation_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Handler\ConstraintViolationHandler A JMS\Serializer\Handler\ConstraintViolationHandler instance.
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the 'jms_serializer.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Handler\DateHandler A JMS\Serializer\Handler\DateHandler instance.
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'UTC');
    }

    /**
     * Gets the 'jms_serializer.doctrine_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber A JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber instance.
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }

    /**
     * Gets the 'jms_serializer.form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Handler\FormErrorHandler A JMS\Serializer\Handler\FormErrorHandler instance.
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }

    /**
     * Gets the 'jms_serializer.handler_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Handler\LazyHandlerRegistry A JMS\Serializer\Handler\LazyHandlerRegistry instance.
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')))));
    }

    /**
     * Gets the 'jms_serializer.json_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\JsonDeserializationVisitor A JMS\Serializer\JsonDeserializationVisitor instance.
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.json_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\JsonSerializationVisitor A JMS\Serializer\JsonSerializationVisitor instance.
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'));

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Metadata\Driver\DoctrineTypeDriver A JMS\Serializer\Metadata\Driver\DoctrineTypeDriver instance.
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Sylius\\Bundle\\InstallerBundle' => '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/config/serializer', 'Sylius\\Bundle\\OrderBundle' => '/var/www/lokisalle/src/Sylius/Bundle/OrderBundle/Resources/config/serializer', 'Sylius\\Bundle\\MoneyBundle' => '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/config/serializer', 'Sylius\\Bundle\\SettingsBundle' => '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/config/serializer', 'Sylius\\Bundle\\CartBundle' => '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/config/serializer', 'Sylius\\Bundle\\ProductBundle' => '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/config/serializer', 'Sylius\\Bundle\\VariableProductBundle' => '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/config/serializer', 'Sylius\\Bundle\\TaxationBundle' => '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/config/serializer', 'Sylius\\Bundle\\ShippingBundle' => '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/config/serializer', 'Sylius\\Bundle\\PaymentsBundle' => '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/config/serializer', 'Sylius\\Bundle\\PayumBundle' => '/var/www/lokisalle/src/Sylius/Bundle/PayumBundle/Resources/config/serializer', 'Sylius\\Bundle\\PromotionsBundle' => '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/config/serializer', 'Sylius\\Bundle\\AddressingBundle' => '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/config/serializer', 'Sylius\\Bundle\\InventoryBundle' => '/var/www/lokisalle/src/Sylius/Bundle/InventoryBundle/Resources/config/serializer', 'Sylius\\Bundle\\TaxonomiesBundle' => '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/config/serializer', 'Sylius\\Bundle\\FlowBundle' => '/var/www/lokisalle/src/Sylius/Bundle/FlowBundle/Resources/config/serializer', 'Sylius\\Bundle\\CoreBundle' => '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/config/serializer', 'Sylius\\Bundle\\WebBundle' => '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/config/serializer', 'Sylius\\Bundle\\ResourceBundle' => '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/config/serializer', 'Doctrine\\Bundle\\DoctrineBundle' => '/var/www/lokisalle/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/config/serializer', 'Doctrine\\Bundle\\FixturesBundle' => '/var/www/lokisalle/vendor/doctrine/doctrine-fixtures-bundle/Doctrine/Bundle/FixturesBundle/Resources/config/serializer', 'Symfony\\Bundle\\AsseticBundle' => '/var/www/lokisalle/vendor/symfony/assetic-bundle/Symfony/Bundle/AsseticBundle/Resources/config/serializer', 'Symfony\\Bundle\\FrameworkBundle' => '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer', 'Symfony\\Bundle\\MonologBundle' => '/var/www/lokisalle/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/config/serializer', 'Symfony\\Bundle\\SecurityBundle' => '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer', 'Symfony\\Bundle\\SwiftmailerBundle' => '/var/www/lokisalle/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/config/serializer', 'Symfony\\Bundle\\TwigBundle' => '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer', 'Liip\\DoctrineCacheBundle' => '/var/www/lokisalle/vendor/liip/doctrine-cache-bundle/Liip/DoctrineCacheBundle/Resources/config/serializer', 'Liip\\ImagineBundle' => '/var/www/lokisalle/vendor/liip/imagine-bundle/Liip/ImagineBundle/Resources/config/serializer', 'Knp\\Bundle\\MenuBundle' => '/var/www/lokisalle/vendor/knplabs/knp-menu-bundle/Knp/Bundle/MenuBundle/Resources/config/serializer', 'Knp\\Bundle\\GaufretteBundle' => '/var/www/lokisalle/vendor/knplabs/knp-gaufrette-bundle/Knp/Bundle/GaufretteBundle/Resources/config/serializer', 'JMS\\SerializerBundle' => '/var/www/lokisalle/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer', 'HWI\\Bundle\\OAuthBundle' => '/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/config/serializer', 'FOS\\RestBundle' => '/var/www/lokisalle/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/config/serializer', 'FOS\\UserBundle' => '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/serializer', 'WhiteOctober\\PagerfantaBundle' => '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/config/serializer', 'Stof\\DoctrineExtensionsBundle' => '/var/www/lokisalle/vendor/stof/doctrine-extensions-bundle/Stof/DoctrineExtensionsBundle/Resources/config/serializer', 'JMS\\TranslationBundle' => '/var/www/lokisalle/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/config/serializer', 'Knp\\Bundle\\SnappyBundle' => '/var/www/lokisalle/vendor/knplabs/knp-snappy-bundle/Knp/Bundle/SnappyBundle/Resources/config/serializer', 'Payum\\Bundle\\PayumBundle' => '/var/www/lokisalle/vendor/payum/payum-bundle/Payum/Bundle/PayumBundle/Resources/config/serializer', 'Symfony\\Bundle\\WebProfilerBundle' => '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/config/serializer'));

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }

    /**
     * Gets the 'jms_serializer.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Naming\CacheNamingStrategy A JMS\Serializer\Naming\CacheNamingStrategy instance.
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the 'jms_serializer.php_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\Handler\PhpCollectionHandler A JMS\Serializer\Handler\PhpCollectionHandler instance.
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.templating.helper.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Templating\SerializerHelper A JMS\SerializerBundle\Templating\SerializerHelper instance.
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }

    /**
     * Gets the 'jms_serializer.xml_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\XmlDeserializationVisitor A JMS\Serializer\XmlDeserializationVisitor instance.
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.xml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\XmlSerializationVisitor A JMS\Serializer\XmlSerializationVisitor instance.
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'jms_serializer.yaml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\Serializer\YamlSerializationVisitor A JMS\Serializer\YamlSerializationVisitor instance.
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'jms_translation.config_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\TranslationBundle\Translation\ConfigFactory A JMS\TranslationBundle\Translation\ConfigFactory instance.
     */
    protected function getJmsTranslation_ConfigFactoryService()
    {
        return $this->services['jms_translation.config_factory'] = new \JMS\TranslationBundle\Translation\ConfigFactory(array());
    }

    /**
     * Gets the 'jms_translation.loader_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\TranslationBundle\Translation\LoaderManager A JMS\TranslationBundle\Translation\LoaderManager instance.
     */
    protected function getJmsTranslation_LoaderManagerService()
    {
        return $this->services['jms_translation.loader_manager'] = new \JMS\TranslationBundle\Translation\LoaderManager(array('php' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.php')), 'yml' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.yml')), 'xlf' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.xliff')), 'po' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.po')), 'mo' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.mo')), 'ts' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.qt')), 'csv' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.csv')), 'res' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.res')), 'dat' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.dat')), 'ini' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.ini')), 'xliff' => new \JMS\TranslationBundle\Translation\Loader\XliffLoader()));
    }

    /**
     * Gets the 'jms_translation.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\TranslationBundle\Twig\TranslationExtension A JMS\TranslationBundle\Twig\TranslationExtension instance.
     */
    protected function getJmsTranslation_TwigExtensionService()
    {
        return $this->services['jms_translation.twig_extension'] = new \JMS\TranslationBundle\Twig\TranslationExtension($this->get('translator.default'), true);
    }

    /**
     * Gets the 'jms_translation.updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\TranslationBundle\Translation\Updater A JMS\TranslationBundle\Translation\Updater instance.
     */
    protected function getJmsTranslation_UpdaterService()
    {
        $a = $this->get('logger');
        $b = $this->get('twig');

        $c = new \Doctrine\Common\Annotations\DocParser();
        $c->setImports(array('desc' => 'JMS\\TranslationBundle\\Annotation\\Desc', 'meaning' => 'JMS\\TranslationBundle\\Annotation\\Meaning', 'ignore' => 'JMS\\TranslationBundle\\Annotation\\Ignore'));
        $c->setIgnoreNotImportedAnnotations(true);

        $d = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $d->setSourceLanguage('en');

        return $this->services['jms_translation.updater'] = new \JMS\TranslationBundle\Translation\Updater($this->get('jms_translation.loader_manager'), new \JMS\TranslationBundle\Translation\ExtractorManager(new \JMS\TranslationBundle\Translation\Extractor\FileExtractor($b, $a, array(0 => new \JMS\TranslationBundle\Translation\Extractor\File\DefaultPhpFileExtractor($c), 1 => new \JMS\TranslationBundle\Translation\Extractor\File\FormExtractor($c), 2 => new \JMS\TranslationBundle\Translation\Extractor\File\TranslationContainerExtractor(), 3 => new \JMS\TranslationBundle\Translation\Extractor\File\TwigFileExtractor($b), 4 => new \JMS\TranslationBundle\Translation\Extractor\File\ValidationExtractor($this->get('validator.mapping.class_metadata_factory')), 5 => new \JMS\TranslationBundle\Translation\Extractor\File\AuthenticationMessagesExtractor($c))), $a, array()), $a, new \JMS\TranslationBundle\Translation\FileWriter(array('php' => new \JMS\TranslationBundle\Translation\Dumper\PhpDumper(), 'xlf' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.xliff'), 'xlf'), 'po' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.po'), 'po'), 'mo' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.mo'), 'mo'), 'yml' => new \JMS\TranslationBundle\Translation\Dumper\YamlDumper(), 'ts' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.qt'), 'ts'), 'csv' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.csv'), 'csv'), 'ini' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.ini'), 'ini'), 'res' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.res'), 'res'), 'xliff' => $d)));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'knp_gaufrette.filesystem_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\GaufretteBundle\FilesystemMap A Knp\Bundle\GaufretteBundle\FilesystemMap instance.
     */
    protected function getKnpGaufrette_FilesystemMapService()
    {
        return $this->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap(array('sylius_image' => $this->get('gaufrette.sylius_image_filesystem')));
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\MenuFactory A Knp\Menu\MenuFactory instance.
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Silex\RoutingExtension($this->get('router')), 0);

        return $instance;
    }

    /**
     * Gets the 'knp_menu.listener.voters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener A Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener instance.
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Matcher\Matcher A Knp\Menu\Matcher\Matcher instance.
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance.
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('sylius.frontend.main' => 'sylius.menu.frontend.main', 'sylius.frontend.currency' => 'sylius.menu.frontend.currency', 'sylius.frontend.taxonomies' => 'sylius.menu.frontend.taxonomies', 'sylius.frontend.account' => 'sylius.menu.frontend.account', 'sylius.frontend.social' => 'sylius.menu.frontend.social', 'sylius.backend.main' => 'sylius.menu.backend.main', 'sylius.backend.sidebar' => 'sylius.menu.backend.sidebar')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance.
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance.
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', $this->get('knp_menu.matcher'), array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance.
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'knp_menu.voter.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Silex\Voter\RouteVoter A Knp\Menu\Silex\Voter\RouteVoter instance.
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Silex\Voter\RouteVoter();
    }

    /**
     * Gets the 'knp_snappy.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator A Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator instance.
     */
    protected function getKnpSnappy_ImageService()
    {
        return $this->services['knp_snappy.image'] = new \Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator(new \Knp\Snappy\Image('/usr/bin/wkhtmltoimage', array(), array()), $this->get('monolog.logger.snappy', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'knp_snappy.pdf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator A Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator instance.
     */
    protected function getKnpSnappy_PdfService()
    {
        return $this->services['knp_snappy.pdf'] = new \Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator(new \Knp\Snappy\Pdf('/usr/bin/wkhtmltopdf', array(), array()), $this->get('monolog.logger.snappy', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'liip_doctrine_cache.ns.sylius_settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getLiipDoctrineCache_Ns_SyliusSettingsService()
    {
        $this->services['liip_doctrine_cache.ns.sylius_settings'] = $instance = new \Doctrine\Common\Cache\FilesystemCache('/var/www/lokisalle/app/cache/dev/doctrine/cache', NULL);

        $instance->setNamespace('sylius_settings');

        return $instance;
    }

    /**
     * Gets the 'liip_imagine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Imagine\Gd\Imagine A Imagine\Gd\Imagine instance.
     */
    protected function getLiipImagineService()
    {
        return $this->services['liip_imagine'] = new \Imagine\Gd\Imagine();
    }

    /**
     * Gets the 'liip_imagine.cache.clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Cache\CacheClearer A Liip\ImagineBundle\Imagine\Cache\CacheClearer instance.
     */
    protected function getLiipImagine_Cache_ClearerService()
    {
        return $this->services['liip_imagine.cache.clearer'] = new \Liip\ImagineBundle\Imagine\Cache\CacheClearer($this->get('liip_imagine.cache.manager'), '/media/cache');
    }

    /**
     * Gets the 'liip_imagine.cache.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Cache\CacheManager A Liip\ImagineBundle\Imagine\Cache\CacheManager instance.
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager($this->get('liip_imagine.filter.configuration'), $this->get('router'), '/var/www/lokisalle/app/../web', 'web_path');

        $instance->addResolver('web_path', $this->get('liip_imagine.cache.resolver.web_path'));
        $instance->addResolver('no_cache', $this->get('liip_imagine.cache.resolver.no_cache'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.cache.resolver.no_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheResolver instance.
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheResolver($this->get('filesystem'));
    }

    /**
     * Gets the 'liip_imagine.cache.resolver.web_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver instance.
     */
    protected function getLiipImagine_Cache_Resolver_WebPathService()
    {
        $this->services['liip_imagine.cache.resolver.web_path'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver($this->get('filesystem'));

        $instance->setBasePath('');
        $instance->setFolderPermissions(511);

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Controller\ImagineController A Liip\ImagineBundle\Controller\ImagineController instance.
     */
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController($this->get('liip_imagine.data.manager'), $this->get('liip_imagine.filter.manager'), $this->get('liip_imagine.cache.manager'));
    }

    /**
     * Gets the 'liip_imagine.data.loader.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Data\Loader\FileSystemLoader A Liip\ImagineBundle\Imagine\Data\Loader\FileSystemLoader instance.
     */
    protected function getLiipImagine_Data_Loader_FilesystemService()
    {
        return $this->services['liip_imagine.data.loader.filesystem'] = new \Liip\ImagineBundle\Imagine\Data\Loader\FileSystemLoader($this->get('liip_imagine'), array(), '/var/www/lokisalle/app/../web/media/image');
    }

    /**
     * Gets the 'liip_imagine.data.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Data\DataManager A Liip\ImagineBundle\Imagine\Data\DataManager instance.
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager($this->get('liip_imagine.filter.configuration'), 'filesystem');

        $instance->addLoader('filesystem', $this->get('liip_imagine.data.loader.filesystem'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.filter.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\FilterConfiguration A Liip\ImagineBundle\Imagine\Filter\FilterConfiguration instance.
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('sylius_16x16' => array('filters' => array('thumbnail' => array('size' => array(0 => 16, 1 => 16), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_50x40' => array('filters' => array('thumbnail' => array('size' => array(0 => 50, 1 => 40), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_90x60' => array('filters' => array('thumbnail' => array('size' => array(0 => 90, 1 => 60), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_200x200' => array('filters' => array('thumbnail' => array('size' => array(0 => 200, 1 => 200), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_262x255' => array('filters' => array('thumbnail' => array('size' => array(0 => 265, 1 => 255), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_310x300' => array('filters' => array('thumbnail' => array('size' => array(0 => 310, 1 => 300), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_610x600' => array('filters' => array('thumbnail' => array('size' => array(0 => 610, 1 => 600), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_gallery' => array('filters' => array('thumbnail' => array('size' => array(0 => 640, 1 => 480), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array())));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.background' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($this->get('liip_imagine'));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.crop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.paste' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($this->get('liip_imagine'), '/var/www/lokisalle/app');
    }

    /**
     * Gets the 'liip_imagine.filter.loader.relative_resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.strip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.thumbnail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.upscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.watermark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($this->get('liip_imagine'), '/var/www/lokisalle/app');
    }

    /**
     * Gets the 'liip_imagine.filter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Imagine\Filter\FilterManager A Liip\ImagineBundle\Imagine\Filter\FilterManager instance.
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager($this->get('liip_imagine.filter.configuration'));

        $instance->addLoader('relative_resize', $this->get('liip_imagine.filter.loader.relative_resize'));
        $instance->addLoader('resize', $this->get('liip_imagine.filter.loader.resize'));
        $instance->addLoader('thumbnail', $this->get('liip_imagine.filter.loader.thumbnail'));
        $instance->addLoader('crop', $this->get('liip_imagine.filter.loader.crop'));
        $instance->addLoader('paste', $this->get('liip_imagine.filter.loader.paste'));
        $instance->addLoader('watermark', $this->get('liip_imagine.filter.loader.watermark'));
        $instance->addLoader('background', $this->get('liip_imagine.filter.loader.background'));
        $instance->addLoader('strip', $this->get('liip_imagine.filter.loader.strip'));
        $instance->addLoader('upscale', $this->get('liip_imagine.filter.loader.upscale'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.form.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Form\Type\ImageType A Liip\ImagineBundle\Form\Type\ImageType instance.
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /**
     * Gets the 'liip_imagine.routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Routing\ImagineLoader A Liip\ImagineBundle\Routing\ImagineLoader instance.
     */
    protected function getLiipImagine_Routing_LoaderService()
    {
        return $this->services['liip_imagine.routing.loader'] = new \Liip\ImagineBundle\Routing\ImagineLoader('liip_imagine.controller:filterAction', '/media/cache', array('sylius_16x16' => array('filters' => array('thumbnail' => array('size' => array(0 => 16, 1 => 16), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_50x40' => array('filters' => array('thumbnail' => array('size' => array(0 => 50, 1 => 40), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_90x60' => array('filters' => array('thumbnail' => array('size' => array(0 => 90, 1 => 60), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_200x200' => array('filters' => array('thumbnail' => array('size' => array(0 => 200, 1 => 200), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_262x255' => array('filters' => array('thumbnail' => array('size' => array(0 => 265, 1 => 255), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_310x300' => array('filters' => array('thumbnail' => array('size' => array(0 => 310, 1 => 300), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_610x600' => array('filters' => array('thumbnail' => array('size' => array(0 => 610, 1 => 600), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'sylius_gallery' => array('filters' => array('thumbnail' => array('size' => array(0 => 640, 1 => 480), 'mode' => 'outbound')), 'quality' => 100, 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array())));
    }

    /**
     * Gets the 'liip_imagine.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Liip\ImagineBundle\Templating\Helper\ImagineHelper A Liip\ImagineBundle\Templating\Helper\ImagineHelper instance.
     */
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper($this->get('liip_imagine.cache.manager'));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        $this->services['locale_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.firephp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\FirePHPHandler A Symfony\Bridge\Monolog\Handler\FirePHPHandler instance.
     */
    protected function getMonolog_Handler_FirephpService()
    {
        return $this->services['monolog.handler.firephp'] = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler('/var/www/lokisalle/app/logs/dev.log', 100, true);
    }

    /**
     * Gets the 'monolog.logger.deprecation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DeprecationService()
    {
        $this->services['monolog.logger.deprecation'] = $instance = new \Symfony\Bridge\Monolog\Logger('deprecation');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.emergency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.snappy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SnappyService()
    {
        $this->services['monolog.logger.snappy'] = $instance = new \Symfony\Bridge\Monolog\Logger('snappy');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'payum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bundle\PayumBundle\Registry\ContainerAwareRegistry A Payum\Bundle\PayumBundle\Registry\ContainerAwareRegistry instance.
     */
    protected function getPayumService()
    {
        $this->services['payum'] = $instance = new \Payum\Bundle\PayumBundle\Registry\ContainerAwareRegistry(array('paypal_express_checkout' => 'payum.context.paypal_express_checkout.payment', 'stripe' => 'payum.context.stripe.payment', 'be2bill' => 'payum.context.be2bill.payment', 'dummy' => 'payum.context.dummy.payment'), array('paypal_express_checkout' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment'), 'stripe' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.stripe.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment'), 'be2bill' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.be2bill.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment'), 'dummy' => array('Sylius\\Bundle\\CoreBundle\\Model\\Order' => 'payum.context.dummy.storage.syliusbundlecorebundlemodelorder', 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment' => 'payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment')), 'paypal_express_checkout', 'paypal_express_checkout');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'payum.action.capture_details_aggregated_model' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Action\CaptureDetailsAggregatedModelAction A Payum\Action\CaptureDetailsAggregatedModelAction instance.
     */
    protected function getPayum_Action_CaptureDetailsAggregatedModelService()
    {
        return $this->services['payum.action.capture_details_aggregated_model'] = new \Payum\Action\CaptureDetailsAggregatedModelAction();
    }

    /**
     * Gets the 'payum.action.status_details_aggregated_model' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Action\StatusDetailsAggregatedModelAction A Payum\Action\StatusDetailsAggregatedModelAction instance.
     */
    protected function getPayum_Action_StatusDetailsAggregatedModelService()
    {
        return $this->services['payum.action.status_details_aggregated_model'] = new \Payum\Action\StatusDetailsAggregatedModelAction();
    }

    /**
     * Gets the 'payum.action.sync_details_aggregated_model' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Action\SyncDetailsAggregatedModelAction A Payum\Action\SyncDetailsAggregatedModelAction instance.
     */
    protected function getPayum_Action_SyncDetailsAggregatedModelService()
    {
        return $this->services['payum.action.sync_details_aggregated_model'] = new \Payum\Action\SyncDetailsAggregatedModelAction();
    }

    /**
     * Gets the 'payum.context._security_token.storage.syliusbundlepayumbundlemodelpaymentsecuritytoken' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_SecurityToken_Storage_SyliusbundlepayumbundlemodelpaymentsecuritytokenService()
    {
        return $this->services['payum.context._security_token.storage.syliusbundlepayumbundlemodelpaymentsecuritytoken'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken');
    }

    /**
     * Gets the 'payum.context.be2bill.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Be2Bill\Api A Payum\Be2Bill\Api instance.
     */
    protected function getPayum_Context_Be2bill_ApiService()
    {
        return $this->services['payum.context.be2bill.api'] = new \Payum\Be2Bill\Api($this->get('payum.buzz.client'), array('identifier' => 'EDITME', 'password' => 'EDITME', 'sandbox' => true));
    }

    /**
     * Gets the 'payum.context.be2bill.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Payment A Payum\Payment instance.
     */
    protected function getPayum_Context_Be2bill_PaymentService()
    {
        $this->services['payum.context.be2bill.payment'] = $instance = new \Payum\Payment();

        $instance->addApi($this->get('payum.context.be2bill.api'));
        $instance->addAction($this->get('payum.action.capture_details_aggregated_model'));
        $instance->addAction($this->get('payum.action.sync_details_aggregated_model'));
        $instance->addAction($this->get('payum.action.status_details_aggregated_model'));
        $instance->addAction(new \Payum\Be2Bill\Action\CaptureAction());
        $instance->addAction(new \Payum\Be2Bill\Action\StatusAction());
        $instance->addAction($this->get('sylius.payum.action.execute_same_request_with_payment_details'), true);
        $instance->addAction($this->get('sylius.payum.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.action.obtain_credit_card'), true);
        $instance->addAction($this->get('sylius.payum.be2bill.action.capture_order_using_credit_card'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Extension\StorageExtension($this->get('payum.context.be2bill.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Extension\StorageExtension($this->get('payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment')));

        return $instance;
    }

    /**
     * Gets the 'payum.context.be2bill.storage.syliusbundlecorebundlemodelorder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_Be2bill_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.be2bill.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }

    /**
     * Gets the 'payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_Be2bill_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.be2bill.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }

    /**
     * Gets the 'payum.context.dummy.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Payment A Payum\Payment instance.
     */
    protected function getPayum_Context_Dummy_PaymentService()
    {
        $this->services['payum.context.dummy.payment'] = $instance = new \Payum\Payment();

        $instance->addAction($this->get('payum.action.capture_details_aggregated_model'));
        $instance->addAction($this->get('payum.action.sync_details_aggregated_model'));
        $instance->addAction($this->get('payum.action.status_details_aggregated_model'));
        $instance->addAction($this->get('sylius.payum.dummy.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.dummy.action.capture_order'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Extension\StorageExtension($this->get('payum.context.dummy.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Extension\StorageExtension($this->get('payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment')));

        return $instance;
    }

    /**
     * Gets the 'payum.context.dummy.storage.syliusbundlecorebundlemodelorder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_Dummy_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.dummy.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }

    /**
     * Gets the 'payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_Dummy_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.dummy.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }

    /**
     * Gets the 'payum.context.paypal_express_checkout.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Paypal\ExpressCheckout\Nvp\Api A Payum\Paypal\ExpressCheckout\Nvp\Api instance.
     */
    protected function getPayum_Context_PaypalExpressCheckout_ApiService()
    {
        return $this->services['payum.context.paypal_express_checkout.api'] = new \Payum\Paypal\ExpressCheckout\Nvp\Api($this->get('payum.buzz.client'), array('username' => 'EDITME', 'password' => 'EDITME', 'signature' => 'EDITME', 'sandbox' => true));
    }

    /**
     * Gets the 'payum.context.paypal_express_checkout.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Payment A Payum\Payment instance.
     */
    protected function getPayum_Context_PaypalExpressCheckout_PaymentService()
    {
        $this->services['payum.context.paypal_express_checkout.payment'] = $instance = new \Payum\Payment();

        $instance->addApi($this->get('payum.context.paypal_express_checkout.api'));
        $instance->addAction($this->get('payum.action.capture_details_aggregated_model'));
        $instance->addAction($this->get('payum.action.sync_details_aggregated_model'));
        $instance->addAction($this->get('payum.action.status_details_aggregated_model'));
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\AuthorizeTokenAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\DoExpressCheckoutPaymentAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\GetExpressCheckoutDetailsAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\GetTransactionDetailsAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\SetExpressCheckoutAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\CreateRecurringPaymentProfileAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\GetRecurringPaymentsProfileDetailsAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\Api\ManageRecurringPaymentsProfileStatusAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\CaptureAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\PaymentDetailsStatusAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\PaymentDetailsSyncAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\RecurringPaymentDetailsStatusAction());
        $instance->addAction(new \Payum\Paypal\ExpressCheckout\Nvp\Action\RecurringPaymentDetailsSyncAction());
        $instance->addAction($this->get('sylius.payum.action.execute_same_request_with_payment_details'), true);
        $instance->addAction($this->get('sylius.payum.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.paypal.action.capture_order_using_express_checkout'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Extension\StorageExtension($this->get('payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Extension\StorageExtension($this->get('payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment')));

        return $instance;
    }

    /**
     * Gets the 'payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_PaypalExpressCheckout_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.paypal_express_checkout.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }

    /**
     * Gets the 'payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_PaypalExpressCheckout_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.paypal_express_checkout.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }

    /**
     * Gets the 'payum.context.stripe.action.capture' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Omnipay\Action\CaptureAction A Payum\Bridge\Omnipay\Action\CaptureAction instance.
     */
    protected function getPayum_Context_Stripe_Action_CaptureService()
    {
        return $this->services['payum.context.stripe.action.capture'] = new \Payum\Bridge\Omnipay\Action\CaptureAction();
    }

    /**
     * Gets the 'payum.context.stripe.action.status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Omnipay\Action\StatusAction A Payum\Bridge\Omnipay\Action\StatusAction instance.
     */
    protected function getPayum_Context_Stripe_Action_StatusService()
    {
        return $this->services['payum.context.stripe.action.status'] = new \Payum\Bridge\Omnipay\Action\StatusAction();
    }

    /**
     * Gets the 'payum.context.stripe.gateway' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Omnipay\Common\GatewayInterface A Omnipay\Common\GatewayInterface instance.
     */
    protected function getPayum_Context_Stripe_GatewayService()
    {
        $this->services['payum.context.stripe.gateway'] = $instance = call_user_func(array('Omnipay\\Common\\GatewayFactory', 'create'), 'Stripe');

        $instance->setAPIKEY('EDITME');
        $instance->setTESTMODE(true);

        return $instance;
    }

    /**
     * Gets the 'payum.context.stripe.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Payment A Payum\Payment instance.
     */
    protected function getPayum_Context_Stripe_PaymentService()
    {
        $this->services['payum.context.stripe.payment'] = $instance = new \Payum\Payment();

        $instance->addApi($this->get('payum.context.stripe.gateway'));
        $instance->addAction($this->get('payum.action.capture_details_aggregated_model'));
        $instance->addAction($this->get('payum.action.sync_details_aggregated_model'));
        $instance->addAction($this->get('payum.action.status_details_aggregated_model'));
        $instance->addAction($this->get('payum.context.stripe.action.capture'));
        $instance->addAction($this->get('payum.context.stripe.action.status'));
        $instance->addAction($this->get('sylius.payum.action.execute_same_request_with_payment_details'), true);
        $instance->addAction($this->get('sylius.payum.action.order_status'), true);
        $instance->addAction($this->get('sylius.payum.action.obtain_credit_card'), true);
        $instance->addAction($this->get('sylius.payum.stripe.action.capture_order_using_credit_card'), true);
        $instance->addExtension($this->get('payum.extension.endless_cycle_detector'));
        $instance->addExtension($this->get('payum.extension.log_executed_actions'));
        $instance->addExtension($this->get('payum.extension.logger'));
        $instance->addExtension(new \Payum\Extension\StorageExtension($this->get('payum.context.stripe.storage.syliusbundlecorebundlemodelorder')));
        $instance->addExtension(new \Payum\Extension\StorageExtension($this->get('payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment')));

        return $instance;
    }

    /**
     * Gets the 'payum.context.stripe.storage.syliusbundlecorebundlemodelorder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_Stripe_Storage_SyliusbundlecorebundlemodelorderService()
    {
        return $this->services['payum.context.stripe.storage.syliusbundlecorebundlemodelorder'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }

    /**
     * Gets the 'payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Context_Stripe_Storage_SyliusbundlepaymentsbundlemodelpaymentService()
    {
        return $this->services['payum.context.stripe.storage.syliusbundlepaymentsbundlemodelpayment'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment');
    }

    /**
     * Gets the 'payum.extension.log_executed_actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Psr\Log\LogExecutedActionsExtension A Payum\Bridge\Psr\Log\LogExecutedActionsExtension instance.
     */
    protected function getPayum_Extension_LogExecutedActionsService()
    {
        return $this->services['payum.extension.log_executed_actions'] = new \Payum\Bridge\Psr\Log\LogExecutedActionsExtension($this->get('logger'));
    }

    /**
     * Gets the 'payum.extension.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Psr\Log\LoggerExtension A Payum\Bridge\Psr\Log\LoggerExtension instance.
     */
    protected function getPayum_Extension_LoggerService()
    {
        return $this->services['payum.extension.logger'] = new \Payum\Bridge\Psr\Log\LoggerExtension($this->get('logger'));
    }

    /**
     * Gets the 'payum.listener.interactive_request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bundle\PayumBundle\EventListener\InteractiveRequestListener A Payum\Bundle\PayumBundle\EventListener\InteractiveRequestListener instance.
     */
    protected function getPayum_Listener_InteractiveRequestService()
    {
        return $this->services['payum.listener.interactive_request'] = new \Payum\Bundle\PayumBundle\EventListener\InteractiveRequestListener();
    }

    /**
     * Gets the 'payum.security.http_request_verifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bundle\PayumBundle\Security\HttpRequestVerifier A Payum\Bundle\PayumBundle\Security\HttpRequestVerifier instance.
     */
    protected function getPayum_Security_HttpRequestVerifierService()
    {
        return $this->services['payum.security.http_request_verifier'] = new \Payum\Bundle\PayumBundle\Security\HttpRequestVerifier($this->get('payum.security.token_storage'));
    }

    /**
     * Gets the 'payum.security.token_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bundle\PayumBundle\Security\TokenFactory A Payum\Bundle\PayumBundle\Security\TokenFactory instance.
     */
    protected function getPayum_Security_TokenFactoryService()
    {
        return $this->services['payum.security.token_factory'] = new \Payum\Bundle\PayumBundle\Security\TokenFactory($this->get('router'), $this->get('payum.security.token_storage'), $this->get('payum'));
    }

    /**
     * Gets the 'payum.security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Payum\Bridge\Doctrine\Storage\DoctrineStorage A Payum\Bridge\Doctrine\Storage\DoctrineStorage instance.
     */
    protected function getPayum_Security_TokenStorageService()
    {
        return $this->services['payum.security.token_storage'] = new \Payum\Bridge\Doctrine\Storage\DoctrineStorage($this->get('payum.entity_manager'), 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken');
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage('file:/var/www/lokisalle/app/cache/dev/profiler', '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/var/www/lokisalle/app/cache/dev/assetic/routing.yml', array('cache_dir' => '/var/www/lokisalle/app/cache/dev', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        $this->services['router_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');

        $b = new \Symfony\Component\Config\Loader\LoaderResolver();
        $b->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager')));
        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $b->addLoader($this->get('liip_imagine.routing.loader'));
        $b->addLoader($this->get('fos_rest.routing.loader.controller'));
        $b->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $b->addLoader($this->get('fos_rest.routing.loader.xml_collection'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $b);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.administration' => new \Symfony\Component\HttpFoundation\RequestMatcher('/administration/.*'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('/.*'), 'security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'))), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.administration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_AdministrationService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('security.context');
        $c = $this->get('http_kernel');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/administration/login'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/administration/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));

        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('default_target_path' => '/administration/dashboard', 'login_path' => '/administration/login', 'use_referer' => true, 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path'));
        $g->setProviderKey('administration');

        return $this->services['security.firewall.map.context.administration'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $a, 'administration', $g, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($c, $a, array('login_path' => '/administration/login', 'failure_path' => '/administration/login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $d), array('check_path' => '/administration/login-check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $d, $e), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '52b1e7735ca44', $d), 5 => $this->get('security.access_listener'), 6 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($b, $this->get('fos_user.user_provider.username'), $this->get('hwi_oauth.user_checker'), 'administration', $this->get('security.access.decision_manager'), $d, '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', $e)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $a, 'administration', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($c, $a, '/administration/login', false), NULL, NULL, $d));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('fos_user.user_provider.username');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.context');
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');
        $g = $this->get('security.authentication.session_strategy');
        $h = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $i = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $b, 1 => $b), 'abc', 'main', array('name' => 'APP_REMEMBER_ME', 'lifetime' => 31536000, 'always_remember_me' => true, 'remember_me_parameter' => '_remember_me', 'path' => '/', 'domain' => NULL, 'secure' => false, 'httponly' => true), $c);

        $j = new \Symfony\Component\Security\Http\Firewall\LogoutListener($d, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $j->addHandler($this->get('security.logout.handler.session'));
        $j->addHandler($i);

        $k = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('default_target_path' => '/', 'login_path' => '/login', 'use_referer' => true, 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path'));
        $k->setProviderKey('main');

        $l = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($d, $f, $g, $a, 'main', $k, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $a, array('login_path' => '/login', 'failure_path' => '/login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $c, $h);
        $l->setRememberMeServices($i);

        $m = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/connect', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $m->setProviderKey('main');

        $n = new \HWI\Bundle\OAuthBundle\Security\Http\Firewall\OAuthListener($d, $f, $g, $a, 'main', $m, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $a, array('login_path' => '/connect', 'failure_path' => '/connect', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true), $c, $h);
        $n->setResourceOwnerMap($this->get('hwi_oauth.resource_ownermap.main'));
        $n->setCheckPaths(array(0 => '/login/check-amazon', 1 => '/login/check-facebook', 2 => '/login/check-google'));
        $n->setRememberMeServices($i);

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $j, 3 => $l, 4 => $n, 5 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($d, $i, $f, $c, $h), 6 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($d, '52b1e7735ca44', $c), 7 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, $this->get('security.authentication.trust_resolver'), $a, 'main', new \HWI\Bundle\OAuthBundle\Security\Http\EntryPoint\OAuthEntryPoint($a, '/connect'), NULL, NULL, $c));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('/var/www/lokisalle/app/cache/dev/secure_random.seed', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());

        $instance->registerBag($this->get('sylius.process_storage.session.bag'));

        return $instance;
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance.
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/var/www/lokisalle/app/cache/dev/sessions');
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('/var/www/lokisalle/app/cache/dev/sessions');
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance.
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this);
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setUsername(NULL);
        $instance->setPassword(NULL);
        $instance->setAuthMode(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'sylius.availability_checker.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InventoryBundle\Checker\AvailabilityChecker A Sylius\Bundle\InventoryBundle\Checker\AvailabilityChecker instance.
     */
    protected function getSylius_AvailabilityChecker_DefaultService()
    {
        return $this->services['sylius.availability_checker.default'] = new \Sylius\Bundle\InventoryBundle\Checker\AvailabilityChecker(true);
    }

    /**
     * Gets the 'sylius.backorders_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InventoryBundle\Operator\BackordersHandler A Sylius\Bundle\InventoryBundle\Operator\BackordersHandler instance.
     */
    protected function getSylius_BackordersHandlerService()
    {
        return $this->services['sylius.backorders_handler'] = new \Sylius\Bundle\InventoryBundle\Operator\BackordersHandler($this->get('sylius.repository.inventory_unit'));
    }

    /**
     * Gets the 'sylius.builder.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ProductBundle\Builder\ProductBuilder A Sylius\Bundle\ProductBundle\Builder\ProductBuilder instance.
     */
    protected function getSylius_Builder_ProductService()
    {
        return $this->services['sylius.builder.product'] = new \Sylius\Bundle\ProductBundle\Builder\ProductBuilder($this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.product'), $this->get('sylius.repository.property'), $this->get('sylius.repository.product_property'));
    }

    /**
     * Gets the 'sylius.builder.prototype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Builder\PrototypeBuilder A Sylius\Bundle\VariableProductBundle\Builder\PrototypeBuilder instance.
     */
    protected function getSylius_Builder_PrototypeService()
    {
        return $this->services['sylius.builder.prototype'] = new \Sylius\Bundle\VariableProductBundle\Builder\PrototypeBuilder($this->get('sylius.repository.product_property'));
    }

    /**
     * Gets the 'sylius.cart.purger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CartBundle\Purger\ExpiredCartsPurger A Sylius\Bundle\CartBundle\Purger\ExpiredCartsPurger instance.
     */
    protected function getSylius_Cart_PurgerService()
    {
        return $this->services['sylius.cart.purger'] = new \Sylius\Bundle\CartBundle\Purger\ExpiredCartsPurger($this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.order'));
    }

    /**
     * Gets the 'sylius.cart_flash_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CartBundle\EventListener\FlashListener A Sylius\Bundle\CartBundle\EventListener\FlashListener instance.
     */
    protected function getSylius_CartFlashListenerService()
    {
        $this->services['sylius.cart_flash_listener'] = $instance = new \Sylius\Bundle\CartBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));

        $instance->setMessages();

        return $instance;
    }

    /**
     * Gets the 'sylius.cart_item_resolver.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Cart\ItemResolver A Sylius\Bundle\CoreBundle\Cart\ItemResolver instance.
     */
    protected function getSylius_CartItemResolver_DefaultService()
    {
        return $this->services['sylius.cart_item_resolver.default'] = new \Sylius\Bundle\CoreBundle\Cart\ItemResolver($this->get('sylius.repository.product'), $this->get('form.factory'), $this->get('sylius.availability_checker.default'), $this->get('sylius.checker.restricted_zone'));
    }

    /**
     * Gets the 'sylius.cart_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CartBundle\EventListener\CartListener A Sylius\Bundle\CartBundle\EventListener\CartListener instance.
     */
    protected function getSylius_CartListenerService()
    {
        return $this->services['sylius.cart_listener'] = new \Sylius\Bundle\CartBundle\EventListener\CartListener($this->get('doctrine.orm.default_entity_manager'), $this->get('validator'), $this->get('sylius.cart_provider.default'));
    }

    /**
     * Gets the 'sylius.cart_provider.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CartBundle\Provider\CartProvider A Sylius\Bundle\CartBundle\Provider\CartProvider instance.
     */
    protected function getSylius_CartProvider_DefaultService()
    {
        return $this->services['sylius.cart_provider.default'] = new \Sylius\Bundle\CartBundle\Provider\CartProvider($this->get('sylius.cart_storage.session'), $this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.order'));
    }

    /**
     * Gets the 'sylius.cart_storage.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CartBundle\Storage\SessionCartStorage A Sylius\Bundle\CartBundle\Storage\SessionCartStorage instance.
     */
    protected function getSylius_CartStorage_SessionService()
    {
        return $this->services['sylius.cart_storage.session'] = new \Sylius\Bundle\CartBundle\Storage\SessionCartStorage($this->get('session'));
    }

    /**
     * Gets the 'sylius.cart_twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CartBundle\Twig\SyliusCartExtension A Sylius\Bundle\CartBundle\Twig\SyliusCartExtension instance.
     */
    protected function getSylius_CartTwigService()
    {
        return $this->services['sylius.cart_twig'] = new \Sylius\Bundle\CartBundle\Twig\SyliusCartExtension($this->get('sylius.cart_provider.default'), $this->get('sylius.repository.order_item'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sylius.checker.restricted_zone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Checker\RestrictedZoneChecker A Sylius\Bundle\CoreBundle\Checker\RestrictedZoneChecker instance.
     */
    protected function getSylius_Checker_RestrictedZoneService()
    {
        return $this->services['sylius.checker.restricted_zone'] = new \Sylius\Bundle\CoreBundle\Checker\RestrictedZoneChecker($this->get('security.context'), $this->get('sylius.zone_matcher'));
    }

    /**
     * Gets the 'sylius.checkout_form.addressing' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\Checkout\AddressingStepType A Sylius\Bundle\CoreBundle\Form\Type\Checkout\AddressingStepType instance.
     */
    protected function getSylius_CheckoutForm_AddressingService()
    {
        return $this->services['sylius.checkout_form.addressing'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\AddressingStepType('Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }

    /**
     * Gets the 'sylius.checkout_form.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\Checkout\PaymentStepType A Sylius\Bundle\CoreBundle\Form\Type\Checkout\PaymentStepType instance.
     */
    protected function getSylius_CheckoutForm_PaymentService()
    {
        return $this->services['sylius.checkout_form.payment'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\PaymentStepType('Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }

    /**
     * Gets the 'sylius.checkout_form.shipment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShipmentType A Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShipmentType instance.
     */
    protected function getSylius_CheckoutForm_ShipmentService()
    {
        return $this->services['sylius.checkout_form.shipment'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShipmentType('Sylius\\Bundle\\CoreBundle\\Model\\Shipment', $this->get('translator.default'));
    }

    /**
     * Gets the 'sylius.checkout_form.shipping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShippingStepType A Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShippingStepType instance.
     */
    protected function getSylius_CheckoutForm_ShippingService()
    {
        return $this->services['sylius.checkout_form.shipping'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShippingStepType('Sylius\\Bundle\\CoreBundle\\Model\\Order');
    }

    /**
     * Gets the 'sylius.checkout_scenario' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Checkout\CheckoutProcessScenario A Sylius\Bundle\CoreBundle\Checkout\CheckoutProcessScenario instance.
     */
    protected function getSylius_CheckoutScenarioService()
    {
        return $this->services['sylius.checkout_scenario'] = new \Sylius\Bundle\CoreBundle\Checkout\CheckoutProcessScenario($this->get('sylius.cart_provider.default'));
    }

    /**
     * Gets the 'sylius.checkout_step.addressing' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Checkout\Step\AddressingStep A Sylius\Bundle\CoreBundle\Checkout\Step\AddressingStep instance.
     */
    protected function getSylius_CheckoutStep_AddressingService()
    {
        $this->services['sylius.checkout_step.addressing'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\AddressingStep();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.checkout_step.finalize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Checkout\Step\FinalizeStep A Sylius\Bundle\CoreBundle\Checkout\Step\FinalizeStep instance.
     */
    protected function getSylius_CheckoutStep_FinalizeService()
    {
        $this->services['sylius.checkout_step.finalize'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\FinalizeStep();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.checkout_step.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Checkout\Step\PaymentStep A Sylius\Bundle\CoreBundle\Checkout\Step\PaymentStep instance.
     */
    protected function getSylius_CheckoutStep_PaymentService()
    {
        $this->services['sylius.checkout_step.payment'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\PaymentStep();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.checkout_step.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Checkout\Step\SecurityStep A Sylius\Bundle\CoreBundle\Checkout\Step\SecurityStep instance.
     */
    protected function getSylius_CheckoutStep_SecurityService()
    {
        $this->services['sylius.checkout_step.security'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\SecurityStep();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.checkout_step.shipping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Checkout\Step\ShippingStep A Sylius\Bundle\CoreBundle\Checkout\Step\ShippingStep instance.
     */
    protected function getSylius_CheckoutStep_ShippingService()
    {
        $this->services['sylius.checkout_step.shipping'] = $instance = new \Sylius\Bundle\CoreBundle\Checkout\Step\ShippingStep();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.address' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\Controller\Frontend\Account\AddressController A Sylius\Bundle\WebBundle\Controller\Frontend\Account\AddressController instance.
     */
    protected function getSylius_Controller_AddressService()
    {
        $this->services['sylius.controller.address'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Frontend\Account\AddressController('sylius', 'address', 'SyliusAddressingBundle:Address');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.adjustment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_AdjustmentService()
    {
        $this->services['sylius.controller.adjustment'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'adjustment', 'SyliusOrderBundle:Adjustment');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.backend.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\Controller\Backend\DashboardController A Sylius\Bundle\WebBundle\Controller\Backend\DashboardController instance.
     */
    protected function getSylius_Controller_Backend_DashboardService()
    {
        $this->services['sylius.controller.backend.dashboard'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Backend\DashboardController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.backend.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\Controller\Backend\SecurityController A Sylius\Bundle\WebBundle\Controller\Backend\SecurityController instance.
     */
    protected function getSylius_Controller_Backend_SecurityService()
    {
        $this->services['sylius.controller.backend.security'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Backend\SecurityController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.cart' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CartBundle\Controller\CartController A Sylius\Bundle\CartBundle\Controller\CartController instance.
     */
    protected function getSylius_Controller_CartService()
    {
        $this->services['sylius.controller.cart'] = $instance = new \Sylius\Bundle\CartBundle\Controller\CartController('sylius', 'cart', 'SyliusCartBundle:Cart');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.cart_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CartBundle\Controller\CartItemController A Sylius\Bundle\CartBundle\Controller\CartItemController instance.
     */
    protected function getSylius_Controller_CartItemService()
    {
        $this->services['sylius.controller.cart_item'] = $instance = new \Sylius\Bundle\CartBundle\Controller\CartItemController('sylius', 'cart_item', 'SyliusCartBundle:CartItem');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_CountryService()
    {
        $this->services['sylius.controller.country'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'country', 'SyliusAddressingBundle:Country');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\MoneyBundle\Controller\CurrencyController A Sylius\Bundle\MoneyBundle\Controller\CurrencyController instance.
     */
    protected function getSylius_Controller_CurrencyService()
    {
        $this->services['sylius.controller.currency'] = $instance = new \Sylius\Bundle\MoneyBundle\Controller\CurrencyController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.exchange_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_ExchangeRateService()
    {
        $this->services['sylius.controller.exchange_rate'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'exchange_rate', 'SyliusMoneyBundle:ExchangeRate');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.frontend.account.order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\Controller\Frontend\Account\OrderController A Sylius\Bundle\WebBundle\Controller\Frontend\Account\OrderController instance.
     */
    protected function getSylius_Controller_Frontend_Account_OrderService()
    {
        $this->services['sylius.controller.frontend.account.order'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Frontend\Account\OrderController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.frontend.homepage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\Controller\Frontend\HomepageController A Sylius\Bundle\WebBundle\Controller\Frontend\HomepageController instance.
     */
    protected function getSylius_Controller_Frontend_HomepageService()
    {
        $this->services['sylius.controller.frontend.homepage'] = $instance = new \Sylius\Bundle\WebBundle\Controller\Frontend\HomepageController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.group' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_GroupService()
    {
        $this->services['sylius.controller.group'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'group', NULL);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.inventory_unit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_InventoryUnitService()
    {
        $this->services['sylius.controller.inventory_unit'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'inventory_unit', 'SyliusInventoryBundle:InventoryUnit');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.option' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_OptionService()
    {
        $this->services['sylius.controller.option'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'option', 'SyliusVariableProductBundle:Option');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Controller\OrderController A Sylius\Bundle\CoreBundle\Controller\OrderController instance.
     */
    protected function getSylius_Controller_OrderService()
    {
        $this->services['sylius.controller.order'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\OrderController('sylius', 'order', 'SyliusOrderBundle:Order');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.order_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_OrderItemService()
    {
        $this->services['sylius.controller.order_item'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'order_item', 'SyliusOrderBundle:Item');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_PaymentService()
    {
        $this->services['sylius.controller.payment'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'payment', 'SyliusPaymentsBundle:Payment');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.payment_method' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_PaymentMethodService()
    {
        $this->services['sylius.controller.payment_method'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'payment_method', 'SyliusPaymentsBundle:PaymentMethod');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.process' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\FlowBundle\Controller\ProcessController A Sylius\Bundle\FlowBundle\Controller\ProcessController instance.
     */
    protected function getSylius_Controller_ProcessService()
    {
        $this->services['sylius.controller.process'] = $instance = new \Sylius\Bundle\FlowBundle\Controller\ProcessController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Controller\ProductController A Sylius\Bundle\CoreBundle\Controller\ProductController instance.
     */
    protected function getSylius_Controller_ProductService()
    {
        $this->services['sylius.controller.product'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\ProductController('sylius', 'product', 'SyliusProductBundle:Product');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.promotion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_PromotionService()
    {
        $this->services['sylius.controller.promotion'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'promotion', 'SyliusPromotionsBundle:Promotion');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.promotion_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_PromotionActionService()
    {
        $this->services['sylius.controller.promotion_action'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'promotion_action', 'SyliusPromotionsBundle:Action');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.promotion_coupon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Controller\CouponController A Sylius\Bundle\PromotionsBundle\Controller\CouponController instance.
     */
    protected function getSylius_Controller_PromotionCouponService()
    {
        $this->services['sylius.controller.promotion_coupon'] = $instance = new \Sylius\Bundle\PromotionsBundle\Controller\CouponController('sylius', 'promotion_coupon', 'SyliusPromotionsBundle:Coupon');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.promotion_rule' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_PromotionRuleService()
    {
        $this->services['sylius.controller.promotion_rule'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'promotion_rule', 'SyliusPromotionsBundle:Rule');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.property' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_PropertyService()
    {
        $this->services['sylius.controller.property'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'property', 'SyliusProductBundle:Property');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.prototype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ProductBundle\Controller\PrototypeController A Sylius\Bundle\ProductBundle\Controller\PrototypeController instance.
     */
    protected function getSylius_Controller_PrototypeService()
    {
        $this->services['sylius.controller.prototype'] = $instance = new \Sylius\Bundle\ProductBundle\Controller\PrototypeController('sylius', 'prototype', 'SyliusProductBundle:Prototype');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.province' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Controller\ProvinceController A Sylius\Bundle\AddressingBundle\Controller\ProvinceController instance.
     */
    protected function getSylius_Controller_ProvinceService()
    {
        $this->services['sylius.controller.province'] = $instance = new \Sylius\Bundle\AddressingBundle\Controller\ProvinceController('sylius', 'province', 'SyliusAddressingBundle:Province');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\SettingsBundle\Controller\SettingsController A Sylius\Bundle\SettingsBundle\Controller\SettingsController instance.
     */
    protected function getSylius_Controller_SettingsService()
    {
        $this->services['sylius.controller.settings'] = $instance = new \Sylius\Bundle\SettingsBundle\Controller\SettingsController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.shipment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_ShipmentService()
    {
        $this->services['sylius.controller.shipment'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'shipment', 'SyliusShippingBundle:Shipment');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.shipping_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_ShippingCategoryService()
    {
        $this->services['sylius.controller.shipping_category'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'shipping_category', 'SyliusShippingBundle:ShippingCategory');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.shipping_method' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_ShippingMethodService()
    {
        $this->services['sylius.controller.shipping_method'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'shipping_method', 'SyliusShippingBundle:Shippingmethod');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.tax_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_TaxCategoryService()
    {
        $this->services['sylius.controller.tax_category'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'tax_category', 'SyliusTaxationBundle:TaxCategory');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.tax_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_TaxRateService()
    {
        $this->services['sylius.controller.tax_rate'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'tax_rate', 'SyliusTaxationBundle:TaxRate');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.taxon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxonomiesBundle\Controller\TaxonController A Sylius\Bundle\TaxonomiesBundle\Controller\TaxonController instance.
     */
    protected function getSylius_Controller_TaxonService()
    {
        $this->services['sylius.controller.taxon'] = $instance = new \Sylius\Bundle\TaxonomiesBundle\Controller\TaxonController('sylius', 'taxon', 'SyliusTaxonomiesBundle:Taxon');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.taxonomy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_TaxonomyService()
    {
        $this->services['sylius.controller.taxonomy'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'taxonomy', 'SyliusTaxonomiesBundle:Taxonomy');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Controller\UserController A Sylius\Bundle\CoreBundle\Controller\UserController instance.
     */
    protected function getSylius_Controller_UserService()
    {
        $this->services['sylius.controller.user'] = $instance = new \Sylius\Bundle\CoreBundle\Controller\UserController('sylius', 'user', NULL);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Controller\VariantController A Sylius\Bundle\VariableProductBundle\Controller\VariantController instance.
     */
    protected function getSylius_Controller_VariantService()
    {
        $this->services['sylius.controller.variant'] = $instance = new \Sylius\Bundle\VariableProductBundle\Controller\VariantController('sylius', 'variant', 'SyliusVariableProductBundle:Variant');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.zone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_ZoneService()
    {
        $this->services['sylius.controller.zone'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'zone', 'SyliusAddressingBundle:Zone');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.controller.zone_member' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Controller\ResourceController A Sylius\Bundle\ResourceBundle\Controller\ResourceController instance.
     */
    protected function getSylius_Controller_ZoneMemberService()
    {
        $this->services['sylius.controller.zone_member'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController('sylius', 'zone_member', 'SyliusAddressingBundle:ZoneMember');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.currency_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Context\CurrencyContext A Sylius\Bundle\CoreBundle\Context\CurrencyContext instance.
     */
    protected function getSylius_CurrencyContextService()
    {
        return $this->services['sylius.currency_context'] = new \Sylius\Bundle\CoreBundle\Context\CurrencyContext($this->get('security.context'), $this->get('session'), $this->get('sylius.settings.manager'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'sylius.currency_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\MoneyBundle\Converter\CurrencyConverter A Sylius\Bundle\MoneyBundle\Converter\CurrencyConverter instance.
     */
    protected function getSylius_CurrencyConverterService()
    {
        return $this->services['sylius.currency_converter'] = new \Sylius\Bundle\MoneyBundle\Converter\CurrencyConverter($this->get('sylius.repository.exchange_rate'));
    }

    /**
     * Gets the 'sylius.event_subscriber.load_metadata' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\EventListener\LoadMetadataSubscriber A Sylius\Bundle\ResourceBundle\EventListener\LoadMetadataSubscriber instance.
     */
    protected function getSylius_EventSubscriber_LoadMetadataService()
    {
        return $this->services['sylius.event_subscriber.load_metadata'] = new \Sylius\Bundle\ResourceBundle\EventListener\LoadMetadataSubscriber(array('user' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\User'), 'group' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\GroupType'), 'variant_image' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\VariantImage'), 'taxonomy' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonomyType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'taxon' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxon', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonType', 'controller' => 'Sylius\\Bundle\\TaxonomiesBundle\\Controller\\TaxonController'), 'unit' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'stockable' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant'), 'address' => array('controller' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\Account\\AddressController', 'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Address', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType'), 'country' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Country', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType'), 'province' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Province', 'controller' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType'), 'zone' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Zone', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType'), 'zone_member' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType'), 'zone_member_country' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCountryType'), 'zone_member_province' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberProvinceType'), 'zone_member_zone' => array('model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberZoneType'), 'promotion' => array('model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\PromotionType'), 'promotion_rule' => array('model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Rule', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleType'), 'promotion_action' => array('model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Action', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionType'), 'promotion_coupon' => array('model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon', 'controller' => 'Sylius\\Bundle\\PromotionsBundle\\Controller\\CouponController', 'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponType'), 'payment_security_token' => array('model' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken'), 'payment_method' => array('model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodType'), 'payment' => array('model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentType'), 'payment_log' => array('model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentLog', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'credit_card' => array('model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\CreditCardType'), 'shipment' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Shipment', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType'), 'shipment_item' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentItemType'), 'shipping_method' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShippingMethodType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'shipping_category' => array('model' => 'Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType'), 'shipping_method_rule' => array('model' => 'Sylius\\Bundle\\ShippingBundle\\Model\\Rule', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\RuleType'), 'tax_rate' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\TaxRate', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxRateType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController'), 'tax_category' => array('model' => 'Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType'), 'variant' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\VariantType', 'controller' => 'Sylius\\Bundle\\VariableProductBundle\\Controller\\VariantController'), 'option' => array('model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Option', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionType'), 'option_value' => array('model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueType'), 'product' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Product', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ProductType', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ProductRepository'), 'prototype' => array('model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype', 'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\PrototypeType', 'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\PrototypeController'), 'property' => array('model' => 'Sylius\\Bundle\\ProductBundle\\Model\\Property', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\PropertyType'), 'product_property' => array('model' => 'Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductPropertyType'), 'cart' => array('form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartType', 'controller' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartController'), 'item' => array('form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartItemType', 'controller' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartItemController'), 'parameter' => array('model' => 'Sylius\\Bundle\\SettingsBundle\\Model\\Parameter'), 'exchange_rate' => array('model' => 'Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\ExchangeRateType'), 'currency' => array('controller' => 'Sylius\\Bundle\\MoneyBundle\\Controller\\CurrencyController'), 'order' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\OrderRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\OrderType'), 'order_item' => array('model' => 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType'), 'adjustment' => array('model' => 'Sylius\\Bundle\\OrderBundle\\Model\\Adjustment', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\AdjustmentType')));
    }

    /**
     * Gets the 'sylius.form.frontend.profile.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\Form\ProfileFormType A Sylius\Bundle\WebBundle\Form\ProfileFormType instance.
     */
    protected function getSylius_Form_Frontend_Profile_TypeService()
    {
        return $this->services['sylius.form.frontend.profile.type'] = new \Sylius\Bundle\WebBundle\Form\ProfileFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'sylius.form.listener.address' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\EventListener\BuildAddressFormListener A Sylius\Bundle\AddressingBundle\Form\EventListener\BuildAddressFormListener instance.
     */
    protected function getSylius_Form_Listener_AddressService()
    {
        return $this->services['sylius.form.listener.address'] = new \Sylius\Bundle\AddressingBundle\Form\EventListener\BuildAddressFormListener($this->get('sylius.repository.country'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sylius.form.type.address' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\AddressType A Sylius\Bundle\AddressingBundle\Form\Type\AddressType instance.
     */
    protected function getSylius_Form_Type_AddressService()
    {
        return $this->services['sylius.form.type.address'] = new \Sylius\Bundle\AddressingBundle\Form\Type\AddressType('Sylius\\Bundle\\AddressingBundle\\Model\\Address', array(0 => 'sylius'), $this->get('sylius.form.listener.address'));
    }

    /**
     * Gets the 'sylius.form.type.adjustment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\OrderBundle\Form\Type\AdjustmentType A Sylius\Bundle\OrderBundle\Form\Type\AdjustmentType instance.
     */
    protected function getSylius_Form_Type_AdjustmentService()
    {
        return $this->services['sylius.form.type.adjustment'] = new \Sylius\Bundle\OrderBundle\Form\Type\AdjustmentType('Sylius\\Bundle\\OrderBundle\\Model\\Adjustment', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.cart' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\CartType A Sylius\Bundle\CoreBundle\Form\Type\CartType instance.
     */
    protected function getSylius_Form_Type_CartService()
    {
        return $this->services['sylius.form.type.cart'] = new \Sylius\Bundle\CoreBundle\Form\Type\CartType('Sylius\\Bundle\\CoreBundle\\Model\\Order', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.cart_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\CartItemType A Sylius\Bundle\CoreBundle\Form\Type\CartItemType instance.
     */
    protected function getSylius_Form_Type_CartItemService()
    {
        return $this->services['sylius.form.type.cart_item'] = new \Sylius\Bundle\CoreBundle\Form\Type\CartItemType('Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Form\Type\ConfigurationType A Sylius\Bundle\InstallerBundle\Form\Type\ConfigurationType instance.
     */
    protected function getSylius_Form_Type_ConfigurationService()
    {
        return $this->services['sylius.form.type.configuration'] = new \Sylius\Bundle\InstallerBundle\Form\Type\ConfigurationType();
    }

    /**
     * Gets the 'sylius.form.type.configuration.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Form\Type\Configuration\DatabaseType A Sylius\Bundle\InstallerBundle\Form\Type\Configuration\DatabaseType instance.
     */
    protected function getSylius_Form_Type_Configuration_DatabaseService()
    {
        return $this->services['sylius.form.type.configuration.database'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\DatabaseType();
    }

    /**
     * Gets the 'sylius.form.type.configuration.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Form\Type\Configuration\HiddenType A Sylius\Bundle\InstallerBundle\Form\Type\Configuration\HiddenType instance.
     */
    protected function getSylius_Form_Type_Configuration_HiddenService()
    {
        return $this->services['sylius.form.type.configuration.hidden'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\HiddenType();
    }

    /**
     * Gets the 'sylius.form.type.configuration.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Form\Type\Configuration\LocaleType A Sylius\Bundle\InstallerBundle\Form\Type\Configuration\LocaleType instance.
     */
    protected function getSylius_Form_Type_Configuration_LocaleService()
    {
        return $this->services['sylius.form.type.configuration.locale'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\LocaleType();
    }

    /**
     * Gets the 'sylius.form.type.configuration.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Form\Type\Configuration\MailerType A Sylius\Bundle\InstallerBundle\Form\Type\Configuration\MailerType instance.
     */
    protected function getSylius_Form_Type_Configuration_MailerService()
    {
        return $this->services['sylius.form.type.configuration.mailer'] = new \Sylius\Bundle\InstallerBundle\Form\Type\Configuration\MailerType();
    }

    /**
     * Gets the 'sylius.form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\CountryType A Sylius\Bundle\AddressingBundle\Form\Type\CountryType instance.
     */
    protected function getSylius_Form_Type_CountryService()
    {
        return $this->services['sylius.form.type.country'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryType('Sylius\\Bundle\\AddressingBundle\\Model\\Country', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.country_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\CountryEntityChoiceType A Sylius\Bundle\AddressingBundle\Form\Type\CountryEntityChoiceType instance.
     */
    protected function getSylius_Form_Type_CountryChoiceService()
    {
        return $this->services['sylius.form.type.country_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryEntityChoiceType('Sylius\\Bundle\\AddressingBundle\\Model\\Country');
    }

    /**
     * Gets the 'sylius.form.type.credit_card' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PaymentsBundle\Form\Type\CreditCardType A Sylius\Bundle\PaymentsBundle\Form\Type\CreditCardType instance.
     */
    protected function getSylius_Form_Type_CreditCardService()
    {
        return $this->services['sylius.form.type.credit_card'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\CreditCardType('Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.exchange_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\MoneyBundle\Form\Type\ExchangeRateType A Sylius\Bundle\MoneyBundle\Form\Type\ExchangeRateType instance.
     */
    protected function getSylius_Form_Type_ExchangeRateService()
    {
        return $this->services['sylius.form.type.exchange_rate'] = new \Sylius\Bundle\MoneyBundle\Form\Type\ExchangeRateType('Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate');
    }

    /**
     * Gets the 'sylius.form.type.group' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\GroupType A Sylius\Bundle\CoreBundle\Form\Type\GroupType instance.
     */
    protected function getSylius_Form_Type_GroupService()
    {
        return $this->services['sylius.form.type.group'] = new \Sylius\Bundle\CoreBundle\Form\Type\GroupType('Sylius\\Bundle\\CoreBundle\\Model\\Group');
    }

    /**
     * Gets the 'sylius.form.type.group_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\GroupEntityType A Sylius\Bundle\CoreBundle\Form\Type\GroupEntityType instance.
     */
    protected function getSylius_Form_Type_GroupChoiceService()
    {
        return $this->services['sylius.form.type.group_choice'] = new \Sylius\Bundle\CoreBundle\Form\Type\GroupEntityType('Sylius\\Bundle\\CoreBundle\\Model\\Group');
    }

    /**
     * Gets the 'sylius.form.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\ImageType A Sylius\Bundle\CoreBundle\Form\Type\ImageType instance.
     */
    protected function getSylius_Form_Type_ImageService()
    {
        return $this->services['sylius.form.type.image'] = new \Sylius\Bundle\CoreBundle\Form\Type\ImageType('Sylius\\Bundle\\CoreBundle\\Model\\VariantImage');
    }

    /**
     * Gets the 'sylius.form.type.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\ListType A Sylius\Bundle\CoreBundle\Form\Type\ListType instance.
     */
    protected function getSylius_Form_Type_ListService()
    {
        return $this->services['sylius.form.type.list'] = new \Sylius\Bundle\CoreBundle\Form\Type\ListType();
    }

    /**
     * Gets the 'sylius.form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\MoneyBundle\Form\Type\MoneyType A Sylius\Bundle\MoneyBundle\Form\Type\MoneyType instance.
     */
    protected function getSylius_Form_Type_MoneyService()
    {
        return $this->services['sylius.form.type.money'] = new \Sylius\Bundle\MoneyBundle\Form\Type\MoneyType('EUR');
    }

    /**
     * Gets the 'sylius.form.type.option' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\OptionType A Sylius\Bundle\VariableProductBundle\Form\Type\OptionType instance.
     */
    protected function getSylius_Form_Type_OptionService()
    {
        return $this->services['sylius.form.type.option'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionType('Sylius\\Bundle\\VariableProductBundle\\Model\\Option', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.option_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\OptionEntityChoiceType A Sylius\Bundle\VariableProductBundle\Form\Type\OptionEntityChoiceType instance.
     */
    protected function getSylius_Form_Type_OptionChoiceService()
    {
        return $this->services['sylius.form.type.option_choice'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionEntityChoiceType('Sylius\\Bundle\\VariableProductBundle\\Model\\Option');
    }

    /**
     * Gets the 'sylius.form.type.option_value' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueType A Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueType instance.
     */
    protected function getSylius_Form_Type_OptionValueService()
    {
        return $this->services['sylius.form.type.option_value'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueType('Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.option_value_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueChoiceType A Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueChoiceType instance.
     */
    protected function getSylius_Form_Type_OptionValueChoiceService()
    {
        return $this->services['sylius.form.type.option_value_choice'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueChoiceType();
    }

    /**
     * Gets the 'sylius.form.type.option_value_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueCollectionType A Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueCollectionType instance.
     */
    protected function getSylius_Form_Type_OptionValueCollectionService()
    {
        return $this->services['sylius.form.type.option_value_collection'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\OptionValueCollectionType();
    }

    /**
     * Gets the 'sylius.form.type.order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\OrderType A Sylius\Bundle\CoreBundle\Form\Type\OrderType instance.
     */
    protected function getSylius_Form_Type_OrderService()
    {
        return $this->services['sylius.form.type.order'] = new \Sylius\Bundle\CoreBundle\Form\Type\OrderType('Sylius\\Bundle\\CoreBundle\\Model\\Order', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.order_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\Filter\OrderFilterType A Sylius\Bundle\CoreBundle\Form\Type\Filter\OrderFilterType instance.
     */
    protected function getSylius_Form_Type_OrderFilterService()
    {
        return $this->services['sylius.form.type.order_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\OrderFilterType();
    }

    /**
     * Gets the 'sylius.form.type.order_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\OrderBundle\Form\Type\OrderItemType A Sylius\Bundle\OrderBundle\Form\Type\OrderItemType instance.
     */
    protected function getSylius_Form_Type_OrderItemService()
    {
        return $this->services['sylius.form.type.order_item'] = new \Sylius\Bundle\OrderBundle\Form\Type\OrderItemType('Sylius\\Bundle\\CoreBundle\\Model\\OrderItem', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PaymentsBundle\Form\Type\PaymentType A Sylius\Bundle\PaymentsBundle\Form\Type\PaymentType instance.
     */
    protected function getSylius_Form_Type_PaymentService()
    {
        return $this->services['sylius.form.type.payment'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentType('Sylius\\Bundle\\PaymentsBundle\\Model\\Payment', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.payment_gateway_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PaymentsBundle\Form\Type\PaymentGatewayChoiceType A Sylius\Bundle\PaymentsBundle\Form\Type\PaymentGatewayChoiceType instance.
     */
    protected function getSylius_Form_Type_PaymentGatewayChoiceService()
    {
        return $this->services['sylius.form.type.payment_gateway_choice'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentGatewayChoiceType(array('dummy' => 'Test', 'stripe' => 'Stripe', 'be2bill' => 'Be2Bill'));
    }

    /**
     * Gets the 'sylius.form.type.payment_method' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodType A Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodType instance.
     */
    protected function getSylius_Form_Type_PaymentMethodService()
    {
        return $this->services['sylius.form.type.payment_method'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodType('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.payment_method_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodEntityType A Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodEntityType instance.
     */
    protected function getSylius_Form_Type_PaymentMethodChoiceService()
    {
        return $this->services['sylius.form.type.payment_method_choice'] = new \Sylius\Bundle\PaymentsBundle\Form\Type\PaymentMethodEntityType('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod');
    }

    /**
     * Gets the 'sylius.form.type.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\ProductType A Sylius\Bundle\CoreBundle\Form\Type\ProductType instance.
     */
    protected function getSylius_Form_Type_ProductService()
    {
        return $this->services['sylius.form.type.product'] = new \Sylius\Bundle\CoreBundle\Form\Type\ProductType('Sylius\\Bundle\\CoreBundle\\Model\\Product', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.product_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\Filter\ProductFilterType A Sylius\Bundle\CoreBundle\Form\Type\Filter\ProductFilterType instance.
     */
    protected function getSylius_Form_Type_ProductFilterService()
    {
        return $this->services['sylius.form.type.product_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\ProductFilterType();
    }

    /**
     * Gets the 'sylius.form.type.product_property' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ProductBundle\Form\Type\ProductPropertyType A Sylius\Bundle\ProductBundle\Form\Type\ProductPropertyType instance.
     */
    protected function getSylius_Form_Type_ProductPropertyService()
    {
        return $this->services['sylius.form.type.product_property'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductPropertyType('Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.product_to_identifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ProductBundle\Form\Type\ProductToIdentifierType A Sylius\Bundle\ProductBundle\Form\Type\ProductToIdentifierType instance.
     */
    protected function getSylius_Form_Type_ProductToIdentifierService()
    {
        return $this->services['sylius.form.type.product_to_identifier'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductToIdentifierType($this->get('sylius.repository.product'));
    }

    /**
     * Gets the 'sylius.form.type.promotion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\PromotionType A Sylius\Bundle\PromotionsBundle\Form\Type\PromotionType instance.
     */
    protected function getSylius_Form_Type_PromotionService()
    {
        return $this->services['sylius.form.type.promotion'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\PromotionType('Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion', array(0 => 'sylius'), $this->get('sylius.registry.promotion_rule_checker'), $this->get('sylius.registry.promotion_action'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\ActionType A Sylius\Bundle\PromotionsBundle\Form\Type\ActionType instance.
     */
    protected function getSylius_Form_Type_PromotionActionService()
    {
        return $this->services['sylius.form.type.promotion_action'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\ActionType('Sylius\\Bundle\\PromotionsBundle\\Model\\Action', array(0 => 'sylius'), $this->get('sylius.registry.promotion_action'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_action.fixed_discount_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\Action\FixedDiscountConfigurationType A Sylius\Bundle\PromotionsBundle\Form\Type\Action\FixedDiscountConfigurationType instance.
     */
    protected function getSylius_Form_Type_PromotionAction_FixedDiscountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_action.fixed_discount_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Action\FixedDiscountConfigurationType(array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_action.percentage_discount_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\Action\PercentageDiscountConfigurationType A Sylius\Bundle\PromotionsBundle\Form\Type\Action\PercentageDiscountConfigurationType instance.
     */
    protected function getSylius_Form_Type_PromotionAction_PercentageDiscountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_action.percentage_discount_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Action\PercentageDiscountConfigurationType(array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_action_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\ActionChoiceType A Sylius\Bundle\PromotionsBundle\Form\Type\ActionChoiceType instance.
     */
    protected function getSylius_Form_Type_PromotionActionChoiceService()
    {
        return $this->services['sylius.form.type.promotion_action_choice'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\ActionChoiceType(array('fixed_discount' => 'Fixed discount', 'percentage_discount' => 'Percentage discount'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_coupon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\CouponType A Sylius\Bundle\PromotionsBundle\Form\Type\CouponType instance.
     */
    protected function getSylius_Form_Type_PromotionCouponService()
    {
        return $this->services['sylius.form.type.promotion_coupon'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponType('Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_coupon_generate_instruction' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\CouponGenerateInstructionType A Sylius\Bundle\PromotionsBundle\Form\Type\CouponGenerateInstructionType instance.
     */
    protected function getSylius_Form_Type_PromotionCouponGenerateInstructionService()
    {
        return $this->services['sylius.form.type.promotion_coupon_generate_instruction'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponGenerateInstructionType('Sylius\\Bundle\\PromotionsBundle\\Generator\\Instruction', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_coupon_to_code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\CouponToCodeType A Sylius\Bundle\PromotionsBundle\Form\Type\CouponToCodeType instance.
     */
    protected function getSylius_Form_Type_PromotionCouponToCodeService()
    {
        return $this->services['sylius.form.type.promotion_coupon_to_code'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\CouponToCodeType($this->get('sylius.repository.promotion_coupon'), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_rule' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\RuleType A Sylius\Bundle\PromotionsBundle\Form\Type\RuleType instance.
     */
    protected function getSylius_Form_Type_PromotionRuleService()
    {
        return $this->services['sylius.form.type.promotion_rule'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\RuleType('Sylius\\Bundle\\PromotionsBundle\\Model\\Rule', array(0 => 'sylius'), $this->get('sylius.registry.promotion_rule_checker'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_rule.item_count_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemCountConfigurationType A Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemCountConfigurationType instance.
     */
    protected function getSylius_Form_Type_PromotionRule_ItemCountConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.item_count_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemCountConfigurationType(array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_rule.item_total_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemTotalConfigurationType A Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemTotalConfigurationType instance.
     */
    protected function getSylius_Form_Type_PromotionRule_ItemTotalConfigurationService()
    {
        return $this->services['sylius.form.type.promotion_rule.item_total_configuration'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\Rule\ItemTotalConfigurationType(array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.promotion_rule_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Form\Type\RuleChoiceType A Sylius\Bundle\PromotionsBundle\Form\Type\RuleChoiceType instance.
     */
    protected function getSylius_Form_Type_PromotionRuleChoiceService()
    {
        return $this->services['sylius.form.type.promotion_rule_choice'] = new \Sylius\Bundle\PromotionsBundle\Form\Type\RuleChoiceType(array('item_total' => 'Item total', 'item_count' => 'Item count'));
    }

    /**
     * Gets the 'sylius.form.type.property' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ProductBundle\Form\Type\PropertyType A Sylius\Bundle\ProductBundle\Form\Type\PropertyType instance.
     */
    protected function getSylius_Form_Type_PropertyService()
    {
        return $this->services['sylius.form.type.property'] = new \Sylius\Bundle\ProductBundle\Form\Type\PropertyType('Sylius\\Bundle\\ProductBundle\\Model\\Property', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.property_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ProductBundle\Form\Type\PropertyEntityChoiceType A Sylius\Bundle\ProductBundle\Form\Type\PropertyEntityChoiceType instance.
     */
    protected function getSylius_Form_Type_PropertyChoiceService()
    {
        return $this->services['sylius.form.type.property_choice'] = new \Sylius\Bundle\ProductBundle\Form\Type\PropertyEntityChoiceType('Sylius\\Bundle\\ProductBundle\\Model\\Property');
    }

    /**
     * Gets the 'sylius.form.type.prototype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\PrototypeType A Sylius\Bundle\VariableProductBundle\Form\Type\PrototypeType instance.
     */
    protected function getSylius_Form_Type_PrototypeService()
    {
        return $this->services['sylius.form.type.prototype'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\PrototypeType('Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.province' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\ProvinceType A Sylius\Bundle\AddressingBundle\Form\Type\ProvinceType instance.
     */
    protected function getSylius_Form_Type_ProvinceService()
    {
        return $this->services['sylius.form.type.province'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ProvinceType('Sylius\\Bundle\\AddressingBundle\\Model\\Province', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.province_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\ProvinceChoiceType A Sylius\Bundle\AddressingBundle\Form\Type\ProvinceChoiceType instance.
     */
    protected function getSylius_Form_Type_ProvinceChoiceService()
    {
        return $this->services['sylius.form.type.province_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ProvinceChoiceType($this->get('sylius.repository.province'));
    }

    /**
     * Gets the 'sylius.form.type.setup' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Form\Type\SetupType A Sylius\Bundle\InstallerBundle\Form\Type\SetupType instance.
     */
    protected function getSylius_Form_Type_SetupService()
    {
        return $this->services['sylius.form.type.setup'] = new \Sylius\Bundle\InstallerBundle\Form\Type\SetupType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'sylius.form.type.shipping_calculator.flat_rate_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlatRateConfigurationType A Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlatRateConfigurationType instance.
     */
    protected function getSylius_Form_Type_ShippingCalculator_FlatRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.flat_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlatRateConfigurationType(array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.shipping_calculator.flexible_rate_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlexibleRateConfigurationType A Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlexibleRateConfigurationType instance.
     */
    protected function getSylius_Form_Type_ShippingCalculator_FlexibleRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.flexible_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\FlexibleRateConfigurationType(array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.shipping_calculator.per_item_rate_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Form\Type\Calculator\PerItemRateConfigurationType A Sylius\Bundle\ShippingBundle\Form\Type\Calculator\PerItemRateConfigurationType instance.
     */
    protected function getSylius_Form_Type_ShippingCalculator_PerItemRateConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_calculator.per_item_rate_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Calculator\PerItemRateConfigurationType(array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.shipping_calculator_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Form\Type\CalculatorChoiceType A Sylius\Bundle\ShippingBundle\Form\Type\CalculatorChoiceType instance.
     */
    protected function getSylius_Form_Type_ShippingCalculatorChoiceService()
    {
        return $this->services['sylius.form.type.shipping_calculator_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\CalculatorChoiceType(array('flat_rate' => 'Flat rate per shipment', 'per_item_rate' => 'Flat rate per item', 'flexible_rate' => 'Flexible rate'));
    }

    /**
     * Gets the 'sylius.form.type.shipping_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryType A Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryType instance.
     */
    protected function getSylius_Form_Type_ShippingCategoryService()
    {
        return $this->services['sylius.form.type.shipping_category'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryType('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.shipping_category_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryEntityType A Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryEntityType instance.
     */
    protected function getSylius_Form_Type_ShippingCategoryChoiceService()
    {
        return $this->services['sylius.form.type.shipping_category_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingCategoryEntityType('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory');
    }

    /**
     * Gets the 'sylius.form.type.shipping_method' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\ShippingMethodType A Sylius\Bundle\CoreBundle\Form\Type\ShippingMethodType instance.
     */
    protected function getSylius_Form_Type_ShippingMethodService()
    {
        return $this->services['sylius.form.type.shipping_method'] = new \Sylius\Bundle\CoreBundle\Form\Type\ShippingMethodType('Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod', array(0 => 'sylius'), $this->get('sylius.shipping_calculator_registry'), $this->get('sylius.shipping_rule_checker_registry'));
    }

    /**
     * Gets the 'sylius.form.type.shipping_method_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodChoiceType A Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodChoiceType instance.
     */
    protected function getSylius_Form_Type_ShippingMethodChoiceService()
    {
        return $this->services['sylius.form.type.shipping_method_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodChoiceType($this->get('sylius.shipping_methods_resolver'), $this->get('sylius.shipping_calculator_registry'));
    }

    /**
     * Gets the 'sylius.form.type.shipping_rule_item_count_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Form\Type\Rule\ItemCountConfigurationType A Sylius\Bundle\ShippingBundle\Form\Type\Rule\ItemCountConfigurationType instance.
     */
    protected function getSylius_Form_Type_ShippingRuleItemCountConfigurationService()
    {
        return $this->services['sylius.form.type.shipping_rule_item_count_configuration'] = new \Sylius\Bundle\ShippingBundle\Form\Type\Rule\ItemCountConfigurationType(array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.tax_calculator_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxationBundle\Form\Type\CalculatorChoiceType A Sylius\Bundle\TaxationBundle\Form\Type\CalculatorChoiceType instance.
     */
    protected function getSylius_Form_Type_TaxCalculatorChoiceService()
    {
        return $this->services['sylius.form.type.tax_calculator_choice'] = new \Sylius\Bundle\TaxationBundle\Form\Type\CalculatorChoiceType(array('default' => 'default'));
    }

    /**
     * Gets the 'sylius.form.type.tax_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryType A Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryType instance.
     */
    protected function getSylius_Form_Type_TaxCategoryService()
    {
        return $this->services['sylius.form.type.tax_category'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryType('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.tax_category_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryEntityType A Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryEntityType instance.
     */
    protected function getSylius_Form_Type_TaxCategoryChoiceService()
    {
        return $this->services['sylius.form.type.tax_category_choice'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryEntityType('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory');
    }

    /**
     * Gets the 'sylius.form.type.tax_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\TaxRateType A Sylius\Bundle\CoreBundle\Form\Type\TaxRateType instance.
     */
    protected function getSylius_Form_Type_TaxRateService()
    {
        return $this->services['sylius.form.type.tax_rate'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxRateType('Sylius\\Bundle\\CoreBundle\\Model\\TaxRate', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.taxon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\TaxonType A Sylius\Bundle\CoreBundle\Form\Type\TaxonType instance.
     */
    protected function getSylius_Form_Type_TaxonService()
    {
        return $this->services['sylius.form.type.taxon'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxonType('Sylius\\Bundle\\CoreBundle\\Model\\Taxon', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.taxon_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonChoiceType A Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonChoiceType instance.
     */
    protected function getSylius_Form_Type_TaxonChoiceService()
    {
        return $this->services['sylius.form.type.taxon_choice'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonChoiceType($this->get('sylius.repository.taxon'));
    }

    /**
     * Gets the 'sylius.form.type.taxon_selection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonSelectionType A Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonSelectionType instance.
     */
    protected function getSylius_Form_Type_TaxonSelectionService()
    {
        return $this->services['sylius.form.type.taxon_selection'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonSelectionType($this->get('sylius.repository.taxonomy'));
    }

    /**
     * Gets the 'sylius.form.type.taxonomy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\TaxonomyType A Sylius\Bundle\CoreBundle\Form\Type\TaxonomyType instance.
     */
    protected function getSylius_Form_Type_TaxonomyService()
    {
        return $this->services['sylius.form.type.taxonomy'] = new \Sylius\Bundle\CoreBundle\Form\Type\TaxonomyType('Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.taxonomy_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonomyEntityChoiceType A Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonomyEntityChoiceType instance.
     */
    protected function getSylius_Form_Type_TaxonomyChoiceService()
    {
        return $this->services['sylius.form.type.taxonomy_choice'] = new \Sylius\Bundle\TaxonomiesBundle\Form\Type\TaxonomyEntityChoiceType('Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy');
    }

    /**
     * Gets the 'sylius.form.type.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\UserType A Sylius\Bundle\CoreBundle\Form\Type\UserType instance.
     */
    protected function getSylius_Form_Type_UserService()
    {
        return $this->services['sylius.form.type.user'] = new \Sylius\Bundle\CoreBundle\Form\Type\UserType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'sylius.form.type.user_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\Filter\UserFilterType A Sylius\Bundle\CoreBundle\Form\Type\Filter\UserFilterType instance.
     */
    protected function getSylius_Form_Type_UserFilterService()
    {
        return $this->services['sylius.form.type.user_filter'] = new \Sylius\Bundle\CoreBundle\Form\Type\Filter\UserFilterType();
    }

    /**
     * Gets the 'sylius.form.type.variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\VariantType A Sylius\Bundle\CoreBundle\Form\Type\VariantType instance.
     */
    protected function getSylius_Form_Type_VariantService()
    {
        return $this->services['sylius.form.type.variant'] = new \Sylius\Bundle\CoreBundle\Form\Type\VariantType('Sylius\\Bundle\\CoreBundle\\Model\\Variant', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.variant_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\VariantChoiceType A Sylius\Bundle\VariableProductBundle\Form\Type\VariantChoiceType instance.
     */
    protected function getSylius_Form_Type_VariantChoiceService()
    {
        return $this->services['sylius.form.type.variant_choice'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\VariantChoiceType();
    }

    /**
     * Gets the 'sylius.form.type.variant_match' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\VariantMatchType A Sylius\Bundle\VariableProductBundle\Form\Type\VariantMatchType instance.
     */
    protected function getSylius_Form_Type_VariantMatchService()
    {
        return $this->services['sylius.form.type.variant_match'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\VariantMatchType();
    }

    /**
     * Gets the 'sylius.form.type.variant_to_identifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Form\Type\VariantToIdentifierType A Sylius\Bundle\VariableProductBundle\Form\Type\VariantToIdentifierType instance.
     */
    protected function getSylius_Form_Type_VariantToIdentifierService()
    {
        return $this->services['sylius.form.type.variant_to_identifier'] = new \Sylius\Bundle\VariableProductBundle\Form\Type\VariantToIdentifierType($this->get('sylius.repository.variant'));
    }

    /**
     * Gets the 'sylius.form.type.zone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\ZoneType A Sylius\Bundle\AddressingBundle\Form\Type\ZoneType instance.
     */
    protected function getSylius_Form_Type_ZoneService()
    {
        return $this->services['sylius.form.type.zone'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneType('Sylius\\Bundle\\AddressingBundle\\Model\\Zone', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.zone_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\ZoneEntityChoiceType A Sylius\Bundle\AddressingBundle\Form\Type\ZoneEntityChoiceType instance.
     */
    protected function getSylius_Form_Type_ZoneChoiceService()
    {
        return $this->services['sylius.form.type.zone_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneEntityChoiceType('Sylius\\Bundle\\AddressingBundle\\Model\\Zone');
    }

    /**
     * Gets the 'sylius.form.type.zone_member_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCollectionType A Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCollectionType instance.
     */
    protected function getSylius_Form_Type_ZoneMemberCollectionService()
    {
        return $this->services['sylius.form.type.zone_member_collection'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCollectionType('Sylius\\Bundle\\AddressingBundle\\Model\\Zone');
    }

    /**
     * Gets the 'sylius.form.type.zone_member_country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCountryType A Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCountryType instance.
     */
    protected function getSylius_Form_Type_ZoneMemberCountryService()
    {
        return $this->services['sylius.form.type.zone_member_country'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberCountryType('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.zone_member_province' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberProvinceType A Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberProvinceType instance.
     */
    protected function getSylius_Form_Type_ZoneMemberProvinceService()
    {
        return $this->services['sylius.form.type.zone_member_province'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberProvinceType('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.form.type.zone_member_zone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberZoneType A Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberZoneType instance.
     */
    protected function getSylius_Form_Type_ZoneMemberZoneService()
    {
        return $this->services['sylius.form.type.zone_member_zone'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberZoneType('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone', array(0 => 'sylius'));
    }

    /**
     * Gets the 'sylius.generator.order_number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\OrderBundle\Generator\OrderNumberGenerator A Sylius\Bundle\OrderBundle\Generator\OrderNumberGenerator instance.
     */
    protected function getSylius_Generator_OrderNumberService()
    {
        return $this->services['sylius.generator.order_number'] = new \Sylius\Bundle\OrderBundle\Generator\OrderNumberGenerator($this->get('sylius.repository.order'));
    }

    /**
     * Gets the 'sylius.generator.promotion_coupon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Generator\CouponGenerator A Sylius\Bundle\PromotionsBundle\Generator\CouponGenerator instance.
     */
    protected function getSylius_Generator_PromotionCouponService()
    {
        return $this->services['sylius.generator.promotion_coupon'] = new \Sylius\Bundle\PromotionsBundle\Generator\CouponGenerator($this->get('sylius.repository.promotion_coupon'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'sylius.generator.variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Generator\VariantGenerator A Sylius\Bundle\VariableProductBundle\Generator\VariantGenerator instance.
     */
    protected function getSylius_Generator_VariantService()
    {
        return $this->services['sylius.generator.variant'] = new \Sylius\Bundle\VariableProductBundle\Generator\VariantGenerator($this->get('validator'), $this->get('sylius.repository.variant'));
    }

    /**
     * Gets the 'sylius.image_uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Uploader\ImageUploader A Sylius\Bundle\CoreBundle\Uploader\ImageUploader instance.
     */
    protected function getSylius_ImageUploaderService()
    {
        return $this->services['sylius.image_uploader'] = new \Sylius\Bundle\CoreBundle\Uploader\ImageUploader($this->get('knp_gaufrette.filesystem_map')->get('sylius_image'));
    }

    /**
     * Gets the 'sylius.installer.scenario' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Process\InstallerScenario A Sylius\Bundle\InstallerBundle\Process\InstallerScenario instance.
     */
    protected function getSylius_Installer_ScenarioService()
    {
        $this->services['sylius.installer.scenario'] = $instance = new \Sylius\Bundle\InstallerBundle\Process\InstallerScenario();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.installer.yaml_persister' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Persister\YamlPersister A Sylius\Bundle\InstallerBundle\Persister\YamlPersister instance.
     */
    protected function getSylius_Installer_YamlPersisterService()
    {
        return $this->services['sylius.installer.yaml_persister'] = new \Sylius\Bundle\InstallerBundle\Persister\YamlPersister('/var/www/lokisalle/app/config/parameters.yml');
    }

    /**
     * Gets the 'sylius.inventory_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InventoryBundle\EventListener\InventoryChangeListener A Sylius\Bundle\InventoryBundle\EventListener\InventoryChangeListener instance.
     */
    protected function getSylius_InventoryListenerService()
    {
        return $this->services['sylius.inventory_listener'] = new \Sylius\Bundle\InventoryBundle\EventListener\InventoryChangeListener($this->get('sylius.backorders_handler'));
    }

    /**
     * Gets the 'sylius.inventory_operator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InventoryBundle\Operator\InventoryOperator A Sylius\Bundle\InventoryBundle\Operator\InventoryOperator instance.
     */
    protected function getSylius_InventoryOperator_DefaultService()
    {
        return $this->services['sylius.inventory_operator.default'] = new \Sylius\Bundle\InventoryBundle\Operator\InventoryOperator($this->get('sylius.backorders_handler'), $this->get('sylius.availability_checker.default'));
    }

    /**
     * Gets the 'sylius.inventory_twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InventoryBundle\Twig\SyliusInventoryExtension A Sylius\Bundle\InventoryBundle\Twig\SyliusInventoryExtension instance.
     */
    protected function getSylius_InventoryTwigService()
    {
        return $this->services['sylius.inventory_twig'] = new \Sylius\Bundle\InventoryBundle\Twig\SyliusInventoryExtension($this->get('sylius.availability_checker.default'));
    }

    /**
     * Gets the 'sylius.inventory_unit_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InventoryBundle\Factory\InventoryUnitFactory A Sylius\Bundle\InventoryBundle\Factory\InventoryUnitFactory instance.
     */
    protected function getSylius_InventoryUnitFactoryService()
    {
        return $this->services['sylius.inventory_unit_factory'] = new \Sylius\Bundle\InventoryBundle\Factory\InventoryUnitFactory($this->get('sylius.repository.inventory_unit'));
    }

    /**
     * Gets the 'sylius.listener.frontend.address' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\EventListener\Account\AddressListener A Sylius\Bundle\WebBundle\EventListener\Account\AddressListener instance.
     */
    protected function getSylius_Listener_Frontend_AddressService()
    {
        return $this->services['sylius.listener.frontend.address'] = new \Sylius\Bundle\WebBundle\EventListener\Account\AddressListener($this->get('security.context'));
    }

    /**
     * Gets the 'sylius.listener.image_upload' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\ImageUploadListener A Sylius\Bundle\CoreBundle\EventListener\ImageUploadListener instance.
     */
    protected function getSylius_Listener_ImageUploadService()
    {
        return $this->services['sylius.listener.image_upload'] = new \Sylius\Bundle\CoreBundle\EventListener\ImageUploadListener($this->get('sylius.image_uploader'));
    }

    /**
     * Gets the 'sylius.listener.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\LocaleListener A Sylius\Bundle\CoreBundle\EventListener\LocaleListener instance.
     */
    protected function getSylius_Listener_LocaleService()
    {
        return $this->services['sylius.listener.locale'] = new \Sylius\Bundle\CoreBundle\EventListener\LocaleListener($this->get('sylius.settings.manager'));
    }

    /**
     * Gets the 'sylius.listener.order_confirmation_email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\OrderConfirmationEmailListener A Sylius\Bundle\CoreBundle\EventListener\OrderConfirmationEmailListener instance.
     */
    protected function getSylius_Listener_OrderConfirmationEmailService()
    {
        return $this->services['sylius.listener.order_confirmation_email'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderConfirmationEmailListener($this->get('sylius.mailer.order_confirmation'));
    }

    /**
     * Gets the 'sylius.listener.order_currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\OrderCurrencyListener A Sylius\Bundle\CoreBundle\EventListener\OrderCurrencyListener instance.
     */
    protected function getSylius_Listener_OrderCurrencyService()
    {
        return $this->services['sylius.listener.order_currency'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderCurrencyListener($this->get('sylius.currency_context'));
    }

    /**
     * Gets the 'sylius.listener.order_inventory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\OrderInventoryListener A Sylius\Bundle\CoreBundle\EventListener\OrderInventoryListener instance.
     */
    protected function getSylius_Listener_OrderInventoryService()
    {
        return $this->services['sylius.listener.order_inventory'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderInventoryListener($this->get('sylius.order_processing.inventory_handler'));
    }

    /**
     * Gets the 'sylius.listener.order_number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\OrderBundle\EventListener\OrderNumberListener A Sylius\Bundle\OrderBundle\EventListener\OrderNumberListener instance.
     */
    protected function getSylius_Listener_OrderNumberService()
    {
        return $this->services['sylius.listener.order_number'] = new \Sylius\Bundle\OrderBundle\EventListener\OrderNumberListener($this->get('sylius.generator.order_number'));
    }

    /**
     * Gets the 'sylius.listener.order_payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\OrderPaymentListener A Sylius\Bundle\CoreBundle\EventListener\OrderPaymentListener instance.
     */
    protected function getSylius_Listener_OrderPaymentService()
    {
        return $this->services['sylius.listener.order_payment'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderPaymentListener($this->get('sylius.order_processing.payment_processor'));
    }

    /**
     * Gets the 'sylius.listener.order_promotion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\OrderPromotionListener A Sylius\Bundle\CoreBundle\EventListener\OrderPromotionListener instance.
     */
    protected function getSylius_Listener_OrderPromotionService()
    {
        return $this->services['sylius.listener.order_promotion'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderPromotionListener($this->get('sylius.promotion_processor'), $this->get('session'), $this->get('translator.default'));
    }

    /**
     * Gets the 'sylius.listener.order_shipping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\OrderShippingListener A Sylius\Bundle\CoreBundle\EventListener\OrderShippingListener instance.
     */
    protected function getSylius_Listener_OrderShippingService()
    {
        return $this->services['sylius.listener.order_shipping'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderShippingListener($this->get('sylius.order_processing.shipment_factory'), $this->get('sylius.order_processing.shipping_processor'));
    }

    /**
     * Gets the 'sylius.listener.order_state' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\OrderStateListener A Sylius\Bundle\CoreBundle\EventListener\OrderStateListener instance.
     */
    protected function getSylius_Listener_OrderStateService()
    {
        return $this->services['sylius.listener.order_state'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderStateListener($this->get('sylius.order_processing.state_resolver'));
    }

    /**
     * Gets the 'sylius.listener.order_taxation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\OrderTaxationListener A Sylius\Bundle\CoreBundle\EventListener\OrderTaxationListener instance.
     */
    protected function getSylius_Listener_OrderTaxationService()
    {
        return $this->services['sylius.listener.order_taxation'] = new \Sylius\Bundle\CoreBundle\EventListener\OrderTaxationListener($this->get('sylius.order_processing.taxation_processor'));
    }

    /**
     * Gets the 'sylius.listener.restricted_zone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\RestrictedZoneListener A Sylius\Bundle\CoreBundle\EventListener\RestrictedZoneListener instance.
     */
    protected function getSylius_Listener_RestrictedZoneService()
    {
        return $this->services['sylius.listener.restricted_zone'] = new \Sylius\Bundle\CoreBundle\EventListener\RestrictedZoneListener($this->get('sylius.checker.restricted_zone'), $this->get('sylius.cart_provider.default'), $this->get('doctrine.orm.default_entity_manager'), $this->get('session'), $this->get('translator.default'));
    }

    /**
     * Gets the 'sylius.listener.user_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\EventListener\UserUpdateListener A Sylius\Bundle\CoreBundle\EventListener\UserUpdateListener instance.
     */
    protected function getSylius_Listener_UserUpdateService()
    {
        return $this->services['sylius.listener.user_update'] = new \Sylius\Bundle\CoreBundle\EventListener\UserUpdateListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'sylius.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Mailer\TwigSwiftMailer A Sylius\Bundle\CoreBundle\Mailer\TwigSwiftMailer instance.
     */
    protected function getSylius_MailerService()
    {
        return $this->services['sylius.mailer'] = new \Sylius\Bundle\CoreBundle\Mailer\TwigSwiftMailer($this->get('swiftmailer.mailer.default'), $this->get('twig'));
    }

    /**
     * Gets the 'sylius.mailer.order_confirmation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Mailer\OrderConfirmationMailer A Sylius\Bundle\CoreBundle\Mailer\OrderConfirmationMailer instance.
     */
    protected function getSylius_Mailer_OrderConfirmationService()
    {
        return $this->services['sylius.mailer.order_confirmation'] = new \Sylius\Bundle\CoreBundle\Mailer\OrderConfirmationMailer($this->get('sylius.mailer'), array('template' => 'SyliusWebBundle:Frontend/Email:orderConfirmation.html.twig', 'from_email' => array('webmaster@example.com' => 'webmaster')));
    }

    /**
     * Gets the 'sylius.menu.backend.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'sylius.menu.backend.main' service is requested while the 'request' scope is not active
     */
    protected function getSylius_Menu_Backend_MainService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.backend.main', 'request');
        }

        return $this->services['sylius.menu.backend.main'] = $this->scopedServices['request']['sylius.menu.backend.main'] = $this->get('sylius.menu_builder.backend')->createMainMenu($this->get('request'));
    }

    /**
     * Gets the 'sylius.menu.backend.sidebar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'sylius.menu.backend.sidebar' service is requested while the 'request' scope is not active
     */
    protected function getSylius_Menu_Backend_SidebarService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.backend.sidebar', 'request');
        }

        return $this->services['sylius.menu.backend.sidebar'] = $this->scopedServices['request']['sylius.menu.backend.sidebar'] = $this->get('sylius.menu_builder.backend')->createSidebarMenu($this->get('request'));
    }

    /**
     * Gets the 'sylius.menu.frontend.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'sylius.menu.frontend.account' service is requested while the 'request' scope is not active
     */
    protected function getSylius_Menu_Frontend_AccountService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.frontend.account', 'request');
        }

        return $this->services['sylius.menu.frontend.account'] = $this->scopedServices['request']['sylius.menu.frontend.account'] = $this->get('sylius.menu_builder.frontend')->createAccountMenu($this->get('request'));
    }

    /**
     * Gets the 'sylius.menu.frontend.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     */
    protected function getSylius_Menu_Frontend_CurrencyService()
    {
        return $this->services['sylius.menu.frontend.currency'] = $this->get('sylius.menu_builder.frontend')->createCurrencyMenu();
    }

    /**
     * Gets the 'sylius.menu.frontend.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'sylius.menu.frontend.main' service is requested while the 'request' scope is not active
     */
    protected function getSylius_Menu_Frontend_MainService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.frontend.main', 'request');
        }

        return $this->services['sylius.menu.frontend.main'] = $this->scopedServices['request']['sylius.menu.frontend.main'] = $this->get('sylius.menu_builder.frontend')->createMainMenu($this->get('request'));
    }

    /**
     * Gets the 'sylius.menu.frontend.social' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'sylius.menu.frontend.social' service is requested while the 'request' scope is not active
     */
    protected function getSylius_Menu_Frontend_SocialService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.frontend.social', 'request');
        }

        return $this->services['sylius.menu.frontend.social'] = $this->scopedServices['request']['sylius.menu.frontend.social'] = $this->get('sylius.menu_builder.frontend')->createSocialMenu($this->get('request'));
    }

    /**
     * Gets the 'sylius.menu.frontend.taxonomies' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'sylius.menu.frontend.taxonomies' service is requested while the 'request' scope is not active
     */
    protected function getSylius_Menu_Frontend_TaxonomiesService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sylius.menu.frontend.taxonomies', 'request');
        }

        return $this->services['sylius.menu.frontend.taxonomies'] = $this->scopedServices['request']['sylius.menu.frontend.taxonomies'] = $this->get('sylius.menu_builder.frontend')->createTaxonomiesMenu($this->get('request'));
    }

    /**
     * Gets the 'sylius.menu_builder.backend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\Menu\BackendMenuBuilder A Sylius\Bundle\WebBundle\Menu\BackendMenuBuilder instance.
     */
    protected function getSylius_MenuBuilder_BackendService()
    {
        return $this->services['sylius.menu_builder.backend'] = new \Sylius\Bundle\WebBundle\Menu\BackendMenuBuilder($this->get('knp_menu.factory'), $this->get('security.context'), $this->get('translator.default'));
    }

    /**
     * Gets the 'sylius.menu_builder.frontend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\WebBundle\Menu\FrontendMenuBuilder A Sylius\Bundle\WebBundle\Menu\FrontendMenuBuilder instance.
     */
    protected function getSylius_MenuBuilder_FrontendService()
    {
        $this->services['sylius.menu_builder.frontend'] = $instance = new \Sylius\Bundle\WebBundle\Menu\FrontendMenuBuilder($this->get('knp_menu.factory'), $this->get('security.context'), $this->get('translator.default'), $this->get('sylius.repository.exchange_rate'), $this->get('sylius.repository.taxonomy'), $this->get('sylius.cart_provider.default'), $this->get('sylius.twig.money'));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'sylius.oauth.user_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\OAuth\UserProvider A Sylius\Bundle\CoreBundle\OAuth\UserProvider instance.
     */
    protected function getSylius_Oauth_UserProviderService()
    {
        return $this->services['sylius.oauth.user_provider'] = new \Sylius\Bundle\CoreBundle\OAuth\UserProvider($this->get('fos_user.user_manager'), array('amazon' => 'amazonId', 'facebook' => 'facebookId', 'google' => 'googleId'));
    }

    /**
     * Gets the 'sylius.order_processing.inventory_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\OrderProcessing\InventoryHandler A Sylius\Bundle\CoreBundle\OrderProcessing\InventoryHandler instance.
     */
    protected function getSylius_OrderProcessing_InventoryHandlerService()
    {
        return $this->services['sylius.order_processing.inventory_handler'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\InventoryHandler($this->get('sylius.inventory_operator.default'), $this->get('sylius.inventory_unit_factory'));
    }

    /**
     * Gets the 'sylius.order_processing.payment_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\OrderProcessing\PaymentProcessor A Sylius\Bundle\CoreBundle\OrderProcessing\PaymentProcessor instance.
     */
    protected function getSylius_OrderProcessing_PaymentProcessorService()
    {
        return $this->services['sylius.order_processing.payment_processor'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\PaymentProcessor($this->get('sylius.repository.payment'));
    }

    /**
     * Gets the 'sylius.order_processing.shipment_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\OrderProcessing\ShipmentFactory A Sylius\Bundle\CoreBundle\OrderProcessing\ShipmentFactory instance.
     */
    protected function getSylius_OrderProcessing_ShipmentFactoryService()
    {
        return $this->services['sylius.order_processing.shipment_factory'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\ShipmentFactory($this->get('sylius.repository.shipment'));
    }

    /**
     * Gets the 'sylius.order_processing.shipping_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\OrderProcessing\ShippingChargesProcessor A Sylius\Bundle\CoreBundle\OrderProcessing\ShippingChargesProcessor instance.
     */
    protected function getSylius_OrderProcessing_ShippingProcessorService()
    {
        return $this->services['sylius.order_processing.shipping_processor'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\ShippingChargesProcessor($this->get('sylius.repository.adjustment'), $this->get('sylius.shipping_calculator'));
    }

    /**
     * Gets the 'sylius.order_processing.state_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\OrderProcessing\StateResolver A Sylius\Bundle\CoreBundle\OrderProcessing\StateResolver instance.
     */
    protected function getSylius_OrderProcessing_StateResolverService()
    {
        return $this->services['sylius.order_processing.state_resolver'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\StateResolver();
    }

    /**
     * Gets the 'sylius.order_processing.taxation_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\OrderProcessing\TaxationProcessor A Sylius\Bundle\CoreBundle\OrderProcessing\TaxationProcessor instance.
     */
    protected function getSylius_OrderProcessing_TaxationProcessorService()
    {
        return $this->services['sylius.order_processing.taxation_processor'] = new \Sylius\Bundle\CoreBundle\OrderProcessing\TaxationProcessor($this->get('sylius.repository.adjustment'), $this->get('sylius.tax_calculator'), $this->get('sylius.tax_rate_resolver'), $this->get('sylius.zone_matcher'), $this->get('sylius.settings.manager')->loadSettings('taxation'));
    }

    /**
     * Gets the 'sylius.payum.action.execute_same_request_with_payment_details' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Payum\Action\ExecuteSameRequestWithPaymentDetailsAction A Sylius\Bundle\PayumBundle\Payum\Action\ExecuteSameRequestWithPaymentDetailsAction instance.
     */
    protected function getSylius_Payum_Action_ExecuteSameRequestWithPaymentDetailsService()
    {
        return $this->services['sylius.payum.action.execute_same_request_with_payment_details'] = new \Sylius\Bundle\PayumBundle\Payum\Action\ExecuteSameRequestWithPaymentDetailsAction();
    }

    /**
     * Gets the 'sylius.payum.action.obtain_credit_card' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Payum\Action\ObtainCreditCardAction A Sylius\Bundle\PayumBundle\Payum\Action\ObtainCreditCardAction instance.
     */
    protected function getSylius_Payum_Action_ObtainCreditCardService()
    {
        $this->services['sylius.payum.action.obtain_credit_card'] = $instance = new \Sylius\Bundle\PayumBundle\Payum\Action\ObtainCreditCardAction($this->get('form.factory'), $this->get('templating'));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'sylius.payum.action.order_status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Payum\Action\OrderStatusAction A Sylius\Bundle\PayumBundle\Payum\Action\OrderStatusAction instance.
     */
    protected function getSylius_Payum_Action_OrderStatusService()
    {
        return $this->services['sylius.payum.action.order_status'] = new \Sylius\Bundle\PayumBundle\Payum\Action\OrderStatusAction();
    }

    /**
     * Gets the 'sylius.payum.be2bill.action.capture_order_using_credit_card' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Payum\Be2bill\Action\CaptureOrderUsingCreditCardAction A Sylius\Bundle\PayumBundle\Payum\Be2bill\Action\CaptureOrderUsingCreditCardAction instance.
     */
    protected function getSylius_Payum_Be2bill_Action_CaptureOrderUsingCreditCardService()
    {
        $this->services['sylius.payum.be2bill.action.capture_order_using_credit_card'] = $instance = new \Sylius\Bundle\PayumBundle\Payum\Be2bill\Action\CaptureOrderUsingCreditCardAction();

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'sylius.payum.checkout_step.purchase' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Checkout\Step\PurchaseStep A Sylius\Bundle\PayumBundle\Checkout\Step\PurchaseStep instance.
     */
    protected function getSylius_Payum_CheckoutStep_PurchaseService()
    {
        $this->services['sylius.payum.checkout_step.purchase'] = $instance = new \Sylius\Bundle\PayumBundle\Checkout\Step\PurchaseStep();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'sylius.payum.dummy.action.capture_order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Payum\Dummy\Action\CaptureOrderAction A Sylius\Bundle\PayumBundle\Payum\Dummy\Action\CaptureOrderAction instance.
     */
    protected function getSylius_Payum_Dummy_Action_CaptureOrderService()
    {
        return $this->services['sylius.payum.dummy.action.capture_order'] = new \Sylius\Bundle\PayumBundle\Payum\Dummy\Action\CaptureOrderAction();
    }

    /**
     * Gets the 'sylius.payum.dummy.action.order_status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Payum\Dummy\Action\OrderStatusAction A Sylius\Bundle\PayumBundle\Payum\Dummy\Action\OrderStatusAction instance.
     */
    protected function getSylius_Payum_Dummy_Action_OrderStatusService()
    {
        return $this->services['sylius.payum.dummy.action.order_status'] = new \Sylius\Bundle\PayumBundle\Payum\Dummy\Action\OrderStatusAction();
    }

    /**
     * Gets the 'sylius.payum.paypal.action.capture_order_using_express_checkout' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Payum\Paypal\Action\CaptureOrderUsingExpressCheckoutAction A Sylius\Bundle\PayumBundle\Payum\Paypal\Action\CaptureOrderUsingExpressCheckoutAction instance.
     */
    protected function getSylius_Payum_Paypal_Action_CaptureOrderUsingExpressCheckoutService()
    {
        return $this->services['sylius.payum.paypal.action.capture_order_using_express_checkout'] = new \Sylius\Bundle\PayumBundle\Payum\Paypal\Action\CaptureOrderUsingExpressCheckoutAction();
    }

    /**
     * Gets the 'sylius.payum.stripe.action.capture_order_using_credit_card' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PayumBundle\Payum\Stripe\Action\CaptureOrderUsingCreditCardAction A Sylius\Bundle\PayumBundle\Payum\Stripe\Action\CaptureOrderUsingCreditCardAction instance.
     */
    protected function getSylius_Payum_Stripe_Action_CaptureOrderUsingCreditCardService()
    {
        return $this->services['sylius.payum.stripe.action.capture_order_using_credit_card'] = new \Sylius\Bundle\PayumBundle\Payum\Stripe\Action\CaptureOrderUsingCreditCardAction();
    }

    /**
     * Gets the 'sylius.process.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilder A Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilder instance.
     */
    protected function getSylius_Process_BuilderService()
    {
        $this->services['sylius.process.builder'] = $instance = new \Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilder($this);

        $instance->registerStep('sylius_checkout_purchase', $this->get('sylius.payum.checkout_step.purchase'));
        $instance->registerStep('sylius_checkout_security', $this->get('sylius.checkout_step.security'));
        $instance->registerStep('sylius_checkout_addressing', $this->get('sylius.checkout_step.addressing'));
        $instance->registerStep('sylius_checkout_shipping', $this->get('sylius.checkout_step.shipping'));
        $instance->registerStep('sylius_checkout_payment', $this->get('sylius.checkout_step.payment'));
        $instance->registerStep('sylius_checkout_finalize', $this->get('sylius.checkout_step.finalize'));

        return $instance;
    }

    /**
     * Gets the 'sylius.process.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\FlowBundle\Process\Context\ProcessContext A Sylius\Bundle\FlowBundle\Process\Context\ProcessContext instance.
     */
    protected function getSylius_Process_ContextService()
    {
        return $this->services['sylius.process.context'] = new \Sylius\Bundle\FlowBundle\Process\Context\ProcessContext($this->get('sylius.process_storage.session'));
    }

    /**
     * Gets the 'sylius.process.coordinator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\FlowBundle\Process\Coordinator\Coordinator A Sylius\Bundle\FlowBundle\Process\Coordinator\Coordinator instance.
     */
    protected function getSylius_Process_CoordinatorService()
    {
        $this->services['sylius.process.coordinator'] = $instance = new \Sylius\Bundle\FlowBundle\Process\Coordinator\Coordinator($this->get('router'), $this->get('sylius.process.builder'), $this->get('sylius.process.context'));

        $instance->registerScenario('sylius_installer', $this->get('sylius.installer.scenario'));
        $instance->registerScenario('sylius_checkout', $this->get('sylius.checkout_scenario'));

        return $instance;
    }

    /**
     * Gets the 'sylius.process_storage.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\FlowBundle\Storage\SessionStorage A Sylius\Bundle\FlowBundle\Storage\SessionStorage instance.
     */
    protected function getSylius_ProcessStorage_SessionService()
    {
        return $this->services['sylius.process_storage.session'] = new \Sylius\Bundle\FlowBundle\Storage\SessionStorage($this->get('session'));
    }

    /**
     * Gets the 'sylius.process_storage.session.bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\FlowBundle\Storage\SessionFlowsBag A Sylius\Bundle\FlowBundle\Storage\SessionFlowsBag instance.
     */
    protected function getSylius_ProcessStorage_Session_BagService()
    {
        return $this->services['sylius.process_storage.session.bag'] = new \Sylius\Bundle\FlowBundle\Storage\SessionFlowsBag();
    }

    /**
     * Gets the 'sylius.promotion_action.fixed_discount' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Promotion\Action\FixedDiscountAction A Sylius\Bundle\CoreBundle\Promotion\Action\FixedDiscountAction instance.
     */
    protected function getSylius_PromotionAction_FixedDiscountService()
    {
        return $this->services['sylius.promotion_action.fixed_discount'] = new \Sylius\Bundle\CoreBundle\Promotion\Action\FixedDiscountAction($this->get('sylius.repository.adjustment'));
    }

    /**
     * Gets the 'sylius.promotion_action.percentage_discount' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Promotion\Action\PercentageDiscountAction A Sylius\Bundle\CoreBundle\Promotion\Action\PercentageDiscountAction instance.
     */
    protected function getSylius_PromotionAction_PercentageDiscountService()
    {
        return $this->services['sylius.promotion_action.percentage_discount'] = new \Sylius\Bundle\CoreBundle\Promotion\Action\PercentageDiscountAction($this->get('sylius.repository.adjustment'));
    }

    /**
     * Gets the 'sylius.promotion_applicator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Action\PromotionApplicator A Sylius\Bundle\PromotionsBundle\Action\PromotionApplicator instance.
     */
    protected function getSylius_PromotionApplicatorService()
    {
        return $this->services['sylius.promotion_applicator'] = new \Sylius\Bundle\PromotionsBundle\Action\PromotionApplicator($this->get('sylius.registry.promotion_action'));
    }

    /**
     * Gets the 'sylius.promotion_eligibility_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Checker\PromotionEligibilityChecker A Sylius\Bundle\PromotionsBundle\Checker\PromotionEligibilityChecker instance.
     */
    protected function getSylius_PromotionEligibilityCheckerService()
    {
        return $this->services['sylius.promotion_eligibility_checker'] = new \Sylius\Bundle\PromotionsBundle\Checker\PromotionEligibilityChecker($this->get('sylius.registry.promotion_rule_checker'), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'sylius.promotion_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Processor\PromotionProcessor A Sylius\Bundle\PromotionsBundle\Processor\PromotionProcessor instance.
     */
    protected function getSylius_PromotionProcessorService()
    {
        return $this->services['sylius.promotion_processor'] = new \Sylius\Bundle\PromotionsBundle\Processor\PromotionProcessor($this->get('sylius.repository.promotion'), $this->get('sylius.promotion_eligibility_checker'), $this->get('sylius.promotion_applicator'));
    }

    /**
     * Gets the 'sylius.promotion_rule_checker.item_count' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Checker\ItemCountRuleChecker A Sylius\Bundle\PromotionsBundle\Checker\ItemCountRuleChecker instance.
     */
    protected function getSylius_PromotionRuleChecker_ItemCountService()
    {
        return $this->services['sylius.promotion_rule_checker.item_count'] = new \Sylius\Bundle\PromotionsBundle\Checker\ItemCountRuleChecker();
    }

    /**
     * Gets the 'sylius.promotion_rule_checker.item_total' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Checker\ItemTotalRuleChecker A Sylius\Bundle\PromotionsBundle\Checker\ItemTotalRuleChecker instance.
     */
    protected function getSylius_PromotionRuleChecker_ItemTotalService()
    {
        return $this->services['sylius.promotion_rule_checker.item_total'] = new \Sylius\Bundle\PromotionsBundle\Checker\ItemTotalRuleChecker();
    }

    /**
     * Gets the 'sylius.registry.promotion_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Action\Registry\PromotionActionRegistry A Sylius\Bundle\PromotionsBundle\Action\Registry\PromotionActionRegistry instance.
     */
    protected function getSylius_Registry_PromotionActionService()
    {
        $this->services['sylius.registry.promotion_action'] = $instance = new \Sylius\Bundle\PromotionsBundle\Action\Registry\PromotionActionRegistry();

        $instance->registerAction('fixed_discount', $this->get('sylius.promotion_action.fixed_discount'));
        $instance->registerAction('percentage_discount', $this->get('sylius.promotion_action.percentage_discount'));

        return $instance;
    }

    /**
     * Gets the 'sylius.registry.promotion_rule_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Checker\Registry\RuleCheckerRegistry A Sylius\Bundle\PromotionsBundle\Checker\Registry\RuleCheckerRegistry instance.
     */
    protected function getSylius_Registry_PromotionRuleCheckerService()
    {
        $this->services['sylius.registry.promotion_rule_checker'] = $instance = new \Sylius\Bundle\PromotionsBundle\Checker\Registry\RuleCheckerRegistry();

        $instance->registerChecker('item_total', $this->get('sylius.promotion_rule_checker.item_total'));
        $instance->registerChecker('item_count', $this->get('sylius.promotion_rule_checker.item_count'));

        return $instance;
    }

    /**
     * Gets the 'sylius.repository.address' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_AddressService()
    {
        return $this->services['sylius.repository.address'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\Address'));
    }

    /**
     * Gets the 'sylius.repository.adjustment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_AdjustmentService()
    {
        return $this->services['sylius.repository.adjustment'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\OrderBundle\\Model\\Adjustment'));
    }

    /**
     * Gets the 'sylius.repository.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_CountryService()
    {
        return $this->services['sylius.repository.country'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\Country'));
    }

    /**
     * Gets the 'sylius.repository.credit_card' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_CreditCardService()
    {
        return $this->services['sylius.repository.credit_card'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard'));
    }

    /**
     * Gets the 'sylius.repository.exchange_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ExchangeRateService()
    {
        return $this->services['sylius.repository.exchange_rate'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate'));
    }

    /**
     * Gets the 'sylius.repository.group' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_GroupService()
    {
        return $this->services['sylius.repository.group'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Group'));
    }

    /**
     * Gets the 'sylius.repository.inventory_unit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_InventoryUnitService()
    {
        return $this->services['sylius.repository.inventory_unit'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit'));
    }

    /**
     * Gets the 'sylius.repository.option' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_OptionService()
    {
        return $this->services['sylius.repository.option'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\VariableProductBundle\\Model\\Option'));
    }

    /**
     * Gets the 'sylius.repository.option_value' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_OptionValueService()
    {
        return $this->services['sylius.repository.option_value'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue'));
    }

    /**
     * Gets the 'sylius.repository.order' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Repository\OrderRepository A Sylius\Bundle\CoreBundle\Repository\OrderRepository instance.
     */
    protected function getSylius_Repository_OrderService()
    {
        return $this->services['sylius.repository.order'] = new \Sylius\Bundle\CoreBundle\Repository\OrderRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Order'));
    }

    /**
     * Gets the 'sylius.repository.order_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_OrderItemService()
    {
        return $this->services['sylius.repository.order_item'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\OrderItem'));
    }

    /**
     * Gets the 'sylius.repository.parameter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ParameterService()
    {
        return $this->services['sylius.repository.parameter'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\SettingsBundle\\Model\\Parameter'));
    }

    /**
     * Gets the 'sylius.repository.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_PaymentService()
    {
        return $this->services['sylius.repository.payment'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Model\\Payment'));
    }

    /**
     * Gets the 'sylius.repository.payment_method' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_PaymentMethodService()
    {
        return $this->services['sylius.repository.payment_method'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod'));
    }

    /**
     * Gets the 'sylius.repository.payment_security_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_PaymentSecurityTokenService()
    {
        return $this->services['sylius.repository.payment_security_token'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken'));
    }

    /**
     * Gets the 'sylius.repository.product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Repository\ProductRepository A Sylius\Bundle\CoreBundle\Repository\ProductRepository instance.
     */
    protected function getSylius_Repository_ProductService()
    {
        return $this->services['sylius.repository.product'] = new \Sylius\Bundle\CoreBundle\Repository\ProductRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Product'));
    }

    /**
     * Gets the 'sylius.repository.product_property' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ProductPropertyService()
    {
        return $this->services['sylius.repository.product_property'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty'));
    }

    /**
     * Gets the 'sylius.repository.promotion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\PromotionsBundle\Doctrine\ORM\PromotionRepository A Sylius\Bundle\PromotionsBundle\Doctrine\ORM\PromotionRepository instance.
     */
    protected function getSylius_Repository_PromotionService()
    {
        return $this->services['sylius.repository.promotion'] = new \Sylius\Bundle\PromotionsBundle\Doctrine\ORM\PromotionRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion'));
    }

    /**
     * Gets the 'sylius.repository.promotion_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_PromotionActionService()
    {
        return $this->services['sylius.repository.promotion_action'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Model\\Action'));
    }

    /**
     * Gets the 'sylius.repository.promotion_coupon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_PromotionCouponService()
    {
        return $this->services['sylius.repository.promotion_coupon'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon'));
    }

    /**
     * Gets the 'sylius.repository.promotion_rule' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_PromotionRuleService()
    {
        return $this->services['sylius.repository.promotion_rule'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\PromotionsBundle\\Model\\Rule'));
    }

    /**
     * Gets the 'sylius.repository.property' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_PropertyService()
    {
        return $this->services['sylius.repository.property'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ProductBundle\\Model\\Property'));
    }

    /**
     * Gets the 'sylius.repository.prototype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_PrototypeService()
    {
        return $this->services['sylius.repository.prototype'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype'));
    }

    /**
     * Gets the 'sylius.repository.province' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ProvinceService()
    {
        return $this->services['sylius.repository.province'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\Province'));
    }

    /**
     * Gets the 'sylius.repository.shipment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ShipmentService()
    {
        return $this->services['sylius.repository.shipment'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Shipment'));
    }

    /**
     * Gets the 'sylius.repository.shipment_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ShipmentItemService()
    {
        return $this->services['sylius.repository.shipment_item'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit'));
    }

    /**
     * Gets the 'sylius.repository.shipping_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ShippingCategoryService()
    {
        return $this->services['sylius.repository.shipping_category'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory'));
    }

    /**
     * Gets the 'sylius.repository.shipping_method' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ShippingMethodService()
    {
        return $this->services['sylius.repository.shipping_method'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod'));
    }

    /**
     * Gets the 'sylius.repository.shipping_method_rule' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ShippingMethodRuleService()
    {
        return $this->services['sylius.repository.shipping_method_rule'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\ShippingBundle\\Model\\Rule'));
    }

    /**
     * Gets the 'sylius.repository.tax_category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_TaxCategoryService()
    {
        return $this->services['sylius.repository.tax_category'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory'));
    }

    /**
     * Gets the 'sylius.repository.tax_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_TaxRateService()
    {
        return $this->services['sylius.repository.tax_rate'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\TaxRate'));
    }

    /**
     * Gets the 'sylius.repository.taxon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_TaxonService()
    {
        return $this->services['sylius.repository.taxon'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Taxon'));
    }

    /**
     * Gets the 'sylius.repository.taxonomy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxonomiesBundle\Doctrine\ORM\TaxonomyRepository A Sylius\Bundle\TaxonomiesBundle\Doctrine\ORM\TaxonomyRepository instance.
     */
    protected function getSylius_Repository_TaxonomyService()
    {
        return $this->services['sylius.repository.taxonomy'] = new \Sylius\Bundle\TaxonomiesBundle\Doctrine\ORM\TaxonomyRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy'));
    }

    /**
     * Gets the 'sylius.repository.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Repository\UserRepository A Sylius\Bundle\CoreBundle\Repository\UserRepository instance.
     */
    protected function getSylius_Repository_UserService()
    {
        return $this->services['sylius.repository.user'] = new \Sylius\Bundle\CoreBundle\Repository\UserRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\User'));
    }

    /**
     * Gets the 'sylius.repository.variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_VariantService()
    {
        return $this->services['sylius.repository.variant'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\CoreBundle\\Model\\Variant'));
    }

    /**
     * Gets the 'sylius.repository.zone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ZoneService()
    {
        return $this->services['sylius.repository.zone'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\Zone'));
    }

    /**
     * Gets the 'sylius.repository.zone_member' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ZoneMemberService()
    {
        return $this->services['sylius.repository.zone_member'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember'));
    }

    /**
     * Gets the 'sylius.repository.zone_member_country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ZoneMemberCountryService()
    {
        return $this->services['sylius.repository.zone_member_country'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry'));
    }

    /**
     * Gets the 'sylius.repository.zone_member_province' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ZoneMemberProvinceService()
    {
        return $this->services['sylius.repository.zone_member_province'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince'));
    }

    /**
     * Gets the 'sylius.repository.zone_member_zone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository A Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository instance.
     */
    protected function getSylius_Repository_ZoneMemberZoneService()
    {
        return $this->services['sylius.repository.zone_member_zone'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('doctrine.orm.default_entity_manager')->getClassMetadata('Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone'));
    }

    /**
     * Gets the 'sylius.requirements' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\InstallerBundle\Requirement\SyliusRequirements A Sylius\Bundle\InstallerBundle\Requirement\SyliusRequirements instance.
     */
    protected function getSylius_RequirementsService()
    {
        $a = $this->get('translator.default');

        return $this->services['sylius.requirements'] = new \Sylius\Bundle\InstallerBundle\Requirement\SyliusRequirements(array(0 => new \Sylius\Bundle\InstallerBundle\Requirement\SettingsRequirements($a), 1 => new \Sylius\Bundle\InstallerBundle\Requirement\ExtensionsRequirements($a), 2 => new \Sylius\Bundle\InstallerBundle\Requirement\FilesystemRequirements($a, '/var/www/lokisalle/app')));
    }

    /**
     * Gets the 'sylius.settings.form_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\SettingsBundle\Form\Factory\SettingsFormFactory A Sylius\Bundle\SettingsBundle\Form\Factory\SettingsFormFactory instance.
     */
    protected function getSylius_Settings_FormFactoryService()
    {
        return $this->services['sylius.settings.form_factory'] = new \Sylius\Bundle\SettingsBundle\Form\Factory\SettingsFormFactory($this->get('sylius.settings.schema_registry'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sylius.settings.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\SettingsBundle\Manager\SettingsManager A Sylius\Bundle\SettingsBundle\Manager\SettingsManager instance.
     */
    protected function getSylius_Settings_ManagerService()
    {
        return $this->services['sylius.settings.manager'] = new \Sylius\Bundle\SettingsBundle\Manager\SettingsManager($this->get('sylius.settings.schema_registry'), $this->get('doctrine.orm.default_entity_manager'), $this->get('sylius.repository.parameter'), $this->get('liip_doctrine_cache.ns.sylius_settings'));
    }

    /**
     * Gets the 'sylius.settings.schema_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\SettingsBundle\Schema\SchemaRegistry A Sylius\Bundle\SettingsBundle\Schema\SchemaRegistry instance.
     */
    protected function getSylius_Settings_SchemaRegistryService()
    {
        $this->services['sylius.settings.schema_registry'] = $instance = new \Sylius\Bundle\SettingsBundle\Schema\SchemaRegistry();

        $instance->registerSchema('general', $this->get('sylius.settings_schema.general'));
        $instance->registerSchema('taxation', $this->get('sylius.settings_schema.taxation'));

        return $instance;
    }

    /**
     * Gets the 'sylius.settings.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\SettingsBundle\Twig\SyliusSettingsExtension A Sylius\Bundle\SettingsBundle\Twig\SyliusSettingsExtension instance.
     */
    protected function getSylius_Settings_TwigService()
    {
        return $this->services['sylius.settings.twig'] = new \Sylius\Bundle\SettingsBundle\Twig\SyliusSettingsExtension($this->get('sylius.settings.manager'));
    }

    /**
     * Gets the 'sylius.settings_schema.general' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Settings\GeneralSettingsSchema A Sylius\Bundle\CoreBundle\Settings\GeneralSettingsSchema instance.
     */
    protected function getSylius_SettingsSchema_GeneralService()
    {
        return $this->services['sylius.settings_schema.general'] = new \Sylius\Bundle\CoreBundle\Settings\GeneralSettingsSchema(array('currency' => 'EUR', 'locale' => 'en'));
    }

    /**
     * Gets the 'sylius.settings_schema.taxation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Settings\TaxationSettingsSchema A Sylius\Bundle\CoreBundle\Settings\TaxationSettingsSchema instance.
     */
    protected function getSylius_SettingsSchema_TaxationService()
    {
        return $this->services['sylius.settings_schema.taxation'] = new \Sylius\Bundle\CoreBundle\Settings\TaxationSettingsSchema($this->get('sylius.repository.zone'));
    }

    /**
     * Gets the 'sylius.shipping_calculator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Calculator\DelegatingCalculator A Sylius\Bundle\ShippingBundle\Calculator\DelegatingCalculator instance.
     */
    protected function getSylius_ShippingCalculatorService()
    {
        return $this->services['sylius.shipping_calculator'] = new \Sylius\Bundle\ShippingBundle\Calculator\DelegatingCalculator($this->get('sylius.shipping_calculator_registry'));
    }

    /**
     * Gets the 'sylius.shipping_calculator.flexible_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Calculator\FlexibleRateCalculator A Sylius\Bundle\ShippingBundle\Calculator\FlexibleRateCalculator instance.
     */
    protected function getSylius_ShippingCalculator_FlexibleRateService()
    {
        return $this->services['sylius.shipping_calculator.flexible_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\FlexibleRateCalculator();
    }

    /**
     * Gets the 'sylius.shipping_calculator.per_item_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Calculator\PerItemRateCalculator A Sylius\Bundle\ShippingBundle\Calculator\PerItemRateCalculator instance.
     */
    protected function getSylius_ShippingCalculator_PerItemRateService()
    {
        return $this->services['sylius.shipping_calculator.per_item_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\PerItemRateCalculator();
    }

    /**
     * Gets the 'sylius.shipping_calculator_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Calculator\Registry\CalculatorRegistry A Sylius\Bundle\ShippingBundle\Calculator\Registry\CalculatorRegistry instance.
     */
    protected function getSylius_ShippingCalculatorRegistryService()
    {
        $this->services['sylius.shipping_calculator_registry'] = $instance = new \Sylius\Bundle\ShippingBundle\Calculator\Registry\CalculatorRegistry();

        $instance->registerCalculator('flat_rate', $this->get('sylius.shipping_shipping_calculator.flat_rate'));
        $instance->registerCalculator('per_item_rate', $this->get('sylius.shipping_calculator.per_item_rate'));
        $instance->registerCalculator('flexible_rate', $this->get('sylius.shipping_calculator.flexible_rate'));

        return $instance;
    }

    /**
     * Gets the 'sylius.shipping_eligibility_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Checker\ShippingMethodEligibilityChecker A Sylius\Bundle\ShippingBundle\Checker\ShippingMethodEligibilityChecker instance.
     */
    protected function getSylius_ShippingEligibilityCheckerService()
    {
        return $this->services['sylius.shipping_eligibility_checker'] = new \Sylius\Bundle\ShippingBundle\Checker\ShippingMethodEligibilityChecker($this->get('sylius.shipping_rule_checker_registry'));
    }

    /**
     * Gets the 'sylius.shipping_methods_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Resolver\MethodsResolver A Sylius\Bundle\ShippingBundle\Resolver\MethodsResolver instance.
     */
    protected function getSylius_ShippingMethodsResolverService()
    {
        return $this->services['sylius.shipping_methods_resolver'] = new \Sylius\Bundle\ShippingBundle\Resolver\MethodsResolver($this->get('sylius.repository.shipping_method'), $this->get('sylius.shipping_eligibility_checker'));
    }

    /**
     * Gets the 'sylius.shipping_rule_checker.item_count' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Checker\ItemCountRuleChecker A Sylius\Bundle\ShippingBundle\Checker\ItemCountRuleChecker instance.
     */
    protected function getSylius_ShippingRuleChecker_ItemCountService()
    {
        return $this->services['sylius.shipping_rule_checker.item_count'] = new \Sylius\Bundle\ShippingBundle\Checker\ItemCountRuleChecker();
    }

    /**
     * Gets the 'sylius.shipping_rule_checker_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Checker\Registry\RuleCheckerRegistry A Sylius\Bundle\ShippingBundle\Checker\Registry\RuleCheckerRegistry instance.
     */
    protected function getSylius_ShippingRuleCheckerRegistryService()
    {
        $this->services['sylius.shipping_rule_checker_registry'] = $instance = new \Sylius\Bundle\ShippingBundle\Checker\Registry\RuleCheckerRegistry();

        $instance->registerChecker('item_count', $this->get('sylius.shipping_rule_checker.item_count'));

        return $instance;
    }

    /**
     * Gets the 'sylius.shipping_shipping_calculator.flat_rate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ShippingBundle\Calculator\FlatRateCalculator A Sylius\Bundle\ShippingBundle\Calculator\FlatRateCalculator instance.
     */
    protected function getSylius_ShippingShippingCalculator_FlatRateService()
    {
        return $this->services['sylius.shipping_shipping_calculator.flat_rate'] = new \Sylius\Bundle\ShippingBundle\Calculator\FlatRateCalculator();
    }

    /**
     * Gets the 'sylius.tax_calculator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxationBundle\Calculator\DelegatingCalculator A Sylius\Bundle\TaxationBundle\Calculator\DelegatingCalculator instance.
     */
    protected function getSylius_TaxCalculatorService()
    {
        $this->services['sylius.tax_calculator'] = $instance = new \Sylius\Bundle\TaxationBundle\Calculator\DelegatingCalculator();

        $instance->registerCalculator('default', $this->get('sylius.tax_calculator.default'));

        return $instance;
    }

    /**
     * Gets the 'sylius.tax_calculator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxationBundle\Calculator\DefaultCalculator A Sylius\Bundle\TaxationBundle\Calculator\DefaultCalculator instance.
     */
    protected function getSylius_TaxCalculator_DefaultService()
    {
        return $this->services['sylius.tax_calculator.default'] = new \Sylius\Bundle\TaxationBundle\Calculator\DefaultCalculator();
    }

    /**
     * Gets the 'sylius.tax_rate_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\TaxationBundle\Resolver\TaxRateResolver A Sylius\Bundle\TaxationBundle\Resolver\TaxRateResolver instance.
     */
    protected function getSylius_TaxRateResolverService()
    {
        return $this->services['sylius.tax_rate_resolver'] = new \Sylius\Bundle\TaxationBundle\Resolver\TaxRateResolver($this->get('sylius.repository.tax_rate'));
    }

    /**
     * Gets the 'sylius.twig.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\MoneyBundle\Twig\SyliusMoneyExtension A Sylius\Bundle\MoneyBundle\Twig\SyliusMoneyExtension instance.
     */
    protected function getSylius_Twig_MoneyService()
    {
        return $this->services['sylius.twig.money'] = new \Sylius\Bundle\MoneyBundle\Twig\SyliusMoneyExtension($this->get('sylius.currency_context'), $this->get('sylius.currency_converter'), 'en');
    }

    /**
     * Gets the 'sylius.twig.restricted_zone_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Twig\SyliusRestrictedZoneExtension A Sylius\Bundle\CoreBundle\Twig\SyliusRestrictedZoneExtension instance.
     */
    protected function getSylius_Twig_RestrictedZoneExtensionService()
    {
        return $this->services['sylius.twig.restricted_zone_extension'] = new \Sylius\Bundle\CoreBundle\Twig\SyliusRestrictedZoneExtension($this->get('sylius.checker.restricted_zone'));
    }

    /**
     * Gets the 'sylius.twig.text_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance.
     */
    protected function getSylius_Twig_TextExtensionService()
    {
        return $this->services['sylius.twig.text_extension'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'sylius.user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\CoreBundle\Form\Type\RegistrationFormType A Sylius\Bundle\CoreBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getSylius_User_Registration_Form_TypeService()
    {
        return $this->services['sylius.user.registration.form.type'] = new \Sylius\Bundle\CoreBundle\Form\Type\RegistrationFormType('Sylius\\Bundle\\CoreBundle\\Model\\User');
    }

    /**
     * Gets the 'sylius.validator.product.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ProductBundle\Validator\ProductUniqueValidator A Sylius\Bundle\ProductBundle\Validator\ProductUniqueValidator instance.
     */
    protected function getSylius_Validator_Product_UniqueService()
    {
        return $this->services['sylius.validator.product.unique'] = new \Sylius\Bundle\ProductBundle\Validator\ProductUniqueValidator($this->get('sylius.repository.product'));
    }

    /**
     * Gets the 'sylius.validator.variant.combination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Validator\VariantCombinationValidator A Sylius\Bundle\VariableProductBundle\Validator\VariantCombinationValidator instance.
     */
    protected function getSylius_Validator_Variant_CombinationService()
    {
        return $this->services['sylius.validator.variant.combination'] = new \Sylius\Bundle\VariableProductBundle\Validator\VariantCombinationValidator();
    }

    /**
     * Gets the 'sylius.validator.variant.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\VariableProductBundle\Validator\VariantUniqueValidator A Sylius\Bundle\VariableProductBundle\Validator\VariantUniqueValidator instance.
     */
    protected function getSylius_Validator_Variant_UniqueService()
    {
        return $this->services['sylius.validator.variant.unique'] = new \Sylius\Bundle\VariableProductBundle\Validator\VariantUniqueValidator($this->get('sylius.repository.variant'));
    }

    /**
     * Gets the 'sylius.zone_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\AddressingBundle\Matcher\ZoneMatcher A Sylius\Bundle\AddressingBundle\Matcher\ZoneMatcher instance.
     */
    protected function getSylius_ZoneMatcherService()
    {
        return $this->services['sylius.zone_matcher'] = new \Sylius\Bundle\AddressingBundle\Matcher\ZoneMatcher($this->get('sylius.repository.zone'));
    }

    /**
     * Gets the 'sylius_resource.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sylius\Bundle\ResourceBundle\Twig\SyliusResourceExtension A Sylius\Bundle\ResourceBundle\Twig\SyliusResourceExtension instance.
     */
    protected function getSyliusResource_TwigService()
    {
        return $this->services['sylius_resource.twig'] = new \Sylius\Bundle\ResourceBundle\Twig\SyliusResourceExtension($this, 'SyliusResourceBundle:Twig:paginate.html.twig', 'SyliusResourceBundle:Twig:sorting.html.twig');
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));

        return $instance;
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     * 
     * @throws InactiveScopeException when the 'templating.helper.assets' service is requested while the 'request' scope is not active
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/var/www/lokisalle/app', 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));

        $instance->registerListener('administration', '/administration/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader A JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => '/var/www/lokisalle/app/cache/dev/translations', 'debug' => true));

        $instance->setFallbackLocales(array(0 => 'en'));
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ar.xlf', 'ar', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.el.xlf', 'el', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.gl.xlf', 'gl', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ja.xlf', 'ja', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ua.xlf', 'ua', 'security');
        $instance->addResource('xliff', '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/translations/messages.de.xliff', 'de', 'messages');
        $instance->addResource('xliff', '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/translations/messages.en.xliff', 'en', 'messages');
        $instance->addResource('xliff', '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/translations/messages.es.xliff', 'es', 'messages');
        $instance->addResource('xliff', '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/translations/messages.hr.xliff', 'hr', 'messages');
        $instance->addResource('xliff', '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/translations/requirements.de.xliff', 'de', 'requirements');
        $instance->addResource('xliff', '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/translations/requirements.en.xliff', 'en', 'requirements');
        $instance->addResource('xliff', '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/translations/requirements.es.xliff', 'es', 'requirements');
        $instance->addResource('xliff', '/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/translations/requirements.hr.xliff', 'hr', 'requirements');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/messages.ja.xlf', 'ja', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/translations/flashes.de.yml', 'de', 'flashes');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/translations/flashes.en.yml', 'en', 'flashes');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/translations/flashes.es.yml', 'es', 'flashes');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/translations/flashes.fr.yml', 'fr', 'flashes');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/translations/flashes.hr.yml', 'hr', 'flashes');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/translations/flashes.ja.yml', 'ja', 'flashes');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/translations/flashes.nl.yml', 'nl', 'flashes');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/translations/flashes.pl.yml', 'pl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/translations/flashes.de.xlf', 'de', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/translations/flashes.en.xlf', 'en', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/translations/flashes.es.xlf', 'es', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/translations/flashes.hr.xlf', 'hr', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/translations/flashes.ja.xlf', 'ja', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/translations/flashes.pl.xlf', 'pl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/translations/flashes.ru.xlf', 'ru', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.it.yml', 'it', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ja.yml', 'ja', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.es.yml', 'es', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.hr.yml', 'hr', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.nl.yml', 'nl', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.ru.yml', 'ru', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/messages.it.xlf', 'it', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/flashes.de.xlf', 'de', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/flashes.en.xlf', 'en', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/flashes.es.xlf', 'es', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/flashes.hr.xlf', 'hr', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/flashes.nl.xlf', 'nl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/flashes.pl.xlf', 'pl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.fa_IR.xlf', 'fa_IR', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.it.xlf', 'it', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/FlowBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', '/var/www/lokisalle/src/Sylius/Bundle/FlowBundle/Resources/translations/messages.hr.yml', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.en.xlf', 'en', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.es.xlf', 'es', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.hr.xlf', 'hr', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.it.xlf', 'it', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.ja.xlf', 'ja', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.nl.xlf', 'nl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.pl.xlf', 'pl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.ru.xlf', 'ru', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/flashes.sl.xlf', 'sl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.it.xlf', 'it', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ja.xlf', 'ja', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.sl.xlf', 'sl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.de.xlf', 'de', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.en.xlf', 'en', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.es.xlf', 'es', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.hr.xlf', 'hr', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.it.xlf', 'it', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.ja.xlf', 'ja', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.nl.xlf', 'nl', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.pl.xlf', 'pl', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.ru.xlf', 'ru', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.sr_Cyrl.xlf', 'sr_Cyrl', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.sr_Latn.xlf', 'sr_Latn', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.de.xlf', 'de', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.en.xlf', 'en', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.hr.xlf', 'hr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.it.xlf', 'it', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.ja.xlf', 'ja', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.nl.xlf', 'nl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.pl.xlf', 'pl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.ru.xlf', 'ru', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.sr_Cyrl.xlf', 'sr_Cyrl', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.sr_Latn.xlf', 'sr_Latn', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/menu.fr.xlf', 'fr', 'menu');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.de.xlf', 'de', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.en.xlf', 'en', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.es.xlf', 'es', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.fr.xlf', 'fr', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.hr.xlf', 'hr', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.ja.xlf', 'ja', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.nl.xlf', 'nl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.pl.xlf', 'pl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.ru.xlf', 'ru', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.sr_Cyrl.xlf', 'sr_Cyrl', 'flashes');
        $instance->addResource('xlf', '/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/translations/flashes.sr_Latn.xlf', 'sr_Latn', 'flashes');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.de.yml', 'de', 'HWIOAuthBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.en.yml', 'en', 'HWIOAuthBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.es.yml', 'es', 'HWIOAuthBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.fr.yml', 'fr', 'HWIOAuthBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.nl.yml', 'nl', 'HWIOAuthBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.pl.yml', 'pl', 'HWIOAuthBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.ru.yml', 'ru', 'HWIOAuthBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ar.yml', 'ar', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fa.yml', 'fa', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.he.yml', 'he', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.id.yml', 'id', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lt.yml', 'lt', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nb.yml', 'nb', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.vi.yml', 'vi', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fa.yml', 'fa', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lt.yml', 'lt', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nb.yml', 'nb', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ar.xliff', 'ar', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.az.xliff', 'az', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ca.xliff', 'ca', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.da.xliff', 'da', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.de.xliff', 'de', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.en.xliff', 'en', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.es.xliff', 'es', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.fr.xliff', 'fr', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.it.xliff', 'it', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.nl.xliff', 'nl', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.pl.xliff', 'pl', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.pt.xliff', 'pt', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ru.xliff', 'ru', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sr_Cyrl.xliff', 'sr_Cyrl', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sr_Latn.xliff', 'sr_Latn', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.tr.xliff', 'tr', 'pagerfanta');
        $instance->addResource('xliff', '/var/www/lokisalle/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.zh_CN.xliff', 'zh_CN', 'pagerfanta');
        $instance->addResource('yml', '/var/www/lokisalle/app/Resources/translations/FOSUserBundle.en.yml', 'en', 'FOSUserBundle');

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape_service' => NULL, 'autoescape_service_method' => NULL, 'cache' => '/var/www/lokisalle/app/cache/dev/twig', 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension($this->get('sylius.twig.money'));
        $instance->addExtension($this->get('sylius.settings.twig'));
        $instance->addExtension($this->get('sylius.cart_twig'));
        $instance->addExtension($this->get('sylius.inventory_twig'));
        $instance->addExtension($this->get('sylius.twig.restricted_zone_extension'));
        $instance->addExtension($this->get('sylius.twig.text_extension'));
        $instance->addExtension($this->get('sylius_resource.twig'));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(0 => 'SyliusWebBundle'), $this->get('assetic.value_supplier.default', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, '/var/www/lokisalle/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'SyliusWebBundle::forms.html.twig', 2 => 'LiipImagineBundle:Form:form_div_layout.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension($this->get('liip_imagine.cache.manager')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension(new \HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension($this->get('hwi_oauth.templating.helper.oauth')));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension($this->get('jms_translation.twig_extension'));
        $instance->addGlobal('app', $this->get('templating.globals'));

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/InstallerBundle/Resources/views', 'SyliusInstaller');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/views', 'SyliusSettings');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/views', 'SyliusProduct');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/views', 'SyliusVariableProduct');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/views', 'SyliusTaxation');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/PayumBundle/Resources/views', 'SyliusPayum');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/views', 'SyliusAddressing');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/views', 'SyliusTaxonomies');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/WebBundle/Resources/views', 'SyliusWeb');
        $instance->addPath('/var/www/lokisalle/src/Sylius/Bundle/ResourceBundle/Resources/views', 'SyliusResource');
        $instance->addPath('/var/www/lokisalle/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath('/var/www/lokisalle/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/var/www/lokisalle/vendor/liip/imagine-bundle/Liip/ImagineBundle/Resources/views', 'LiipImagine');
        $instance->addPath('/var/www/lokisalle/app/Resources/HWIOAuthBundle/views', 'HWIOAuth');
        $instance->addPath('/var/www/lokisalle/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/views', 'HWIOAuth');
        $instance->addPath('/var/www/lokisalle/app/Resources/FOSUserBundle/views', 'FOSUser');
        $instance->addPath('/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('/var/www/lokisalle/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views', 'JMSTranslation');
        $instance->addPath('/var/www/lokisalle/vendor/payum/payum-bundle/Payum/Bundle/PayumBundle/Resources/views', 'Payum');
        $instance->addPath('/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', 'WebProfiler');
        $instance->addPath('/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');
        $instance->addPath('/var/www/lokisalle/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views');

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('abc');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Validator A Symfony\Component\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('sylius.validator.product.unique' => 'sylius.validator.product.unique', 'sylius.validator.variant.unique' => 'sylius.validator.variant.unique', 'sylius.validator.variant.combination' => 'sylius.validator.variant.combination', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'security.validator.user_password' => 'security.validator.user_password')), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => 'SecurityBundle:Collector:security'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom');
    }

    /**
     * Gets the 'white_october_pagerfanta.view_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Pagerfanta\View\ViewFactory A Pagerfanta\View\ViewFactory instance.
     */
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = $this->get('translator.default');

        $b = new \Pagerfanta\View\DefaultView();

        $c = new \Pagerfanta\View\TwitterBootstrapView();

        $d = new \Pagerfanta\View\TwitterBootstrap3View();

        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());

        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap3' => $d, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($d, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a)));

        return $instance;
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('sylius.payum.be2bill.action.capture_order_using_credit_card')) {
            $this->get('sylius.payum.be2bill.action.capture_order_using_credit_card')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('sylius.payum.action.obtain_credit_card')) {
            $this->get('sylius.payum.action.obtain_credit_card')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('sylius.menu_builder.frontend')) {
            $this->get('sylius.menu_builder.frontend')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('locale_listener')) {
            $this->get('locale_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('fragment.handler')) {
            $this->get('fragment.handler')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('router_listener')) {
            $this->get('router_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('hwi_oauth.templating.helper.oauth')) {
            $this->get('hwi_oauth.templating.helper.oauth')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/var/www/lokisalle/app/../web', true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'assetic.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Assetic\Cache\FilesystemCache A Assetic\Cache\FilesystemCache instance.
     */
    protected function getAssetic_CacheService()
    {
        return $this->services['assetic.cache'] = new \Assetic\Cache\FilesystemCache('/var/www/lokisalle/app/cache/dev/assetic/assets');
    }

    /**
     * Gets the 'assetic.value_supplier.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\DefaultValueSupplier A Symfony\Bundle\AsseticBundle\DefaultValueSupplier instance.
     */
    protected function getAssetic_ValueSupplier_DefaultService()
    {
        return $this->services['assetic.value_supplier.default'] = new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'fos_user.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the 'fos_user.user_provider.username' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return FOS\UserBundle\Security\UserProvider A FOS\UserBundle\Security\UserProvider instance.
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'hwi_oauth.http_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Buzz\Client\Curl A Buzz\Client\Curl instance.
     */
    protected function getHwiOauth_HttpClientService()
    {
        $this->services['hwi_oauth.http_client'] = $instance = new \Buzz\Client\Curl();

        $instance->setVerifyPeer(true);
        $instance->setTimeout(5);
        $instance->setMaxRedirects(5);
        $instance->setIgnoreErrors(true);

        return $instance;
    }

    /**
     * Gets the 'hwi_oauth.storage.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage A HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage instance.
     */
    protected function getHwiOauth_Storage_SessionService()
    {
        return $this->services['hwi_oauth.storage.session'] = new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage($this->get('session'));
    }

    /**
     * Gets the 'jms_serializer.unserialize_object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\Serializer\Construction\UnserializeObjectConstructor A JMS\Serializer\Construction\UnserializeObjectConstructor instance.
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the 'payum.buzz.client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Buzz\Client\Curl A Buzz\Client\Curl instance.
     */
    protected function getPayum_Buzz_ClientService()
    {
        $this->services['payum.buzz.client'] = $instance = new \Buzz\Client\Curl();

        $instance->setTimeout(200);

        return $instance;
    }

    /**
     * Gets the 'payum.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getPayum_EntityManagerService()
    {
        return $this->services['payum.entity_manager'] = $this->get('doctrine')->getManager();
    }

    /**
     * Gets the 'payum.extension.endless_cycle_detector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Payum\Extension\EndlessCycleDetectorExtension A Payum\Extension\EndlessCycleDetectorExtension instance.
     */
    protected function getPayum_Extension_EndlessCycleDetectorService()
    {
        return $this->services['payum.extension.endless_cycle_detector'] = new \Payum\Extension\EndlessCycleDetectorExtension();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }

    /**
     * Gets the 'security.access_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Firewall\AccessListener A Symfony\Component\Security\Http\Firewall\AccessListener instance.
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }

    /**
     * Gets the 'security.access_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\AccessMap A Symfony\Component\Security\Http\AccessMap instance.
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/connect.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration/login-check'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/administration.*'), array(0 => 'ROLE_SYLIUS_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/account.*'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/_partial.*', NULL, array(), array(0 => '127.0.0.1')), array(), NULL);

        return $instance;
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_provider.username');
        $b = $this->get('hwi_oauth.user_checker');
        $c = $this->get('security.encoder_factory');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'administration', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('52b1e7735ca44'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \HWI\Bundle\OAuthBundle\Security\Core\Authentication\Provider\OAuthProvider($this->get('sylius.oauth.user_provider'), $this->get('hwi_oauth.resource_ownermap.main'), $b), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($b, 'abc', 'main'), 5 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('52b1e7735ca44')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance.
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.channel_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Firewall\ChannelListener A Symfony\Component\Security\Http\Firewall\ChannelListener instance.
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.context_listener.0' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Firewall\ContextListener A Symfony\Component\Security\Http\Firewall\ContextListener instance.
     */
    protected function getSecurity_ContextListener_0Service()
    {
        return $this->services['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener($this->get('security.context'), array(0 => $this->get('fos_user.user_provider.username')), 'user', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.http_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\HttpUtils A Symfony\Component\Security\Http\HttpUtils instance.
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /**
     * Gets the 'security.logout.handler.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Logout\SessionLogoutHandler A Symfony\Component\Security\Http\Logout\SessionLogoutHandler instance.
     */
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/var/www/lokisalle/app/cache/dev');
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Validator\Mapping\ClassMetadataFactory A Symfony\Component\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml', 1 => '/var/www/lokisalle/src/Sylius/Bundle/OrderBundle/Resources/config/validation.xml', 2 => '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/config/validation.xml', 3 => '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/config/validation.xml', 4 => '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/config/validation.xml', 5 => '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/config/validation.xml', 6 => '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/config/validation.xml', 7 => '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/config/validation.xml', 8 => '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/config/validation.xml', 9 => '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/config/validation.xml', 10 => '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/config/validation.xml', 11 => '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/config/validation.xml', 12 => '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/config/validation.xml', 13 => '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/config/validation.xml', 14 => '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml', 15 => '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/var/www/lokisalle/app',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/var/www/lokisalle/app/cache/dev',
            'kernel.logs_dir' => '/var/www/lokisalle/app/logs',
            'kernel.bundles' => array(
                'SyliusInstallerBundle' => 'Sylius\\Bundle\\InstallerBundle\\SyliusInstallerBundle',
                'SyliusOrderBundle' => 'Sylius\\Bundle\\OrderBundle\\SyliusOrderBundle',
                'SyliusMoneyBundle' => 'Sylius\\Bundle\\MoneyBundle\\SyliusMoneyBundle',
                'SyliusSettingsBundle' => 'Sylius\\Bundle\\SettingsBundle\\SyliusSettingsBundle',
                'SyliusCartBundle' => 'Sylius\\Bundle\\CartBundle\\SyliusCartBundle',
                'SyliusProductBundle' => 'Sylius\\Bundle\\ProductBundle\\SyliusProductBundle',
                'SyliusVariableProductBundle' => 'Sylius\\Bundle\\VariableProductBundle\\SyliusVariableProductBundle',
                'SyliusTaxationBundle' => 'Sylius\\Bundle\\TaxationBundle\\SyliusTaxationBundle',
                'SyliusShippingBundle' => 'Sylius\\Bundle\\ShippingBundle\\SyliusShippingBundle',
                'SyliusPaymentsBundle' => 'Sylius\\Bundle\\PaymentsBundle\\SyliusPaymentsBundle',
                'SyliusPayumBundle' => 'Sylius\\Bundle\\PayumBundle\\SyliusPayumBundle',
                'SyliusPromotionsBundle' => 'Sylius\\Bundle\\PromotionsBundle\\SyliusPromotionsBundle',
                'SyliusAddressingBundle' => 'Sylius\\Bundle\\AddressingBundle\\SyliusAddressingBundle',
                'SyliusInventoryBundle' => 'Sylius\\Bundle\\InventoryBundle\\SyliusInventoryBundle',
                'SyliusTaxonomiesBundle' => 'Sylius\\Bundle\\TaxonomiesBundle\\SyliusTaxonomiesBundle',
                'SyliusFlowBundle' => 'Sylius\\Bundle\\FlowBundle\\SyliusFlowBundle',
                'SyliusCoreBundle' => 'Sylius\\Bundle\\CoreBundle\\SyliusCoreBundle',
                'SyliusWebBundle' => 'Sylius\\Bundle\\WebBundle\\SyliusWebBundle',
                'SyliusResourceBundle' => 'Sylius\\Bundle\\ResourceBundle\\SyliusResourceBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'LiipDoctrineCacheBundle' => 'Liip\\DoctrineCacheBundle\\LiipDoctrineCacheBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle',
                'KnpSnappyBundle' => 'Knp\\Bundle\\SnappyBundle\\KnpSnappyBundle',
                'PayumBundle' => 'Payum\\Bundle\\PayumBundle\\PayumBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'sylius.database.driver' => 'pdo_mysql',
            'sylius.database.host' => '127.0.0.1',
            'sylius.database.port' => NULL,
            'sylius.database.name' => 'symfony',
            'sylius.database.user' => 'root',
            'sylius.database.password' => '93Hardcore9351.',
            'sylius.mailer.transport' => 'smtp',
            'sylius.mailer.host' => '127.0.0.1',
            'sylius.mailer.user' => NULL,
            'sylius.mailer.password' => NULL,
            'sylius.locale' => 'en',
            'sylius.secret' => 'abc',
            'sylius.currency' => 'EUR',
            'sylius.cache' => 'file_system',
            'paypal.express_checkout.username' => 'EDITME',
            'paypal.express_checkout.password' => 'EDITME',
            'paypal.express_checkout.signature' => 'EDITME',
            'paypal.express_checkout.sandbox' => true,
            'stripe.secret_key' => 'EDITME',
            'stripe.test_mode' => true,
            'be2bill.identifier' => 'EDITME',
            'be2bill.password' => 'EDITME',
            'be2bill.sandbox' => true,
            'sylius.oauth.amazon.clientid' => '<amazon_client_id>',
            'sylius.oauth.amazon.clientsecret' => '<amazon_client_secret>',
            'sylius.oauth.facebook.clientid' => '<facebook_client_id>',
            'sylius.oauth.facebook.clientsecret' => '<facebook_client_secret>',
            'sylius.oauth.google.clientid' => '<google_client_id>',
            'sylius.oauth.google.clientsecret' => '<google_client_secret>',
            'sylius.installer.scenario.class' => 'Sylius\\Bundle\\InstallerBundle\\Process\\InstallerScenario',
            'sylius.requirements.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\SyliusRequirements',
            'sylius.requirements.settings.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\SettingsRequirements',
            'sylius.requirements.extensions.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\ExtensionsRequirements',
            'sylius.requirements.filesystem.class' => 'Sylius\\Bundle\\InstallerBundle\\Requirement\\FilesystemRequirements',
            'sylius.form.type.configuration.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\ConfigurationType',
            'sylius.form.type.configuration.database.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\DatabaseType',
            'sylius.form.type.configuration.mailer.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\MailerType',
            'sylius.form.type.configuration.locale.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\LocaleType',
            'sylius.form.type.configuration.hidden.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\Configuration\\HiddenType',
            'sylius.form.type.setup.class' => 'Sylius\\Bundle\\InstallerBundle\\Form\\Type\\SetupType',
            'sylius.installer.yaml_persister.class' => 'Sylius\\Bundle\\InstallerBundle\\Persister\\YamlPersister',
            'sylius.config.classes' => array(
                'user' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\User',
                ),
                'group' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\GroupType',
                ),
                'variant_image' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\VariantImage',
                ),
                'taxonomy' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonomyType',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'taxon' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxon',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonType',
                    'controller' => 'Sylius\\Bundle\\TaxonomiesBundle\\Controller\\TaxonController',
                ),
                'unit' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'stockable' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant',
                ),
                'address' => array(
                    'controller' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\Account\\AddressController',
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Address',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType',
                ),
                'country' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Country',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType',
                ),
                'province' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Province',
                    'controller' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType',
                ),
                'zone' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Zone',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType',
                ),
                'zone_member' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType',
                ),
                'zone_member_country' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCountryType',
                ),
                'zone_member_province' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberProvinceType',
                ),
                'zone_member_zone' => array(
                    'model' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone',
                    'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberZoneType',
                ),
                'promotion' => array(
                    'model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\PromotionType',
                ),
                'promotion_rule' => array(
                    'model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Rule',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleType',
                ),
                'promotion_action' => array(
                    'model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Action',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionType',
                ),
                'promotion_coupon' => array(
                    'model' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon',
                    'controller' => 'Sylius\\Bundle\\PromotionsBundle\\Controller\\CouponController',
                    'form' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponType',
                ),
                'payment_security_token' => array(
                    'model' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken',
                ),
                'payment_method' => array(
                    'model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodType',
                ),
                'payment' => array(
                    'model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentType',
                ),
                'payment_log' => array(
                    'model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentLog',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'credit_card' => array(
                    'model' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\CreditCardType',
                ),
                'shipment' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Shipment',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType',
                ),
                'shipment_item' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentItemType',
                ),
                'shipping_method' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShippingMethodType',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'shipping_category' => array(
                    'model' => 'Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType',
                ),
                'shipping_method_rule' => array(
                    'model' => 'Sylius\\Bundle\\ShippingBundle\\Model\\Rule',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\RuleType',
                ),
                'tax_rate' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\TaxRate',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxRateType',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                ),
                'tax_category' => array(
                    'model' => 'Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType',
                ),
                'variant' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\VariantType',
                    'controller' => 'Sylius\\Bundle\\VariableProductBundle\\Controller\\VariantController',
                ),
                'option' => array(
                    'model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Option',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionType',
                ),
                'option_value' => array(
                    'model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueType',
                ),
                'product' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Product',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ProductType',
                    'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductController',
                    'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ProductRepository',
                ),
                'prototype' => array(
                    'model' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype',
                    'form' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\PrototypeType',
                    'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\PrototypeController',
                ),
                'property' => array(
                    'model' => 'Sylius\\Bundle\\ProductBundle\\Model\\Property',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\PropertyType',
                ),
                'product_property' => array(
                    'model' => 'Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty',
                    'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductPropertyType',
                ),
                'cart' => array(
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartType',
                    'controller' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartController',
                ),
                'item' => array(
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartItemType',
                    'controller' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartItemController',
                ),
                'parameter' => array(
                    'model' => 'Sylius\\Bundle\\SettingsBundle\\Model\\Parameter',
                ),
                'exchange_rate' => array(
                    'model' => 'Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\ExchangeRateType',
                ),
                'currency' => array(
                    'controller' => 'Sylius\\Bundle\\MoneyBundle\\Controller\\CurrencyController',
                ),
                'order' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order',
                    'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
                    'repository' => 'Sylius\\Bundle\\CoreBundle\\Repository\\OrderRepository',
                    'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\OrderType',
                ),
                'order_item' => array(
                    'model' => 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType',
                ),
                'adjustment' => array(
                    'model' => 'Sylius\\Bundle\\OrderBundle\\Model\\Adjustment',
                    'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                    'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\AdjustmentType',
                ),
            ),
            'sylius.model.user.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\User',
            'sylius.generator.order_number.class' => 'Sylius\\Bundle\\OrderBundle\\Generator\\OrderNumberGenerator',
            'sylius.listener.order_number.class' => 'Sylius\\Bundle\\OrderBundle\\EventListener\\OrderNumberListener',
            'sylius.repository.order.class' => 'Sylius\\Bundle\\CoreBundle\\Repository\\OrderRepository',
            'sylius.repository.order_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.adjustment.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_order.driver' => 'doctrine/orm',
            'sylius_order.driver.doctrine/orm' => true,
            'sylius.model.order.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order',
            'sylius.controller.order.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
            'sylius.form.type.order.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\OrderType',
            'sylius.model.order_item.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem',
            'sylius.controller.order_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.order_item.class' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType',
            'sylius.model.adjustment.class' => 'Sylius\\Bundle\\OrderBundle\\Model\\Adjustment',
            'sylius.controller.adjustment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.adjustment.class' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\AdjustmentType',
            'sylius.validation_group.order' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.order_item' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.adjustment' => array(
                0 => 'sylius',
            ),
            'sylius.twig.money.class' => 'Sylius\\Bundle\\MoneyBundle\\Twig\\SyliusMoneyExtension',
            'sylius.form.type.money.class' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\MoneyType',
            'sylius.form.type.exchange_rate.class' => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\ExchangeRateType',
            'sylius.currency_context.class' => 'Sylius\\Bundle\\CoreBundle\\Context\\CurrencyContext',
            'sylius.currency_converter.class' => 'Sylius\\Bundle\\MoneyBundle\\Converter\\CurrencyConverter',
            'sylius.repository.exchange_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_money.driver' => 'doctrine/orm',
            'sylius_money.driver.doctrine/orm' => true,
            'sylius.model.exchange_rate.class' => 'Sylius\\Bundle\\MoneyBundle\\Model\\ExchangeRate',
            'sylius.controller.exchange_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.controller.currency.class' => 'Sylius\\Bundle\\MoneyBundle\\Controller\\CurrencyController',
            'sylius.money.locale' => 'en',
            'sylius.money.currency' => 'EUR',
            'sylius.controller.settings.class' => 'Sylius\\Bundle\\SettingsBundle\\Controller\\SettingsController',
            'sylius.settings.form_factory.class' => 'Sylius\\Bundle\\SettingsBundle\\Form\\Factory\\SettingsFormFactory',
            'sylius.settings.manager.class' => 'Sylius\\Bundle\\SettingsBundle\\Manager\\SettingsManager',
            'sylius.settings.schema_registry.class' => 'Sylius\\Bundle\\SettingsBundle\\Schema\\SchemaRegistry',
            'sylius.settings.twig.class' => 'Sylius\\Bundle\\SettingsBundle\\Twig\\SyliusSettingsExtension',
            'sylius.repository.parameter.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_settings.driver' => 'doctrine/orm',
            'sylius_settings.driver.doctrine/orm' => true,
            'sylius.model.parameter.class' => 'Sylius\\Bundle\\SettingsBundle\\Model\\Parameter',
            'sylius.model.cart.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Order',
            'sylius.model.cart_item.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\OrderItem',
            'sylius.cart_provider.default.class' => 'Sylius\\Bundle\\CartBundle\\Provider\\CartProvider',
            'sylius.cart_storage.session.class' => 'Sylius\\Bundle\\CartBundle\\Storage\\SessionCartStorage',
            'sylius.cart_listener.class' => 'Sylius\\Bundle\\CartBundle\\EventListener\\CartListener',
            'sylius.cart_flash_listener.class' => 'Sylius\\Bundle\\CartBundle\\EventListener\\FlashListener',
            'sylius.cart.purger.class' => 'Sylius\\Bundle\\CartBundle\\Purger\\ExpiredCartsPurger',
            'sylius.cart_twig.class' => 'Sylius\\Bundle\\CartBundle\\Twig\\SyliusCartExtension',
            'sylius.controller.cart.class' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartController',
            'sylius.form.type.cart.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartType',
            'sylius.controller.cart_item.class' => 'Sylius\\Bundle\\CartBundle\\Controller\\CartItemController',
            'sylius.form.type.cart_item.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\CartItemType',
            'sylius.validation_group.cart' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.cart_item' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.product_to_identifier.class' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductToIdentifierType',
            'sylius.builder.product.class' => 'Sylius\\Bundle\\ProductBundle\\Builder\\ProductBuilder',
            'sylius.validator.product.unique.class' => 'Sylius\\Bundle\\ProductBundle\\Validator\\ProductUniqueValidator',
            'sylius.form.type.product_property.class' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductPropertyType',
            'sylius.builder.prototype.class' => 'Sylius\\Bundle\\VariableProductBundle\\Builder\\PrototypeBuilder',
            'sylius.repository.product.class' => 'Sylius\\Bundle\\CoreBundle\\Repository\\ProductRepository',
            'sylius.repository.property.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.product_property.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.prototype.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.property_choice.class' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\PropertyEntityChoiceType',
            'sylius_product.driver' => 'doctrine/orm',
            'sylius_product.driver.doctrine/orm' => true,
            'sylius.model.product.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Product',
            'sylius.form.type.product.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ProductType',
            'sylius.controller.product.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductController',
            'sylius.model.prototype.class' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Prototype',
            'sylius.form.type.prototype.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\PrototypeType',
            'sylius.controller.prototype.class' => 'Sylius\\Bundle\\ProductBundle\\Controller\\PrototypeController',
            'sylius.model.property.class' => 'Sylius\\Bundle\\ProductBundle\\Model\\Property',
            'sylius.controller.property.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.property.class' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\PropertyType',
            'sylius.model.product_property.class' => 'Sylius\\Bundle\\ProductBundle\\Model\\ProductProperty',
            'sylius.validation_group.product' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.property' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.product_property' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.prototype' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.option_value.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueType',
            'sylius.form.type.option_value_choice.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueChoiceType',
            'sylius.form.type.option_value_collection.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionValueCollectionType',
            'sylius.generator.variant.class' => 'Sylius\\Bundle\\VariableProductBundle\\Generator\\VariantGenerator',
            'sylius.validator.variant.unique.class' => 'Sylius\\Bundle\\VariableProductBundle\\Validator\\VariantUniqueValidator',
            'sylius.validator.variant.combination.class' => 'Sylius\\Bundle\\VariableProductBundle\\Validator\\VariantCombinationValidator',
            'sylius.form.type.variant.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\VariantType',
            'sylius.form.type.variant_choice.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\VariantChoiceType',
            'sylius.form.type.variant_match.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\VariantMatchType',
            'sylius.form.type.variant_to_identifier.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\VariantToIdentifierType',
            'sylius.controller.variant.class' => 'Sylius\\Bundle\\VariableProductBundle\\Controller\\VariantController',
            'sylius.repository.variant.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.option.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.option_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.option_choice.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionEntityChoiceType',
            'sylius_variable_product.driver' => 'doctrine/orm',
            'sylius_variable_product.driver.doctrine/orm' => true,
            'sylius.model.variant.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant',
            'sylius.model.option.class' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\Option',
            'sylius.controller.option.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.option.class' => 'Sylius\\Bundle\\VariableProductBundle\\Form\\Type\\OptionType',
            'sylius.model.option_value.class' => 'Sylius\\Bundle\\VariableProductBundle\\Model\\OptionValue',
            'sylius.controller.option_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.validation_group.variant' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.option' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.option_value' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.tax_calculator_choice.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\CalculatorChoiceType',
            'sylius.tax_calculator.class' => 'Sylius\\Bundle\\TaxationBundle\\Calculator\\DelegatingCalculator',
            'sylius.tax_calculator.default.class' => 'Sylius\\Bundle\\TaxationBundle\\Calculator\\DefaultCalculator',
            'sylius.tax_rate_resolver.class' => 'Sylius\\Bundle\\TaxationBundle\\Resolver\\TaxRateResolver',
            'sylius.repository.tax_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.tax_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.tax_category_choice.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryEntityType',
            'sylius_taxation.driver' => 'doctrine/orm',
            'sylius_taxation.driver.doctrine/orm' => true,
            'sylius.model.tax_rate.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\TaxRate',
            'sylius.form.type.tax_rate.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxRateType',
            'sylius.controller.tax_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.tax_category.class' => 'Sylius\\Bundle\\TaxationBundle\\Model\\TaxCategory',
            'sylius.controller.tax_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.tax_category.class' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType',
            'sylius.validation_group.tax_category' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.tax_rate' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.shipping_calculator_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\CalculatorChoiceType',
            'sylius.form.type.shipping_rule_item_count_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Rule\\ItemCountConfigurationType',
            'sylius.form.type.shipping_method_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodChoiceType',
            'sylius.shipping_methods_resolver.class' => 'Sylius\\Bundle\\ShippingBundle\\Resolver\\MethodsResolver',
            'sylius.shipping_calculator_registry.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\Registry\\CalculatorRegistry',
            'sylius.shipping_calculator.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\DelegatingCalculator',
            'sylius.shipping_rule_checker_registry.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\Registry\\RuleCheckerRegistry',
            'sylius.shipping_eligibility_checker.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\ShippingMethodEligibilityChecker',
            'sylius.shipping_rule_checker.item_count.class' => 'Sylius\\Bundle\\ShippingBundle\\Checker\\ItemCountRuleChecker',
            'sylius.shipping_calculator.flat_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\FlatRateCalculator',
            'sylius.form.type.shipping_calculator.flat_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\FlatRateConfigurationType',
            'sylius.shipping_calculator.per_item_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\PerItemRateCalculator',
            'sylius.form.type.shipping_calculator.per_item_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\PerItemRateConfigurationType',
            'sylius.shipping_calculator.flexible_rate.class' => 'Sylius\\Bundle\\ShippingBundle\\Calculator\\FlexibleRateCalculator',
            'sylius.form.type.shipping_calculator.flexible_rate_configuration.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Calculator\\FlexibleRateConfigurationType',
            'sylius.repository.shipment.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.shipment_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.shipping_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.shipping_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.shipping_method_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.shipping_category_choice.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryEntityType',
            'sylius_shipping.driver' => 'doctrine/orm',
            'sylius_shipping.driver.doctrine/orm' => true,
            'sylius.model.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Shipment',
            'sylius.controller.shipment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipment.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType',
            'sylius.model.shipment_item.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit',
            'sylius.controller.shipment_item.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipment_item.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentItemType',
            'sylius.model.shipping_method.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\ShippingMethod',
            'sylius.form.type.shipping_method.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShippingMethodType',
            'sylius.controller.shipping_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.shipping_category.class' => 'Sylius\\Bundle\\ShippingBundle\\Model\\ShippingCategory',
            'sylius.controller.shipping_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipping_category.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType',
            'sylius.model.shipping_method_rule.class' => 'Sylius\\Bundle\\ShippingBundle\\Model\\Rule',
            'sylius.controller.shipping_method_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.shipping_method_rule.class' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\RuleType',
            'sylius.validation_group.shipping_category' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_method' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_rule_item_count_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_flat_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_flexible_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.shipping_calculator_per_item_rate_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.payment_gateway_choice.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentGatewayChoiceType',
            'sylius.form.type.credit_card.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\CreditCardType',
            'sylius.repository.payment_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.payment.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.credit_card.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.payment_method_choice.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodEntityType',
            'sylius_payments.driver' => 'doctrine/orm',
            'sylius_payments.driver.doctrine/orm' => true,
            'sylius.model.payment_method.class' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentMethod',
            'sylius.controller.payment_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.payment_method.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentMethodType',
            'sylius.model.payment.class' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\Payment',
            'sylius.controller.payment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.payment.class' => 'Sylius\\Bundle\\PaymentsBundle\\Form\\Type\\PaymentType',
            'sylius.model.payment_log.class' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\PaymentLog',
            'sylius.controller.payment_log.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.credit_card.class' => 'Sylius\\Bundle\\PaymentsBundle\\Model\\CreditCard',
            'sylius.controller.credit_card.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.validation_group.payment_method' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.payment' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.credit_card' => array(
                0 => 'sylius',
            ),
            'sylius.payment_gateways' => array(
                'dummy' => 'Test',
                'stripe' => 'Stripe',
                'be2bill' => 'Be2Bill',
            ),
            'sylius.payum.checkout_step.purchase.class' => 'Sylius\\Bundle\\PayumBundle\\Checkout\\Step\\PurchaseStep',
            'sylius.payum.paypal.action.capture_order_using_express_checkout.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Paypal\\Action\\CaptureOrderUsingExpressCheckoutAction',
            'sylius.payum.stripe.action.capture_order_using_credit_card.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Stripe\\Action\\CaptureOrderUsingCreditCardAction',
            'sylius.payum.be2bill.action.capture_order_using_credit_card.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Be2bill\\Action\\CaptureOrderUsingCreditCardAction',
            'sylius.payum.dummy.action.capture_order.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Dummy\\Action\\CaptureOrderAction',
            'sylius.payum.dummy.action.order_status.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Dummy\\Action\\OrderStatusAction',
            'sylius.payum.action.order_status.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Action\\OrderStatusAction',
            'sylius.payum.action.obtain_credit_card.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Action\\ObtainCreditCardAction',
            'sylius.payum.action.execute_same_request_with_payment_details.class' => 'Sylius\\Bundle\\PayumBundle\\Payum\\Action\\ExecuteSameRequestWithPaymentDetailsAction',
            'sylius.repository.payment_security_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_payum.driver' => 'doctrine/orm',
            'sylius_payum.driver.doctrine/orm' => true,
            'sylius.model.payment_security_token.class' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken',
            'sylius.promotion_processor.class' => 'Sylius\\Bundle\\PromotionsBundle\\Processor\\PromotionProcessor',
            'sylius.promotion_eligibility_checker.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\PromotionEligibilityChecker',
            'sylius.promotion_rule_checker.item_total.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\ItemTotalRuleChecker',
            'sylius.promotion_rule_checker.item_count.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\ItemCountRuleChecker',
            'sylius.promotion_applicator.class' => 'Sylius\\Bundle\\PromotionsBundle\\Action\\PromotionApplicator',
            'sylius.generator.instructions.class' => 'Sylius\\Bundle\\PromotionsBundle\\Generator\\Instruction',
            'sylius.registry.promotion_rule_checker.class' => 'Sylius\\Bundle\\PromotionsBundle\\Checker\\Registry\\RuleCheckerRegistry',
            'sylius.registry.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Action\\Registry\\PromotionActionRegistry',
            'sylius.form.type.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\PromotionType',
            'sylius.form.type.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponType',
            'sylius.form.type.promotion_rule.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleType',
            'sylius.form.type.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionType',
            'sylius.form.type.promotion_rule_choice.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\RuleChoiceType',
            'sylius.form.type.promotion_rule.item_total_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Rule\\ItemTotalConfigurationType',
            'sylius.form.type.promotion_rule.item_count_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Rule\\ItemCountConfigurationType',
            'sylius.form.type.promotion_action_choice.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\ActionChoiceType',
            'sylius.form.type.promotion_action.fixed_discount_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Action\\FixedDiscountConfigurationType',
            'sylius.form.type.promotion_action.percentage_discount_configuration.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\Action\\PercentageDiscountConfigurationType',
            'sylius.form.type.promotion_coupon_to_code.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponToCodeType',
            'sylius.form.type.promotion_coupon_generate_instruction.class' => 'Sylius\\Bundle\\PromotionsBundle\\Form\\Type\\CouponGenerateInstructionType',
            'sylius.generator.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Generator\\CouponGenerator',
            'sylius.repository.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Doctrine\\ORM\\PromotionRepository',
            'sylius.repository.promotion_coupon.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.promotion_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.promotion_action.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_promotions.driver' => 'doctrine/orm',
            'sylius_promotions.driver.doctrine/orm' => true,
            'sylius.model.promotion.class' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Promotion',
            'sylius.controller.promotion.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.promotion_rule.class' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Rule',
            'sylius.controller.promotion_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.promotion_action.class' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Action',
            'sylius.controller.promotion_action.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Model\\Coupon',
            'sylius.controller.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionsBundle\\Controller\\CouponController',
            'sylius.validation_group.promotion' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_coupon' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_item_total_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_rule_item_count_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action_fixed_discount_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_action_percentage_discount_configuration' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.promotion_coupon_generate_instruction' => array(
                0 => 'sylius',
            ),
            'sylius.form.type.country_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryEntityChoiceType',
            'sylius.form.type.province_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceChoiceType',
            'sylius.form.type.zone_choice.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneEntityChoiceType',
            'sylius.form.type.zone_member_collection.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCollectionType',
            'sylius.form.listener.address.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\EventListener\\BuildAddressFormListener',
            'sylius.zone_matcher.class' => 'Sylius\\Bundle\\AddressingBundle\\Matcher\\ZoneMatcher',
            'sylius.repository.address.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.country.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.province.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone_member.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone_member_country.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone_member_province.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.zone_member_zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_addressing.driver' => 'doctrine/orm',
            'sylius_addressing.driver.doctrine/orm' => true,
            'sylius.controller.address.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\Account\\AddressController',
            'sylius.model.address.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Address',
            'sylius.form.type.address.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType',
            'sylius.model.country.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Country',
            'sylius.controller.country.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.country.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType',
            'sylius.model.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Province',
            'sylius.controller.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
            'sylius.form.type.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType',
            'sylius.model.zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\Zone',
            'sylius.controller.zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType',
            'sylius.model.zone_member.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMember',
            'sylius.controller.zone_member.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.form.type.zone_member.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType',
            'sylius.model.zone_member_country.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberCountry',
            'sylius.form.type.zone_member_country.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberCountryType',
            'sylius.model.zone_member_province.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberProvince',
            'sylius.form.type.zone_member_province.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberProvinceType',
            'sylius.model.zone_member_zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Model\\ZoneMemberZone',
            'sylius.form.type.zone_member_zone.class' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberZoneType',
            'sylius.validation_group.address' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.country' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.province' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.zone' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.zone_member' => array(
                0 => 'sylius',
            ),
            'sylius.availability_checker.default.class' => 'Sylius\\Bundle\\InventoryBundle\\Checker\\AvailabilityChecker',
            'sylius.inventory_operator.default.class' => 'Sylius\\Bundle\\InventoryBundle\\Operator\\InventoryOperator',
            'sylius.backorders_handler.class' => 'Sylius\\Bundle\\InventoryBundle\\Operator\\BackordersHandler',
            'sylius.inventory_unit_factory.class' => 'Sylius\\Bundle\\InventoryBundle\\Factory\\InventoryUnitFactory',
            'sylius.inventory_listener.class' => 'Sylius\\Bundle\\InventoryBundle\\EventListener\\InventoryChangeListener',
            'sylius.inventory_twig.class' => 'Sylius\\Bundle\\InventoryBundle\\Twig\\SyliusInventoryExtension',
            'sylius.repository.inventory_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius_inventory.driver' => 'doctrine/orm',
            'sylius_inventory.driver.doctrine/orm' => true,
            'sylius.backorders' => true,
            'sylius.controller.inventory_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.inventory_unit.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\InventoryUnit',
            'sylius.model.stockable.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Variant',
            'sylius.form.type.taxon_choice.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonChoiceType',
            'sylius.form.type.taxon_selection.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonSelectionType',
            'sylius.repository.taxonomy.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Doctrine\\ORM\\TaxonomyRepository',
            'sylius.repository.taxon.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.form.type.taxonomy_choice.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Form\\Type\\TaxonomyEntityChoiceType',
            'sylius_taxonomies.driver' => 'doctrine/orm',
            'sylius_taxonomies.driver.doctrine/orm' => true,
            'sylius.model.taxonomy.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxonomy',
            'sylius.form.type.taxonomy.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonomyType',
            'sylius.controller.taxonomy.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.model.taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Taxon',
            'sylius.form.type.taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxonType',
            'sylius.controller.taxon.class' => 'Sylius\\Bundle\\TaxonomiesBundle\\Controller\\TaxonController',
            'sylius.validation_group.taxonomy' => array(
                0 => 'sylius',
            ),
            'sylius.validation_group.taxon' => array(
                0 => 'sylius',
            ),
            'sylius.process.builder.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Builder\\ProcessBuilder',
            'sylius.process.context.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Context\\ProcessContext',
            'sylius.controller.process.class' => 'Sylius\\Bundle\\FlowBundle\\Controller\\ProcessController',
            'sylius.process.coordinator.class' => 'Sylius\\Bundle\\FlowBundle\\Process\\Coordinator\\Coordinator',
            'sylius.process_storage.session.class' => 'Sylius\\Bundle\\FlowBundle\\Storage\\SessionStorage',
            'sylius.process_storage.session.bag.class' => 'Sylius\\Bundle\\FlowBundle\\Storage\\SessionFlowsBag',
            'sylius.settings_schema.general.class' => 'Sylius\\Bundle\\CoreBundle\\Settings\\GeneralSettingsSchema',
            'sylius.settings_schema.taxation.class' => 'Sylius\\Bundle\\CoreBundle\\Settings\\TaxationSettingsSchema',
            'sylius.cart_item_resolver.default.class' => 'Sylius\\Bundle\\CoreBundle\\Cart\\ItemResolver',
            'sylius.checker.restricted_zone.class' => 'Sylius\\Bundle\\CoreBundle\\Checker\\RestrictedZoneChecker',
            'sylius.checkout_scenario.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\CheckoutProcessScenario',
            'sylius.checkout_step.security.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\SecurityStep',
            'sylius.checkout_step.addressing.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\AddressingStep',
            'sylius.checkout_step.shipping.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\ShippingStep',
            'sylius.checkout_step.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\PaymentStep',
            'sylius.checkout_step.finalize.class' => 'Sylius\\Bundle\\CoreBundle\\Checkout\\Step\\FinalizeStep',
            'sylius.order_processing.inventory_handler.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\InventoryHandler',
            'sylius.order_processing.state_resolver.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\StateResolver',
            'sylius.order_processing.shipment_factory.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\ShipmentFactory',
            'sylius.order_processing.payment_processor.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\PaymentProcessor',
            'sylius.order_processing.taxation_processor.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\TaxationProcessor',
            'sylius.order_processing.shipping_processor.class' => 'Sylius\\Bundle\\CoreBundle\\OrderProcessing\\ShippingChargesProcessor',
            'sylius.listener.order_currency.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderCurrencyListener',
            'sylius.listener.order_inventory.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderInventoryListener',
            'sylius.listener.order_state.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderStateListener',
            'sylius.listener.order_payment.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderPaymentListener',
            'sylius.listener.order_promotion.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderPromotionListener',
            'sylius.listener.order_shipping.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderShippingListener',
            'sylius.listener.order_taxation.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderTaxationListener',
            'sylius.listener.user_update.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\UserUpdateListener',
            'sylius.listener.restricted_zone.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\RestrictedZoneListener',
            'sylius.checkout_form.addressing.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressingStepType',
            'sylius.checkout_form.shipping.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\ShippingStepType',
            'sylius.checkout_form.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\ShipmentType',
            'sylius.checkout_form.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\PaymentStepType',
            'sylius.form.type.image.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ImageType',
            'sylius.form.type.list.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ListType',
            'sylius.form.type.user_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\UserFilterType',
            'sylius.form.type.product_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\ProductFilterType',
            'sylius.form.type.order_filter.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Filter\\OrderFilterType',
            'sylius.listener.image_upload.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\ImageUploadListener',
            'sylius.image_uploader.class' => 'Sylius\\Bundle\\CoreBundle\\Uploader\\ImageUploader',
            'sylius.promotion_action.fixed_discount.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Action\\FixedDiscountAction',
            'sylius.promotion_action.percentage_discount.class' => 'Sylius\\Bundle\\CoreBundle\\Promotion\\Action\\PercentageDiscountAction',
            'sylius.listener.locale.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\LocaleListener',
            'sylius.oauth.user_provider.class' => 'Sylius\\Bundle\\CoreBundle\\OAuth\\UserProvider',
            'sylius.twig.restricted_zone_extension.class' => 'Sylius\\Bundle\\CoreBundle\\Twig\\SyliusRestrictedZoneExtension',
            'sylius.model.variant_image.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\VariantImage',
            'sylius.form.type.group_choice.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\GroupEntityType',
            'sylius_core.driver' => 'doctrine/orm',
            'sylius_core.driver.doctrine/orm' => true,
            'sylius.form.type.user.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\UserType',
            'sylius.model.group.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group',
            'sylius.form.type.group.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\GroupType',
            'sylius.mailer.class' => 'Sylius\\Bundle\\CoreBundle\\Mailer\\TwigSwiftMailer',
            'sylius.mailer.order_confirmation.class' => 'Sylius\\Bundle\\CoreBundle\\Mailer\\OrderConfirmationMailer',
            'sylius.listener.order_confirmation_email.class' => 'Sylius\\Bundle\\CoreBundle\\EventListener\\OrderConfirmationEmailListener',
            'sylius.email.order_confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'sylius.email.order_confirmation.template' => 'SyliusWebBundle:Frontend/Email:orderConfirmation.html.twig',
            'sylius.controller.frontend.homepage.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\HomepageController',
            'sylius.controller.frontend.account.order.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Frontend\\Account\\OrderController',
            'sylius.controller.backend.dashboard.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Backend\\DashboardController',
            'sylius.controller.backend.security.class' => 'Sylius\\Bundle\\WebBundle\\Controller\\Backend\\SecurityController',
            'sylius.menu_builder.frontend.class' => 'Sylius\\Bundle\\WebBundle\\Menu\\FrontendMenuBuilder',
            'sylius.menu_builder.backend.class' => 'Sylius\\Bundle\\WebBundle\\Menu\\BackendMenuBuilder',
            'sylius.form.frontend.profile.type.class' => 'Sylius\\Bundle\\WebBundle\\Form\\ProfileFormType',
            'sylius.form.frontend.registration.type.class' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\RegistrationFormType',
            'sylius.listener.frontend.address.class' => 'Sylius\\Bundle\\WebBundle\\EventListener\\Account\\AddressListener',
            'sylius_resource.twig.class' => 'Sylius\\Bundle\\ResourceBundle\\Twig\\SyliusResourceExtension',
            'sylius.event_subscriber.load_metadata.class' => 'Sylius\\Bundle\\ResourceBundle\\EventListener\\LoadMetadataSubscriber',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/var/www/lokisalle/app/cache/dev/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => '/var/www/lokisalle/app/cache/dev/assetic',
            'assetic.bundles' => array(
                0 => 'SyliusWebBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/var/www/lokisalle/app/../web',
            'assetic.write_to' => '/var/www/lokisalle/app/../web',
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.container.dump' => '/var/www/lokisalle/app/cache/dev/appDevDebugProjectContainer.xml',
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'kernel.secret' => 'abc',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(

            ),
            'session.save_path' => '/var/www/lokisalle/app/cache/dev/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.debugger.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Debugger',
            'debug.templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/var/www/lokisalle/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
                1 => '/var/www/lokisalle/src/Sylius/Bundle/OrderBundle/Resources/config/validation.xml',
                2 => '/var/www/lokisalle/src/Sylius/Bundle/MoneyBundle/Resources/config/validation.xml',
                3 => '/var/www/lokisalle/src/Sylius/Bundle/SettingsBundle/Resources/config/validation.xml',
                4 => '/var/www/lokisalle/src/Sylius/Bundle/CartBundle/Resources/config/validation.xml',
                5 => '/var/www/lokisalle/src/Sylius/Bundle/ProductBundle/Resources/config/validation.xml',
                6 => '/var/www/lokisalle/src/Sylius/Bundle/VariableProductBundle/Resources/config/validation.xml',
                7 => '/var/www/lokisalle/src/Sylius/Bundle/TaxationBundle/Resources/config/validation.xml',
                8 => '/var/www/lokisalle/src/Sylius/Bundle/ShippingBundle/Resources/config/validation.xml',
                9 => '/var/www/lokisalle/src/Sylius/Bundle/PaymentsBundle/Resources/config/validation.xml',
                10 => '/var/www/lokisalle/src/Sylius/Bundle/PromotionsBundle/Resources/config/validation.xml',
                11 => '/var/www/lokisalle/src/Sylius/Bundle/AddressingBundle/Resources/config/validation.xml',
                12 => '/var/www/lokisalle/src/Sylius/Bundle/TaxonomiesBundle/Resources/config/validation.xml',
                13 => '/var/www/lokisalle/src/Sylius/Bundle/CoreBundle/Resources/config/validation.xml',
                14 => '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml',
                15 => '/var/www/lokisalle/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(

            ),
            'validator.translation_domain' => 'validators',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => 'file:/var/www/lokisalle/app/cache/dev/profiler',
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => '/var/www/lokisalle/app/cache/dev/assetic/routing.yml',
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.firephp' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'hwi_oauth.resource_ownermap.configured.main' => array(
                'amazon' => '/login/check-amazon',
                'facebook' => '/login/check-facebook',
                'google' => '/login/check-google',
            ),
            'security.role_hierarchy.roles' => array(

            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => '/var/www/lokisalle/app/cache/dev/swiftmailer/spool/default',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'SyliusWebBundle::forms.html.twig',
                2 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape_service' => NULL,
                'autoescape_service_method' => NULL,
                'cache' => '/var/www/lokisalle/app/cache/dev/twig',
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'liip_doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'liip_doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'liip_doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'liip_doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'liip_doctrine_cache.memcache_host' => 'localhost',
            'liip_doctrine_cache.memcache_port' => 11211,
            'liip_doctrine_cache.memcache_timeout' => 1,
            'liip_doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'liip_doctrine_cache.memcached_host' => 'localhost',
            'liip_doctrine_cache.memcached_port' => 11211,
            'liip_doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'liip_doctrine_cache.redis_host' => 'localhost',
            'liip_doctrine_cache.redis_port' => 6379,
            'liip_doctrine_cache.redis_timeout' => 2,
            'liip_doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'liip_doctrine_cache.win_cache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'liip_doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'liip_doctrine_cache.zend_data.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'liip_doctrine_cache.namespaces' => array(
                'sylius_settings' => array(
                    'type' => 'file_system',
                    'namespace' => NULL,
                    'host' => NULL,
                    'port' => NULL,
                    'timeout' => NULL,
                    'id' => NULL,
                    'directory' => NULL,
                    'extension' => NULL,
                ),
            ),
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.routing.loader.class' => 'Liip\\ImagineBundle\\Routing\\ImagineLoader',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.data.loader.filesystem.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\Loader\\FileSystemLoader',
            'liip_imagine.data.loader.stream.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\Loader\\StreamLoader',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.cache.clearer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheClearer',
            'liip_imagine.cache_prefix' => '/media/cache',
            'liip_imagine.web_root' => '/var/www/lokisalle/app/../web',
            'liip_imagine.data_root' => '/var/www/lokisalle/app/../web/media/image',
            'liip_imagine.cache_mkdir_mode' => 511,
            'liip_imagine.formats' => array(

            ),
            'liip_imagine.cache.resolver.default' => 'web_path',
            'liip_imagine.filter_sets' => array(
                'sylius_16x16' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 16,
                                1 => 16,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'sylius_50x40' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 50,
                                1 => 40,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'sylius_90x60' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 90,
                                1 => 60,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'sylius_200x200' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 200,
                                1 => 200,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'sylius_262x255' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 265,
                                1 => 255,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'sylius_310x300' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 310,
                                1 => 300,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'sylius_610x600' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 610,
                                1 => 600,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'sylius_gallery' => array(
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 640,
                                1 => 480,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'quality' => 100,
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
            ),
            'liip_imagine.data.loader.default' => 'filesystem',
            'liip_imagine.controller_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.cache.resolver.base_path' => '',
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Silex\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'hwi_oauth.authentication.listener.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\Firewall\\OAuthListener',
            'hwi_oauth.authentication.provider.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\Authentication\\Provider\\OAuthProvider',
            'hwi_oauth.authentication.entry_point.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\EntryPoint\\OAuthEntryPoint',
            'hwi_oauth.user.provider.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\OAuthUserProvider',
            'hwi_oauth.user.provider.entity.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\EntityUserProvider',
            'hwi_oauth.user.provider.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\FOSUBUserProvider',
            'hwi_oauth.registration.form.handler.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Form\\FOSUBRegistrationFormHandler',
            'hwi_oauth.resource_owner.oauth1.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth1ResourceOwner',
            'hwi_oauth.resource_owner.oauth2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner',
            'hwi_oauth.resource_owner.amazon.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AmazonResourceOwner',
            'hwi_oauth.resource_owner.bitbucket.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitbucketResourceOwner',
            'hwi_oauth.resource_owner.bitly.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitlyResourceOwner',
            'hwi_oauth.resource_owner.box.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BoxResourceOwner',
            'hwi_oauth.resource_owner.dailymotion.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DailymotionResourceOwner',
            'hwi_oauth.resource_owner.deviantart.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeviantartResourceOwner',
            'hwi_oauth.resource_owner.disqus.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DisqusResourceOwner',
            'hwi_oauth.resource_owner.dropbox.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DropboxResourceOwner',
            'hwi_oauth.resource_owner.eventbrite.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EventbriteResourceOwner',
            'hwi_oauth.resource_owner.facebook.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FacebookResourceOwner',
            'hwi_oauth.resource_owner.flickr.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FlickrResourceOwner',
            'hwi_oauth.resource_owner.foursquare.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FoursquareResourceOwner',
            'hwi_oauth.resource_owner.github.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitHubResourceOwner',
            'hwi_oauth.resource_owner.google.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GoogleResourceOwner',
            'hwi_oauth.resource_owner.instagram.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\InstagramResourceOwner',
            'hwi_oauth.resource_owner.jira.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JiraResourceOwner',
            'hwi_oauth.resource_owner.linkedin.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\LinkedinResourceOwner',
            'hwi_oauth.resource_owner.mailru.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\MailRuResourceOwner',
            'hwi_oauth.resource_owner.qq.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\QQResourceOwner',
            'hwi_oauth.resource_owner.sensio_connect.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SensioConnectResourceOwner',
            'hwi_oauth.resource_owner.sina_weibo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SinaWeiboResourceOwner',
            'hwi_oauth.resource_owner.stack_exchange.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StackExchangeResourceOwner',
            'hwi_oauth.resource_owner.stereomood.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StereomoodResourceOwner',
            'hwi_oauth.resource_owner.trello.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TrelloResourceOwner',
            'hwi_oauth.resource_owner.twitch.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitchResourceOwner',
            'hwi_oauth.resource_owner.twitter.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitterResourceOwner',
            'hwi_oauth.resource_owner.vkontakte.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\VkontakteResourceOwner',
            'hwi_oauth.resource_owner.windows_live.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WindowsLiveResourceOwner',
            'hwi_oauth.resource_owner.wordpress.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WordpressResourceOwner',
            'hwi_oauth.resource_owner.yahoo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YahooResourceOwner',
            'hwi_oauth.resource_owner.yandex.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YandexResourceOwner',
            'hwi_oauth.resource_owner.odnoklassniki.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\OdnoklassnikiResourceOwner',
            'hwi_oauth.resource_owner.37signals.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ThirtySevenSignalsResourceOwner',
            'hwi_oauth.resource_ownermap.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\ResourceOwnerMap',
            'hwi_oauth.security.oauth_utils.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\OAuthUtils',
            'hwi_oauth.storage.session.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\RequestDataStorage\\SessionStorage',
            'hwi_oauth.templating.helper.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Templating\\Helper\\OAuthHelper',
            'hwi_oauth.twig.extension.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Twig\\Extension\\OAuthExtension',
            'buzz.client.class' => 'Buzz\\Client\\Curl',
            'hwi_oauth.firewall_name' => 'main',
            'hwi_oauth.target_path_parameter' => NULL,
            'hwi_oauth.resource_owners' => array(
                0 => 'amazon',
                1 => 'facebook',
                2 => 'google',
            ),
            'hwi_oauth.connect' => false,
            'hwi_oauth.templating.engine' => 'twig',
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view_handler.jsonp.callback_filter' => '',
            'fos_rest.view.exception_wrapper_handler' => 'FOS\\RestBundle\\View\\ExceptionWrapperHandler',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Util\\Inflector\\DoctrineInflector',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => '/var/www/lokisalle/app/cache/dev/fos_rest',
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.formats' => array(
                'json' => false,
                'xml' => false,
                'html' => true,
            ),
            'fos_rest.default_engine' => 'twig',
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.routing.loader.include_format' => true,
            'fos_rest.exception.codes' => array(

            ),
            'fos_rest.exception.messages' => array(

            ),
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'fos_rest.mime_types' => array(

            ),
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'fos_user.backend_type_orm' => true,
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'sylius_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'sylius_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Sylius\\Bundle\\CoreBundle\\Model\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'jms_translation.twig_extension.class' => 'JMS\\TranslationBundle\\Twig\\TranslationExtension',
            'jms_translation.extractor_manager.class' => 'JMS\\TranslationBundle\\Translation\\ExtractorManager',
            'jms_translation.extractor.file_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\FileExtractor',
            'jms_translation.extractor.file.default_php_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\DefaultPhpFileExtractor',
            'jms_translation.extractor.file.translation_container_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TranslationContainerExtractor',
            'jms_translation.extractor.file.twig_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TwigFileExtractor',
            'jms_translation.extractor.file.form_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\FormExtractor',
            'jms_translation.extractor.file.validation_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\ValidationExtractor',
            'jms_translation.extractor.file.authentication_message_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\AuthenticationMessagesExtractor',
            'jms_translation.loader.symfony.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\Symfony\\XliffLoader',
            'jms_translation.loader.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\XliffLoader',
            'jms_translation.loader.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\SymfonyLoaderAdapter',
            'jms_translation.loader_manager.class' => 'JMS\\TranslationBundle\\Translation\\LoaderManager',
            'jms_translation.dumper.php_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\PhpDumper',
            'jms_translation.dumper.xliff_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\XliffDumper',
            'jms_translation.dumper.yaml_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\YamlDumper',
            'jms_translation.dumper.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\SymfonyDumperAdapter',
            'jms_translation.file_writer.class' => 'JMS\\TranslationBundle\\Translation\\FileWriter',
            'jms_translation.updater.class' => 'JMS\\TranslationBundle\\Translation\\Updater',
            'jms_translation.config_factory.class' => 'JMS\\TranslationBundle\\Translation\\ConfigFactory',
            'jms_translation.source_language' => 'en',
            'jms_translation.locales' => array(

            ),
            'knp_snappy.pdf.internal_generator.class' => 'Knp\\Snappy\\Pdf',
            'knp_snappy.pdf.class' => 'Knp\\Bundle\\SnappyBundle\\Snappy\\LoggableGenerator',
            'knp_snappy.pdf.binary' => '/usr/bin/wkhtmltopdf',
            'knp_snappy.pdf.options' => array(

            ),
            'knp_snappy.pdf.env' => array(

            ),
            'knp_snappy.image.internal_generator.class' => 'Knp\\Snappy\\Image',
            'knp_snappy.image.class' => 'Knp\\Bundle\\SnappyBundle\\Snappy\\LoggableGenerator',
            'knp_snappy.image.binary' => '/usr/bin/wkhtmltoimage',
            'knp_snappy.image.options' => array(

            ),
            'knp_snappy.image.env' => array(

            ),
            'payum.class' => 'Payum\\Bundle\\PayumBundle\\Registry\\ContainerAwareRegistry',
            'payum.payment.class' => 'Payum\\Payment',
            'payum.extension.log_executed_actions.class' => 'Payum\\Bridge\\Psr\\Log\\LogExecutedActionsExtension',
            'payum.extension.logger.class' => 'Payum\\Bridge\\Psr\\Log\\LoggerExtension',
            'payum.extension.storage.class' => 'Payum\\Extension\\StorageExtension',
            'payum.extension.endless_cycle_detector.class' => 'Payum\\Extension\\EndlessCycleDetectorExtension',
            'payum.buzz.client.class' => 'Buzz\\Client\\Curl',
            'payum.listener.interactive_request.class' => 'Payum\\Bundle\\PayumBundle\\EventListener\\InteractiveRequestListener',
            'payum.action.capture_details_aggregated_model.class' => 'Payum\\Action\\CaptureDetailsAggregatedModelAction',
            'payum.action.sync_details_aggregated_model.class' => 'Payum\\Action\\SyncDetailsAggregatedModelAction',
            'payum.action.status_details_aggregated_model.class' => 'Payum\\Action\\StatusDetailsAggregatedModelAction',
            'payum.security.http_request_verifier.class' => 'Payum\\Bundle\\PayumBundle\\Security\\HttpRequestVerifier',
            'payum.security.token_factory.class' => 'Payum\\Bundle\\PayumBundle\\Security\\TokenFactory',
            'payum.storage.doctrine.orm.class' => 'Payum\\Bridge\\Doctrine\\Storage\\DoctrineStorage',
            'payum.paypal.express_checkout_nvp.payment.class' => 'Payum\\Payment',
            'payum.paypal.express_checkout_nvp.api.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Api',
            'payum.paypal.express_checkout_nvp.action.api.authorize_token.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\AuthorizeTokenAction',
            'payum.paypal.express_checkout_nvp.action.api.do_express_checkout_payment.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\DoExpressCheckoutPaymentAction',
            'payum.paypal.express_checkout_nvp.action.api.get_express_checkout_details.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\GetExpressCheckoutDetailsAction',
            'payum.paypal.express_checkout_nvp.action.api.get_transaction_details.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\GetTransactionDetailsAction',
            'payum.paypal.express_checkout_nvp.action.api.set_express_checkout.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\SetExpressCheckoutAction',
            'payum.paypal.express_checkout_nvp.action.api.create_recurring_payment_profile.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\CreateRecurringPaymentProfileAction',
            'payum.paypal.express_checkout_nvp.action.api.get_recurring_payments_profile_details.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\GetRecurringPaymentsProfileDetailsAction',
            'payum.paypal.express_checkout_nvp.action.api.manage_recurring_payments_profile_status.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\Api\\ManageRecurringPaymentsProfileStatusAction',
            'payum.paypal.express_checkout_nvp.action.capture.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\CaptureAction',
            'payum.paypal.express_checkout_nvp.action.payment_details_status.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\PaymentDetailsStatusAction',
            'payum.paypal.express_checkout_nvp.action.payment_details_sync.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\PaymentDetailsSyncAction',
            'payum.paypal.express_checkout_nvp.action.recurring_payment_details_status.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\RecurringPaymentDetailsStatusAction',
            'payum.paypal.express_checkout_nvp.action.recurring_payment_details_sync.class' => 'Payum\\Paypal\\ExpressCheckout\\Nvp\\Action\\RecurringPaymentDetailsSyncAction',
            'payum.context.paypal_express_checkout.payment.class' => 'Payum\\Payment',
            'payum.context.stripe.payment.class' => 'Payum\\Payment',
            'payum.be2bill.payment.class' => 'Payum\\Payment',
            'payum.be2bill.api.class' => 'Payum\\Be2Bill\\Api',
            'payum.be2bill.action.capture.class' => 'Payum\\Be2Bill\\Action\\CaptureAction',
            'payum.be2bill.action.status.class' => 'Payum\\Be2Bill\\Action\\StatusAction',
            'payum.context.be2bill.payment.class' => 'Payum\\Payment',
            'payum.context.dummy.payment.class' => 'Payum\\Payment',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'sylius.tax_calculators' => array(
                'default' => 'default',
            ),
            'sylius.shipping_calculators' => array(
                'flat_rate' => 'Flat rate per shipment',
                'per_item_rate' => 'Flat rate per item',
                'flexible_rate' => 'Flexible rate',
            ),
            'sylius.shipping_rules' => array(
                'item_count' => 'Item count',
            ),
            'sylius.promotion_rules' => array(
                'item_total' => 'Item total',
                'item_count' => 'Item count',
            ),
            'sylius.promotion_actions' => array(
                'fixed_discount' => 'Fixed discount',
                'percentage_discount' => 'Percentage discount',
            ),
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => 'SecurityBundle:Collector:security',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
            ),
        );
    }
}
