<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace worteks\humhub\authclient;

use humhub\modules\user\authclient\interfaces\ApprovalBypass;

/**
 * OIDC authentication client
 *
 * @since 0.1
 */
class OIDC extends \worteks\yii\authclient\OIDC implements ApprovalBypass
{
    public $cssIcon = 'fa fa-sign-in';

    /**
     * @inheritdoc
     */
    protected function defaultViewOptions()
    {
      return [
        'cssIcon' => $this->cssIcon,
        'buttonBackgroundColor' => '#4078C0',
      ];
    }

    /**
     * @inheritdoc
     */
    protected function defaultNormalizeUserAttributeMap()
    {
      return [
        'id' => 'sub',
        'username' => 'sub',
        'firstname' => 'given_name',
        'lastname' => 'family_name'
      ];
    }
}
