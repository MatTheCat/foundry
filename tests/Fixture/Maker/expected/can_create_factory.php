<?php

/*
 * This file is part of the zenstruck/foundry package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Factory\Category;

use Doctrine\ORM\EntityRepository;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Persistence\ProxyRepositoryDecorator;
use Zenstruck\Foundry\Tests\Fixture\Entity\Category\StandardCategory;

/**
 * @extends PersistentProxyObjectFactory<StandardCategory>
 *
 * @method        StandardCategory|Proxy                    create(array|callable $attributes = [])
 * @method static StandardCategory|Proxy                    createOne(array $attributes = [])
 * @method static StandardCategory|Proxy                    find(object|array|mixed $criteria)
 * @method static StandardCategory|Proxy                    findOrCreate(array $attributes)
 * @method static StandardCategory|Proxy                    first(string $sortedField = 'id')
 * @method static StandardCategory|Proxy                    last(string $sortedField = 'id')
 * @method static StandardCategory|Proxy                    random(array $attributes = [])
 * @method static StandardCategory|Proxy                    randomOrCreate(array $attributes = [])
 * @method static EntityRepository|ProxyRepositoryDecorator repository()
 * @method static StandardCategory[]|Proxy[]                all()
 * @method static StandardCategory[]|Proxy[]                createMany(int $number, array|callable $attributes = [])
 * @method static StandardCategory[]|Proxy[]                createSequence(iterable|callable $sequence)
 * @method static StandardCategory[]|Proxy[]                findBy(array $attributes)
 * @method static StandardCategory[]|Proxy[]                randomRange(int $min, int $max, array $attributes = [])
 * @method static StandardCategory[]|Proxy[]                randomSet(int $number, array $attributes = [])
 */
final class StandardCategoryFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return StandardCategory::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'name' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(StandardCategory $standardCategory): void {})
        ;
    }
}