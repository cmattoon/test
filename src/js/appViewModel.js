// Main viewmodel class
define([
    'knockout-3.4.0'
], function(ko) {
    "use strict";

    function appViewModel() {
        var self = this;
        self.txtNote = ko.observable('Note');
        this.firstNameCaps = ko.pureComputed(function() {
            return this.firstName().toUpperCase();
        }, this);
    }

    return appViewModel;
});