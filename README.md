# schmitt.co

## Installation

``` bash
git clone --recursive https://github.com/pschmitt/schmitt.co.git ~http/schmitt.co
cd ~http/schmitt.co/plugins/pico_analytics
git pull
```

## Update

``` bash
cd ~http/schmitt.co
git pull
git submodule update --init --recursive
git submodule foreach --recursive "git checkout master; git pull"
```
