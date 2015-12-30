// Main viewmodel class
define([
    'knockout-3.4.0'
], function(ko) {
    "use strict";

    function appViewModel() {
        var self = this;

        self.txtNote = ko.observable('Note');
        self.txtProjectName = ko.observable('Untitled Project');
        self.uploadedFile = ko.observable('');
        self.selectableRegards = ko.observableArray([
            'The Spec',
            'Bugs/Issues',
            'Feature Request',
            'Documentation',
            'User Stories',
            'Edge/Corner/Test Cases',
            'Archive',
            'Examples',
            'Proof-of-Concept',
            'Mockup',
            'Site Artwork'
        ]);

        self.selectableTypes = ko.observableArray([
            'Site Artwork',
            'Screenshot',
            'Document',
            'Source File',
            'Media',
            'Other'
        ]);

        self.firstNameCaps = ko.pureComputed(function() {
            return this.firstName().toUpperCase();
        }, this);
    }

    return appViewModel;
});