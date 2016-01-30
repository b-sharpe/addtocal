<?php /**
 * @file
 * Contains \Drupal\addtocal\Plugin\Field\FieldFormatter\AddtocalView.
 */

namespace Drupal\addtocal\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;

/**
 * @FieldFormatter(
 *  id = "addtocal_view",
 *  label = @Translation("Add to Cal"),
 *  field_types = {"date&quot;, &quot;datestamp&quot;, &quot;datetime"}
 * )
 */
class AddtocalView extends FormatterBase {

  /**
   * @FIXME
   * Move all logic relating to the addtocal_view formatter into this
   * class. For more information, see:
   *
   * https://www.drupal.org/node/1805846
   * https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Field%21FormatterInterface.php/interface/FormatterInterface/8
   * https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Field%21FormatterBase.php/class/FormatterBase/8
   */

}
