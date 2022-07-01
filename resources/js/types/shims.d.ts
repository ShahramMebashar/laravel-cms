import { Config, Router, RouteParamsWithQueryOverload, Route } from "@types/ziggy-js";

declare global {
    // function route(): Router;
    // function route(name: string, params?: RouteParamsWithQueryOverload, absolute?: boolean, customZiggy?: Config): string;
    interface Window {
        Ziggy
    }
}