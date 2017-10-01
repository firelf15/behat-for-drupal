<?php

use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawDrupalContext implements SnippetAcceptingContext {

  /**
   * Initializes context.
   *
   * Every scenario gets its own context instance.
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
  public function __construct() {
  }


    /**
     * @Then I should see the :arg1 button in the :arg2
     */
    public function iShouldSeeTheButtonInThe($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see the :arg1 element in the :arg2
     */
    public function iShouldSeeTheElementInThe($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I should not see the :arg1 element in the :arg2
     */
    public function iShouldNotSeeTheElementInThe($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I should not see :arg1 in the :arg2 element in the :arg3
     */
    public function iShouldNotSeeInTheElementInThe($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see the :arg1 element with the :arg2 attribute set to :arg3 in the :arg4 region
     */
    public function iShouldSeeTheElementWithTheAttributeSetToInTheRegion($arg1, $arg2, $arg3, $arg4)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see :arg1 in the :arg2 element with the :arg3 attribute set
     */
    public function iShouldSeeInTheElementWithTheAttributeSet($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }
}
