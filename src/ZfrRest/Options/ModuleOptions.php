<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ZfrRest\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * @author Michaël Gallego <mic.gallego@gmail.com>
 * @licence MIT
 */
class ModuleOptions extends AbstractOptions
{
    /**
     * Key of the object manager fetched from service locator
     *
     * @var string
     */
    protected $objectManager;

    /**
     * FQCN of the cache driver to use for the metadata
     *
     * @var string
     */
    protected $cache;

    /**
     * Options for all drivers
     *
     * @var DriverOptions[]
     */
    protected $drivers;

    /**
     * Set the object manager key
     *
     * @param  string $objectManager
     * @return void
     */
    public function setObjectManager($objectManager)
    {
        $this->objectManager = (string) $objectManager;
    }

    /**
     * Get the object manager key
     *
     * @return string
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    /**
     * @param  string $cache
     * @return void
     */
    public function setCache($cache)
    {
        $this->cache = (string) $cache;
    }

    /**
     * @return string
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * @param  array $drivers
     * @return void
     */
    public function setDrivers($drivers)
    {
        foreach ($drivers as $driverOptions) {
            $this->drivers[] = new DriverOptions($driverOptions);
        }
    }

    /**
     * @return DriverOptions[]
     */
    public function getDrivers()
    {
        return $this->drivers;
    }
}