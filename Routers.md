# Different Routers Benchmarked with 10 Routes

## AltoRouter

````
| benchmark       | set                  | revs | its | mem_peak  | mode    |
+-----------------+----------------------+------+-----+-----------+---------+
| AltoRouterBench | Static Best Case     | 1000 | 100 | 884.712kb | 0.257μs |
| AltoRouterBench | Static Average Case  | 1000 | 100 | 884.712kb | 4.122μs |
| AltoRouterBench | Static Worst Case    | 1000 | 100 | 884.712kb | 8.805μs |
| AltoRouterBench | Dynamic Best Case    | 1000 | 100 | 884.720kb | 1.329μs |
| AltoRouterBench | Dynamic Average Case | 1000 | 100 | 884.720kb | 5.126μs |
| AltoRouterBench | Dynamic Worst Case   | 1000 | 100 | 884.720kb | 9.823μs |
````

## AphiriaRouter

````
| benchmark      | set                  | revs | its | mem_peak  | mode    |
+----------------+----------------------+------+-----+-----------+---------+
| AphiriaBench   | Static Best Case     | 1000 | 100 | 885.128kb | 0.921μs |
| AphiriaBench   | Static Average Case  | 1000 | 100 | 885.128kb | 0.897μs |
| AphiriaBench   | Static Worst Case    | 1000 | 100 | 885.128kb | 0.892μs |
| AphiriaBench   | Dynamic Best Case    | 1000 | 100 | 885.136kb | 1.296μs |
| AphiriaBench   | Dynamic Average Case | 1000 | 100 | 885.136kb | 1.299μs |
| AphiriaBench   | Dynamic Worst Case   | 1000 | 100 | 885.136kb | 1.311μs |
````

## BramusRouter

````
| benchmark         | set                  | revs | its | mem_peak  | mode    |
+-------------------+----------------------+------+-----+-----------+---------+
| BramusRouterBench | Static Best Case     | 1000 | 100 | 884.880kb | 4.247μs |
| BramusRouterBench | Static Average Case  | 1000 | 100 | 884.880kb | 4.254μs |
| BramusRouterBench | Static Worst Case    | 1000 | 100 | 884.880kb | 4.253μs |
| BramusRouterBench | Dynamic Best Case    | 1000 | 100 | 884.888kb | 4.243μs |
| BramusRouterBench | Dynamic Average Case | 1000 | 100 | 884.888kb | 4.282μs |
| BramusRouterBench | Dynamic Worst Case   | 1000 | 100 | 884.888kb | 4.312μs |
````

## Mezon (Scales really badly with number of routes, 100 Routes and times shot up to 4μs)

````
| benchmark      | set                  | revs | its | mem_peak  | mode    |
+----------------+----------------------+------+-----+-----------+---------+
| MezonBench     | Static Best Case     | 1000 | 100 | 885.128kb | 0.159μs |
| MezonBench     | Static Average Case  | 1000 | 100 | 885.128kb | 0.158μs |
| MezonBench     | Static Worst Case    | 1000 | 100 | 885.128kb | 0.158μs |
| MezonBench     | Dynamic Best Case    | 1000 | 100 | 885.136kb | 0.582μs |
| MezonBench     | Dynamic Average Case | 1000 | 100 | 885.136kb | 0.630μs |
| MezonBench     | Dynamic Worst Case   | 1000 | 100 | 885.136kb | 0.675μs |
````

## Symfony

````
| benchmark      | set                  | revs | its | mem_peak  | mode    |
+----------------+----------------------+------+-----+-----------+---------+
| SymfonyBench   | Static Best Case     | 1000 | 100 | 953.728kb | 0.264μs |
| SymfonyBench   | Static Average Case  | 1000 | 100 | 888.800kb | 0.280μs |
| SymfonyBench   | Static Worst Case    | 1000 | 100 | 888.800kb | 0.273μs |
| SymfonyBench   | Dynamic Best Case    | 1000 | 100 | 888.808kb | 0.674μs |
| SymfonyBench   | Dynamic Average Case | 1000 | 100 | 888.808kb | 0.680μs |
| SymfonyBench   | Dynamic Worst Case   | 1000 | 100 | 888.808kb | 0.686μs |
````

## FastRoute

````
| benchmark      | set                  | revs | its | mem_peak  | mode    |
+----------------+----------------------+------+-----+-----------+---------+
| FastRouteBench | Static Best Case     | 1000 | 100 | 888.808kb | 0.103μs |
| FastRouteBench | Static Average Case  | 1000 | 100 | 888.808kb | 0.092μs |
| FastRouteBench | Static Worst Case    | 1000 | 100 | 888.808kb | 0.092μs |
| FastRouteBench | Dynamic Best Case    | 1000 | 100 | 888.816kb | 0.419μs |
| FastRouteBench | Dynamic Average Case | 1000 | 100 | 888.816kb | 0.450μs |
| FastRouteBench | Dynamic Worst Case   | 1000 | 100 | 888.816kb | 0.507μs |
````

## RiafRouter

````
| benchmark      | set                  | revs | its | mem_peak  | mode    |
+----------------+----------------------+------+-----+-----------+---------+
| RiafBench      | Static Best Case     | 1000 | 100 | 888.800kb | 0.043μs |
| RiafBench      | Static Average Case  | 1000 | 100 | 888.800kb | 0.044μs |
| RiafBench      | Static Worst Case    | 1000 | 100 | 888.800kb | 0.043μs |
| RiafBench      | Dynamic Best Case    | 1000 | 100 | 888.808kb | 0.260μs |
| RiafBench      | Dynamic Average Case | 1000 | 100 | 888.808kb | 0.277μs |
| RiafBench      | Dynamic Worst Case   | 1000 | 100 | 888.808kb | 0.275μs |
````

