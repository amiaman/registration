// app.js
// create our angular app and inject ngAnimate and ui-router
// =============================================================================
angular.module('formApp', ['ngAnimate', 'ui.router', 'ui.calendar'])

// configuring our routes
// =============================================================================
.config(function($stateProvider, $urlRouterProvider, $interpolateProvider) {

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

    $stateProvider

        // route to show our basic form (/form)
        .state('form', {
            url: '/form',
            templateUrl: 'views/form.html',
            controller: 'formController'
        })

        // nested states
        // each of these sections will have their own view
        // url will be /form/interests
        .state('form.license', {
            url: '/license',
            templateUrl: 'views/form-license.html'
        })

        // url will be nested (/form/profile)
        .state('form.profile', {
            url: '/profile',
            templateUrl: 'views/form-profile.html'
        })

        // url will be /form/payment
        .state('form.appointment', {
            url: '/appointment',
            templateUrl: 'views/form-appointment.html'
        })

        // url will be /form/success
        .state('form.success', {
            url: '/success',
            templateUrl: 'views/form-success.html'
        });

    // catch all route
    // send users to the form page
    $urlRouterProvider.otherwise('/form/license');
})

// our controller for the form
// =============================================================================
.controller('formController', function($scope, $http, $compile, $location, uiCalendarConfig) {

    $scope.formData = {};
    $scope.formData.profile = {};


    $scope.next = function(step){

        if(step == 1) 
        {

        }
        else if(step == 2)
        {

        }
    };

    // function to process the form
    $scope.processForm = function(isValid) {

    };

});