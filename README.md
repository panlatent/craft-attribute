# Craft Attribute

Using PHP Attribute in CraftCMS.

Installation
------------

Then tell Composer to load the library:

```bash
composer require panlatent/craft-attribute
```

Usages
------

### Controllers

For Web Controllers, you can inherit `panlatent\craft\attribute\web\Controller` or use Trait `panlatent\craft\attribute\web\HasAttributes` to use these attributes:

| Attribute             | Targets          | Scopes | 
|-----------------------|------------------|--------|
| #[AllowAnonymous]     | Controller       | Class  |
| #[RequireLogin]       | ControllerAction | Method |                                                                                     
| #[RequirePostRequest] | ControllerAction | Method |                                                                                     
| #[RequireAcceptsJson] | ControllerAction | Method |

### Elements




Documentation
------------

License
-------
The Element Messages is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
