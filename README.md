# schmitt.co

## Installation

```
git clone --recursive https://github.com/pschmitt/schmitt.co.git ~http/schmitt.co
cd ~http/schmitt.co/plugins/pico_analytics
git checkout new_analytics_js
git pull
```

## Update

```
cd ~http/schmitt.co
git pull
git submodule --init --recursive
git submodule foreach --recursive "git checkout master; git pull"
cd ~http/schmitt.co/plugins/pico_analytics
git checkout new_analytics_js
git pull
```
