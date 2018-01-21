1. Download or _**git clone https://github.com/vuras/property_list**_ to drupal/modules directory.
2. Run _**composer update**_
3. Login to Drupal Administration panel.
4. Go to Extend section.
5. Install Custom/Property List module.
6. Set properties per page(**default=10**) if needed in Configuration->Media->Property Module settings.
7. Go to **/properties/list** to see property list page.
8. To run test on Windows go to **drupal/core** directory and run command _**..\vendor\phpunit\phpunit\phpunit --group property_list**_
