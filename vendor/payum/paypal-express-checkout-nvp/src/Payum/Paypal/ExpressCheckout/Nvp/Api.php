<?php
namespace Payum\Paypal\ExpressCheckout\Nvp;

use Buzz\Client\ClientInterface;
use Buzz\Message\Form\FormRequest;

use Payum\Exception\Http\HttpException;
use Payum\Exception\InvalidArgumentException;
use Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response;
use Payum\Paypal\ExpressCheckout\Nvp\Exception\Http\HttpResponseAckNotSuccessException;

/**
 * @link https://www.x.com/developers/paypal/documentation-tools/api/getexpresscheckoutdetails-api-operation-nvp
 * @link https://www.x.com/developers/paypal/documentation-tools/api/doexpresscheckoutpayment-api-operation-nvp
 * @link https://www.x.com/developers/paypal/documentation-tools/api/setexpresscheckout-api-operation-nvp
 * @link https://www.x.com/developers/paypal/documentation-tools/api/gettransactiondetails-api-operation-nvp
 * @link https://www.x.com/developers/paypal/documentation-tools/api/createrecurringpaymentsprofile-api-operation-nvp
 * @link https://www.x.com/developers/paypal/documentation-tools/api/getrecurringpaymentsprofiledetails-api-operation-nvp
 * 
 * L_ERRORCODE: @link https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_errorcodes
 * ACK: @link https://www.x.com/content/paypal-nvp-api-overview
 */
class Api
{
    const ACK_SUCCESS = 'Success';

    const ACK_SUCCESS_WITH_WARNING = 'SuccessWithWarning';

    const ACK_FAILURE = 'Failure';

    const ACK_FAILUREWITHWARNING = 'FailureWithWarning';

    const ACK_WARNING = 'Warning';

    const CHECKOUTSTATUS_PAYMENT_ACTION_NOT_INITIATED = 'PaymentActionNotInitiated';

    const CHECKOUTSTATUS_PAYMENT_ACTION_FAILED = 'PaymentActionFailed';

    const CHECKOUTSTATUS_PAYMENT_ACTION_IN_PROGRESS = 'PaymentActionInProgress';

    const CHECKOUTSTATUS_PAYMENT_COMPLETED = 'PaymentCompleted';

    const CHECKOUTSTATUS_PAYMENT_ACTION_COMPLETED = 'PaymentActionCompleted';

    /**
     * No status
     */
    const PAYMENTSTATUS_NONE = 'None';

    /**
     * A reversal has been canceled; for example, when you win a dispute and the funds for the reversal have been returned to you.
     */
    const PAYMENTSTATUS_CANCELED_REVERSAL = 'Canceled-Reversal';

    /**
     * The payment has been completed, and the funds have been added successfully to your account balance.
     */
    const PAYMENTSTATUS_COMPLETED = 'Completed';

    /**
     * You denied the payment. This happens only if the payment was previously pending because of possible reasons described for the PendingReason element.
     */
    const PAYMENTSTATUS_DENIED = 'Denied';

    /**
     * The authorization period for this payment has been reached.
     */
    const PAYMENTSTATUS_EXPIRED = 'Expired';

    /**
     * The payment has failed. This happens only if the payment was made from your buyer's bank account.
     */
    const PAYMENTSTATUS_FAILED = 'Failed';

    /**
     * The transaction has not terminated, e.g. an authorization may be awaiting completion.
     */
    const PAYMENTSTATUS_IN_PROGRESS = 'In-Progress';

    /**
     * The payment has been partially refunded.
     */
    const PAYMENTSTATUS_PARTIALLY_REFUNDED = 'Partially-Refunded';

    /**
     * The payment is pending. See the PendingReason field for more information.
     */
    const PAYMENTSTATUS_PENDING = 'Pending';

    /**
     * You refunded the payment.
     */
    const PAYMENTSTATUS_REFUNDED = 'Refunded';

    /**
     * A payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer. The reason for the reversal is specified in the ReasonCode element.
     */
    const PAYMENTSTATUS_REVERSED = 'Reversed';

    /**
     *  A payment has been accepted.
     */
    const PAYMENTSTATUS_PROCESSED = 'Processed';

    /**
     * An authorization for this transaction has been voided.
     */
    const PAYMENTSTATUS_VOIDED = 'Voided';

    /**
     * The payment has been completed, and the funds have been added successfully to your pending balance.
     */
    const PAYMENTSTATUS_COMPLETED_FUNDS_HELD = 'Completed-Funds-Held';

    /**
     * How you want to obtain payment. When implementing parallel payments, this field is required and must be set to Order. When implementing digital goods, this field is required and must be set to Sale. You can specify up to 10 payments, where n is a digit between 0 and 9, inclusive; except for digital goods, which supports single payments only. If the transaction does not include a one-time purchase, this field is ignored. It is one of the following values:
     *
     * Sale – This is a final sale for which you are requesting payment (default).
     */
    const PAYMENTACTION_SALE = 'Sale';

    /**
     * How you want to obtain payment. When implementing parallel payments, this field is required and must be set to Order. When implementing digital goods, this field is required and must be set to Sale. You can specify up to 10 payments, where n is a digit between 0 and 9, inclusive; except for digital goods, which supports single payments only. If the transaction does not include a one-time purchase, this field is ignored. It is one of the following values:
     *
     * Authorization – This payment is a basic authorization subject to settlement with PayPal Authorization and Capture.
     */
    const PAYMENTACTION_AUTHORIZATION = 'Authorization';

    /**
     * How you want to obtain payment. When implementing parallel payments, this field is required and must be set to Order. When implementing digital goods, this field is required and must be set to Sale. You can specify up to 10 payments, where n is a digit between 0 and 9, inclusive; except for digital goods, which supports single payments only. If the transaction does not include a one-time purchase, this field is ignored. It is one of the following values:
     *
     * Order – This payment is an order authorization subject to settlement with PayPal Authorization and Capture.
     */
    const PAYMENTACTION_ORDER = 'Order';

    /**
     * Payment has not been authorized by the user.
     */
    const L_ERRORCODE_PAYMENT_NOT_AUTHORIZED = 10485;

    /**
     * PayPal displays the shipping address on the PayPal pages.
     */
    const NOSHIPPING_DISPLAY_ADDRESS = 0;

    /**
     * PayPal does not display shipping address fields whatsoever.
     */
    const NOSHIPPING_NOT_DISPLAY_ADDRESS = 1;

    /**
     * If you do not pass the shipping address, PayPal obtains it from the buyer’s account profile.
     */
    const NOSHIPPING_DISPLAY_BUYER_ADDRESS = 2;

    /**
     * You do not require the buyer’s shipping address be a confirmed address.
     * For digital goods, this field is required, and you must set it to 0.
     * Setting this field overrides the setting you specified in your Merchant Account Profile.
     */
    const REQCONFIRMSHIPPING_NOT_REQUIRED = 0;

    /**
     * You require the buyer’s shipping address be a confirmed address.
     * Setting this field overrides the setting you specified in your Merchant Account Profile.
     */
    const REQCONFIRMSHIPPING_REQUIRED = 1;

    /**
     * Indicates whether an item is digital or physical. For digital goods, this field is required and must be set to Digital. You can specify up to 10 payments, where n is a digit between 0 and 9, inclusive, and m specifies the list item within the payment; except for digital goods, which only supports single payments.
     */
    const PAYMENTREQUEST_ITERMCATEGORY_DIGITAL = 'Digital';

    /**
     * Indicates whether an item is digital or physical. For digital goods, this field is required and must be set to Digital. You can specify up to 10 payments, where n is a digit between 0 and 9, inclusive, and m specifies the list item within the payment; except for digital goods, which only supports single payments.
     */
    const PAYMENTREQUEST_ITERMCATEGORY_PHYSICAL = 'Physical';

    /**
     * Indicates whether you would like PayPal to automatically bill the outstanding balance amount in the next billing cycle.
     * 
     * PayPal does not automatically bill the outstanding balance.
     */
    const AUTOBILLOUTAMT_NOAUTOBILL = 'NoAutoBill';

    /**
     * Indicates whether you would like PayPal to automatically bill the outstanding balance amount in the next billing cycle.
     *
     * PayPal automatically bills the outstanding balance.
     */
    const AUTOBILLOUTAMT_ADDTONEXTBILLING = 'AddToNextBilling';

    const BILLINGPERIOD_DAY = 'Day';

    const BILLINGPERIOD_WEEK = 'Week';

    /**
     * For SemiMonth, billing is done on the 1st and 15th of each month.
     */
    const BILLINGPERIOD_SEMIMONTH = 'SemiMonth';

    const BILLINGPERIOD_MONTH = 'Month';

    const BILLINGPERIOD_YEAR = 'Year';

    /**
     * By default, PayPal suspends the pending profile in the event that the initial payment amount fails. You can override this default behavior by setting this field to ContinueOnFailure. Then, if the initial payment amount fails, PayPal adds the failed payment amount to the outstanding balance for this recurring payment profile.
     */
    const FAILEDINITAMTACTION_CONTINUEONFAILURE = 'ContinueOnFailure';

    /**
     * If this field is not set or you set it to CancelOnFailure, PayPal creates the recurring payment profile, but places it into a pending status until the initial payment completes. If the initial payment clears, PayPal notifies you by IPN that the pending profile has been activated. If the payment fails, PayPal notifies you by IPN that the pending profile has been canceled.
     */
    const FAILEDINITAMTACTION_CANCELONFAILURE = 'CancelOnFailure';
    
    const CREDITCARDTYPE_VISA = 'Visa';

    const CREDITCARDTYPE_MASTERCARD = 'MasterCard';

    const CREDITCARDTYPE_DISCOVER = 'Discover';

    const CREDITCARDTYPE_AMEX = 'Amex';

    /**
     * If the credit card type is Maestro, you must set CURRENCYCODE to GBP. In addition, you must specify either STARTDATE or ISSUENUMBER.
     */
    const CREDITCARDTYPE_MAESTRO = 'Maestro';
    
    const PAYERSTATUS_VERIFIED = 'verified';

    const PAYERSTATUS_UNVERIFIED = 'unverified';

    /**
     * The recurring payment profile has been successfully created and activated for scheduled payments according the billing instructions from the recurring payments profile.
     */
    const PROFILESTATUS_ACTIVEPROFILE = 'ActiveProfile';

    /**
     * The system is in the process of creating the recurring payment profile. Please check your IPN messages for an update.
     */
    const PROFILESTATUS_PENDINGPROFILE = 'PendingProfile';

    /**
     * Type of billing agreement. For recurring payments, this field must be set to RecurringPayments. In this case, you can specify up to ten billing agreements. Other defined values are not valid.
     */
    const BILLINGTYPE_RECURRING_PAYMENTS = 'RecurringPayments';

    /**
     * Type of billing agreement for reference transactions. You must have permission from PayPal to use this field. This field must be set to one of the following values:
     * 
     * PayPal creates a billing agreement for each transaction associated with buyer. You must specify version 54.0 or higher to use this option.
     */
    const BILLINGTYPE_MERCHANTINITIATEDBILLING = 'MerchantInitiatedBilling';

    /**
     * Type of billing agreement for reference transactions. You must have permission from PayPal to use this field. This field must be set to one of the following values:
     * 
     * PayPal creates a single billing agreement for all transactions associated with buyer. Use this value unless you need per-transaction billing agreements. You must specify version 58.0 or higher to use this option.
     */
    const BILLINGTYPE_MERCHANTINITIATEDBILLINGSINGLEAGREEMENT = 'MerchantInitiatedBilling';
    
    const RECURRINGPAYMENTSTATUS_ACTIVE = 'Active';

    const RECURRINGPAYMENTSTATUS_PENDING = 'Pending';

    const RECURRINGPAYMENTSTATUS_CANCELLED = 'Cancelled';

    const RECURRINGPAYMENTSTATUS_SUSPENDED = 'Suspended';

    const RECURRINGPAYMENTSTATUS_EXPIRED = 'Expired';

    const RECURRINGPAYMENTSTATUS_REACTIVATE = 'Reactivate';

    const RECURRINGPAYMENTACTION_CANCEL = 'Cancel';

    const VERSION = '65.1';

    protected $client;

    protected $options = array(
        'username' => null,
        'password' => null,
        'signature' => null,
        'return_url' => null,
        'cancel_url' => null,
        'sandbox' => null,
        'useraction' => null,
    );

    public function __construct(ClientInterface $client, array $options)
    {
        $this->client = $client;
        $this->options = array_replace($this->options, $options);

        if (true == empty($this->options['username'])) {
            throw new InvalidArgumentException('The username option must be set.');
        }
        if (true == empty($this->options['password'])) {
            throw new InvalidArgumentException('The password option must be set.');
        }
        if (true == empty($this->options['signature'])) {
            throw new InvalidArgumentException('The signature option must be set.');
        }
        if (false == is_bool($this->options['sandbox'])) {
            throw new InvalidArgumentException('The boolean sandbox option must be set.');
        }
    }

    /**
     * Require: PAYMENTREQUEST_0_AMT
     *
     * @param array $fields
     *
     * @return Response
     */
    public function setExpressCheckout(FormRequest $request)
    {
        $fields = $request->getFields();
        if (false == isset($fields['RETURNURL'])) {
            if (false == $this->options['return_url']) {
                throw new \Payum\Exception\RuntimeException('The return_url must be set either to FormRequest or to options.');
            }

            $request->setField('RETURNURL', $this->options['return_url']);
        }

        if (false == isset($fields['CANCELURL'])) {
            if (false == $this->options['cancel_url']) {
                throw new \Payum\Exception\RuntimeException('The cancel_url must be set either to FormRequest or to options.');
            }

            $request->setField('CANCELURL', $this->options['cancel_url']);
        }

        $request->setField('METHOD', 'SetExpressCheckout');

        $this->addVersionField($request);
        $this->addAuthorizeFields($request);

        return $this->doRequest($request);
    }

    /**
     * Require: TOKEN
     *
     * @param \Buzz\Message\Form\FormRequest $request
     *
     * @return \Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response
     */
    public function getExpressCheckoutDetails(FormRequest $request)
    {
        $request->setField('METHOD', 'GetExpressCheckoutDetails');

        $this->addVersionField($request);
        $this->addAuthorizeFields($request);

        return $this->doRequest($request);
    }

    /**
     * Require: TRANSACTIONID
     *
     * @param \Buzz\Message\Form\FormRequest $request
     *
     * @return \Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response
     */
    public function getTransactionDetails(FormRequest $request)
    {
        $request->setField('METHOD', 'GetTransactionDetails');

        $this->addVersionField($request);
        $this->addAuthorizeFields($request);

        return $this->doRequest($request);
    }

    /**
     * Require: PAYMENTREQUEST_0_AMT, PAYMENTREQUEST_0_PAYMENTACTION, PAYERID, TOKEN
     *
     * @param \Buzz\Message\Form\FormRequest $request
     *
     * @return \Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response
     */
    public function doExpressCheckoutPayment(FormRequest $request)
    {
        $request->setField('METHOD', 'DoExpressCheckoutPayment');

        $this->addVersionField($request);
        $this->addAuthorizeFields($request);

        return $this->doRequest($request);
    }

    /**
     * @param \Buzz\Message\Form\FormRequest $request
     *
     * @return \Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response
     */
    public function createRecurringPaymentsProfile(FormRequest $request)
    {
        $request->setField('METHOD', 'CreateRecurringPaymentsProfile');

        $this->addVersionField($request);
        $this->addAuthorizeFields($request);

        return $this->doRequest($request);
    }

    /**
     * @param \Buzz\Message\Form\FormRequest $request
     * 
     * @return \Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response
     */
    public function getRecurringPaymentsProfileDetails(FormRequest $request)
    {
        $request->setField('METHOD', 'GetRecurringPaymentsProfileDetails');

        $this->addVersionField($request);
        $this->addAuthorizeFields($request);

        return $this->doRequest($request);
    }

    /**
     * @param FormRequest $request
     * 
     * @return \Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response
     */
    public function manageRecurringPaymentsProfileStatus(FormRequest $request)
    {
        $request->setField('METHOD', 'ManageRecurringPaymentsProfileStatus');

        $this->addVersionField($request);
        $this->addAuthorizeFields($request);

        return $this->doRequest($request);
    }

    /**
     * @param \Buzz\Message\Form\FormRequest $request
     *
     * @throws \Payum\Exception\Http\HttpException
     *
     * @return \Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response
     */
    protected function doRequest(FormRequest $request)
    {
        $request->setMethod('POST');
        $request->fromUrl($this->getApiEndpoint());

        $this->client->send($request, $response = $this->createResponse());

        if (false == $response->isSuccessful()) {
            throw HttpException::factory($request, $response);
        }
        if (false == ($response['ACK'] == self::ACK_SUCCESS || $response['ACK'] ==  self::ACK_SUCCESS_WITH_WARNING)) {
            $e = new HttpResponseAckNotSuccessException('The response ACK is not success.');
            $e->setRequest($request);
            $e->setResponse($response);
            
            throw $e;
        }

        return $response;
    }

    /**
     * @param string $token
     * 
     * @return string
     */
    public function getAuthorizeTokenUrl($token)
    {
        $host = $this->options['sandbox'] ? 'www.sandbox.paypal.com' : 'www.paypal.com';

        $query = array_filter(array(
            'useraction' => $this->options['useraction'],
            'cmd' => '_express-checkout',
            'token' => $token,
        ));

        return sprintf('https://%s/cgi-bin/webscr?%s', $host, http_build_query($query));
    }

    /**
     * @return string
     */
    protected function getApiEndpoint()
    {
        return $this->options['sandbox'] ?
            'https://api-3t.sandbox.paypal.com/nvp' :
            'https://api-3t.paypal.com/nvp'
        ;
    }

    /**
     * @param FormRequest $request
     */
    protected function addAuthorizeFields(FormRequest $request)
    {
        $request->setField('PWD', $this->options['password']);
        $request->setField('USER', $this->options['username']);
        $request->setField('SIGNATURE', $this->options['signature']);
    }

    /**
     * @param FormRequest $request
     */
    protected function addVersionField(FormRequest $request)
    {
        $request->setField('VERSION', self::VERSION);
    }

    /**
     * @return \Payum\Paypal\ExpressCheckout\Nvp\Bridge\Buzz\Response
     */
    protected function createResponse()
    {
        return new Response();
    }
}