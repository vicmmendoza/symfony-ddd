Feature: Create new device
    In order to have devices
    I want to create a new device

    Scenario: A valid non existing device
        Given I make a PUT request to "/devices/90dc55b0-abc0-11ec-b909-0242ac120002" with body
        """
        {
            "name": "Víctor Mendoza",
            "mac_address": "2B-45-B8-65-0B-7F"
        }
        """
        Then the response content should be empty
        And the response status code should be 201