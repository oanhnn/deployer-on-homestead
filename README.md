Deployer on Homestead
====

An example about using [Deployer][] to deploy [Laravel][] application on [Homestead][]

How to use
---

1. Clone this project and run `composer install`
2. Copy your public key and private key to `./key`
3. Change `Homestead.yaml` and `deploy.php` for your project
4. Run deployer

   ```
   $ vagrant up
   $ vagrant ssh
   $ cd /home/vagrant/deployer-on-homestead
   $ ./vendor/bin/dep deploy <stage>
   ```

**Goodluck!** :smile:

All source code is available in [here][example-source]


[Homestead]: https://laravel.com/docs/5.2/homestead
[Laravel]:   https://laravel.com/
[Deployer]:  http://deployer.org/
[document]:  https://github.com/oanhnn/deployer-example/blob/master/docs/run-deployer-on-homestead.md