define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'foopaypod',
                component: 'Codelegacy_FooCode/js/view/payment/method-renderer/foopaypod'
            }
        );
        return Component.extend({});
    }
);