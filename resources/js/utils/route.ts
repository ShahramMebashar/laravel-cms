import { Ziggy } from "@/ziggy";
import type { Config, RouteParam, RouteParamsWithQueryOverload } from "ziggy-js";
import route from '../../../vendor/tightenco/ziggy/dist/index.m';

const routes = {...Ziggy.routes } as const;

type Keys = keyof typeof routes;

export default function (name: Keys, params?: RouteParamsWithQueryOverload | RouteParam, absolute?: boolean, config?: Config, ) {
    return route(name, params, absolute, config);
}