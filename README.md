<div align="center">

# getwarp/command-bus

Simple and extendable command bus

[GitHub][link-github] •
[Packagist][link-packagist] •
[Installation](#installation) •
[Usage](#usage)

</div>

## Installation

Via Composer

```bash
$ composer require getwarp/command-bus
```

## Usage

```php
use Warp\CommandBus\CommandBus;
use Warp\CommandBus\Mapping\MapByStaticList;

class MyCommand
{
}

class MyCommandHandler
{
    public function handle(MyCommand $command)
    {
        // Do your job to handle a command
    }
}

$commandBus = new CommandBus(new MapByStaticList([
    MyCommand::class => [MyCommandHandler::class, 'handle'],
]));

$commandBus->handle(new MyCommand());
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

[Report issues][link-issues] and [send pull requests][link-pulls] in the [main Warp repository][link-monorepo]. Please
see [contributing guide][link-contributing] and [code of conduct][link-code-of-conduct] for details.

## Credits

- [Constantine Karnaukhov][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [license file](LICENSE.md) for more information.

[link-github]: https://github.com/getwarp/command-bus
[link-packagist]: https://packagist.org/packages/getwarp/command-bus
[link-author]: https://github.com/hustlahusky
[link-contributors]: ../../contributors
[link-monorepo]: https://github.com/getwarp/warp
[link-issues]: https://github.com/getwarp/warp/issues
[link-pulls]: https://github.com/getwarp/warp/pulls
[link-contributing]: https://github.com/getwarp/warp/blob/2.5.x/CONTRIBUTING.md
[link-code-of-conduct]: https://github.com/getwarp/.github/blob/main/CODE_OF_CONDUCT.md
