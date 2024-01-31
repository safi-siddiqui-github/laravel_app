// vite.config.js
import { defineConfig, resolveConfig } from "file:///C:/laragon/www/laravel_app/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/laravel_app/node_modules/laravel-vite-plugin/dist/index.js";
import vue from "file:///C:/laragon/www/laravel_app/node_modules/@vitejs/plugin-vue/dist/index.mjs";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: ["resources/js/app.js"],
      refresh: true
    }),
    vue({
      template: {
        transformAssetUrls: {
          // The Vue plugin will re-write asset URLs, when referenced
          // in Single File Components, to point to the Laravel web
          // server. Setting this to `null` allows the Laravel plugin
          // to instead re-write asset URLs to point to the Vite
          // server instead.
          base: null,
          // The Vue plugin will parse absolute URLs and treat them
          // as absolute paths to files on disk. Setting this to
          // `false` will leave absolute URLs un-touched so they can
          // reference assets in the public directory as expected.
          includeAbsolute: false
        }
      }
    })
    // resolveConfig({
    //     resolve: {
    //         alias: {
    //             '@': '/resources/js/Pages/'
    //         }
    //     }
    // })
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxsYXJhdmVsX2FwcFwiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiQzpcXFxcbGFyYWdvblxcXFx3d3dcXFxcbGFyYXZlbF9hcHBcXFxcdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL0M6L2xhcmFnb24vd3d3L2xhcmF2ZWxfYXBwL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnLCByZXNvbHZlQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCB2dWUgZnJvbSAnQHZpdGVqcy9wbHVnaW4tdnVlJ1xuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoe1xuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogWydyZXNvdXJjZXMvanMvYXBwLmpzJ10sXG4gICAgICAgICAgICByZWZyZXNoOiB0cnVlLFxuICAgICAgICB9KSxcbiAgICAgICAgdnVlKHtcbiAgICAgICAgICAgIHRlbXBsYXRlOiB7XG4gICAgICAgICAgICAgICAgdHJhbnNmb3JtQXNzZXRVcmxzOiB7XG4gICAgICAgICAgICAgICAgICAgIC8vIFRoZSBWdWUgcGx1Z2luIHdpbGwgcmUtd3JpdGUgYXNzZXQgVVJMcywgd2hlbiByZWZlcmVuY2VkXG4gICAgICAgICAgICAgICAgICAgIC8vIGluIFNpbmdsZSBGaWxlIENvbXBvbmVudHMsIHRvIHBvaW50IHRvIHRoZSBMYXJhdmVsIHdlYlxuICAgICAgICAgICAgICAgICAgICAvLyBzZXJ2ZXIuIFNldHRpbmcgdGhpcyB0byBgbnVsbGAgYWxsb3dzIHRoZSBMYXJhdmVsIHBsdWdpblxuICAgICAgICAgICAgICAgICAgICAvLyB0byBpbnN0ZWFkIHJlLXdyaXRlIGFzc2V0IFVSTHMgdG8gcG9pbnQgdG8gdGhlIFZpdGVcbiAgICAgICAgICAgICAgICAgICAgLy8gc2VydmVyIGluc3RlYWQuXG4gICAgICAgICAgICAgICAgICAgIGJhc2U6IG51bGwsXG5cbiAgICAgICAgICAgICAgICAgICAgLy8gVGhlIFZ1ZSBwbHVnaW4gd2lsbCBwYXJzZSBhYnNvbHV0ZSBVUkxzIGFuZCB0cmVhdCB0aGVtXG4gICAgICAgICAgICAgICAgICAgIC8vIGFzIGFic29sdXRlIHBhdGhzIHRvIGZpbGVzIG9uIGRpc2suIFNldHRpbmcgdGhpcyB0b1xuICAgICAgICAgICAgICAgICAgICAvLyBgZmFsc2VgIHdpbGwgbGVhdmUgYWJzb2x1dGUgVVJMcyB1bi10b3VjaGVkIHNvIHRoZXkgY2FuXG4gICAgICAgICAgICAgICAgICAgIC8vIHJlZmVyZW5jZSBhc3NldHMgaW4gdGhlIHB1YmxpYyBkaXJlY3RvcnkgYXMgZXhwZWN0ZWQuXG4gICAgICAgICAgICAgICAgICAgIGluY2x1ZGVBYnNvbHV0ZTogZmFsc2UsXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIH0sXG4gICAgICAgIH0pLFxuICAgICAgICAvLyByZXNvbHZlQ29uZmlnKHtcbiAgICAgICAgLy8gICAgIHJlc29sdmU6IHtcbiAgICAgICAgLy8gICAgICAgICBhbGlhczoge1xuICAgICAgICAvLyAgICAgICAgICAgICAnQCc6ICcvcmVzb3VyY2VzL2pzL1BhZ2VzLydcbiAgICAgICAgLy8gICAgICAgICB9XG4gICAgICAgIC8vICAgICB9XG4gICAgICAgIC8vIH0pXG4gICAgXSxcbn0pO1xuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUF3USxTQUFTLGNBQWMscUJBQXFCO0FBQ3BULE9BQU8sYUFBYTtBQUNwQixPQUFPLFNBQVM7QUFFaEIsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTyxDQUFDLHFCQUFxQjtBQUFBLE1BQzdCLFNBQVM7QUFBQSxJQUNiLENBQUM7QUFBQSxJQUNELElBQUk7QUFBQSxNQUNBLFVBQVU7QUFBQSxRQUNOLG9CQUFvQjtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQSxVQU1oQixNQUFNO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQSxVQU1OLGlCQUFpQjtBQUFBLFFBQ3JCO0FBQUEsTUFDSjtBQUFBLElBQ0osQ0FBQztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUEsRUFRTDtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
