@api
Feature: Test account menu links

Scenario: Make sure that anonymous users see the account menu
  Given I am not logged in
  And I am on "/"
  Then I should see the link "Log in" in the "header" region

Scenario: Make sure admin login working
    Given I am logged in as a user with the "administrator" role
    And I am on "/admin/content"
    Then I should see the link "Add content"
