import { Ziggy } from "@/ziggy";
import type { Config, RouteParam, RouteParamsWithQueryOverload, Router } from "ziggy-js";
import route from '../../../vendor/tightenco/ziggy/dist/index.m';

const routes = {...Ziggy.routes } as const;

type Keys = keyof typeof routes;

export default function (name?: Keys | undefined, params?: RouteParamsWithQueryOverload | RouteParam | undefined, absolute?: boolean | undefined, config?: Config | undefined, ) {
    return route(name, params, absolute, config);
}