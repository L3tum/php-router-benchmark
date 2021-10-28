# Router Benchmark

To get straight to the results, follow this [Link](Results.md).

To view the Riaf framework, follow this [Link](https://github.com/L3tum/RiafCore).

## Running the benchmarks yourself

You can run these benchmarks yourself in two ways:

### Docker

In order to run it in a reproducible environment, build and run the docker image with
````shell
docker build -t routerbenchmark:local --build-arg ROUTES=1000 .
docker run --rm -it routerbenchmark:local benchmark-table
````
### Local

Requirements:
- ``make``
- ``php >=8.0``

Then simply do a ``make`` and it will automatically prepare and execute all benchmarks.

To only execute the router benchmarks run ``make prepare`` followed by `make benchmark-table`, which will print a nice graph as well.

## Contributing

If you want to add your own Router, or found an inconsistency/bug/improvement, then you're more than welcome to make a PR or open an issue.
For routers however I ask you to only add routers which support exact routing based on both method and URI. 
Removing either one of those is an obvious performance uplift that needs not be benchmarked.
