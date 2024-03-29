<!DOCTYPE html>
<!--[if IE 7 ]> <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-US" data-head-attrs=""> <!--<![endif]-->
<!DOCTYPE html>
<html lang="en-US" data-head-attrs=""> <!-- -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# : http://ogp.me/ns/fb/#">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta charset="utf-8">
    <script type="text/javascript">
        (window.NREUM || (NREUM = {})).init = {
            privacy: {
                cookies_enabled: false
            },
            ajax: {
                deny_list: []
            }
        };
        (window.NREUM || (NREUM = {})).loader_config = {
            xpid: "VgUFVldbGwsFU1BRDwUBVw==",
            licenseKey: "e7fb1b89a0",
            applicationID: "857138461"
        };; /*! For license information please see nr-loader-full-1.253.0.min.js.LICENSE.txt */
        (() => {
            var e, t, r = {
                    234: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            P_: () => v,
                            Mt: () => b,
                            C5: () => s,
                            DL: () => A,
                            OP: () => D,
                            lF: () => O,
                            Yu: () => E,
                            Dg: () => m,
                            CX: () => c,
                            GE: () => w,
                            sU: () => C
                        });
                        var n = r(8632),
                            o = r(9567);
                        const i = {
                                beacon: n.ce.beacon,
                                errorBeacon: n.ce.errorBeacon,
                                licenseKey: void 0,
                                applicationID: void 0,
                                sa: void 0,
                                queueTime: void 0,
                                applicationTime: void 0,
                                ttGuid: void 0,
                                user: void 0,
                                account: void 0,
                                product: void 0,
                                extra: void 0,
                                jsAttributes: {},
                                userAttributes: void 0,
                                atts: void 0,
                                transactionName: void 0,
                                tNamePlain: void 0
                            },
                            a = {};

                        function s(e) {
                            if (!e) throw new Error("All info objects require an agent identifier!");
                            if (!a[e]) throw new Error("Info for ".concat(e, " was never set"));
                            return a[e]
                        }

                        function c(e, t) {
                            if (!e) throw new Error("All info objects require an agent identifier!");
                            a[e] = (0, o.D)(t, i);
                            const r = (0, n.ek)(e);
                            r && (r.info = a[e])
                        }
                        const d = e => {
                            if (!e || "string" != typeof e) return !1;
                            try {
                                document.createDocumentFragment().querySelector(e)
                            } catch {
                                return !1
                            }
                            return !0
                        };
                        var u = r(7056),
                            l = r(50);
                        const f = "[data-nr-mask]",
                            h = () => {
                                const e = {
                                    mask_selector: "*",
                                    block_selector: "[data-nr-block]",
                                    mask_input_options: {
                                        color: !1,
                                        date: !1,
                                        "datetime-local": !1,
                                        email: !1,
                                        month: !1,
                                        number: !1,
                                        range: !1,
                                        search: !1,
                                        tel: !1,
                                        text: !1,
                                        time: !1,
                                        url: !1,
                                        week: !1,
                                        textarea: !1,
                                        select: !1,
                                        password: !0
                                    }
                                };
                                return {
                                    feature_flags: [],
                                    proxy: {
                                        assets: void 0,
                                        beacon: void 0
                                    },
                                    privacy: {
                                        cookies_enabled: !0
                                    },
                                    ajax: {
                                        deny_list: void 0,
                                        block_internal: !0,
                                        enabled: !0,
                                        harvestTimeSeconds: 10,
                                        autoStart: !0
                                    },
                                    distributed_tracing: {
                                        enabled: void 0,
                                        exclude_newrelic_header: void 0,
                                        cors_use_newrelic_header: void 0,
                                        cors_use_tracecontext_headers: void 0,
                                        allowed_origins: void 0
                                    },
                                    session: {
                                        domain: void 0,
                                        expiresMs: u.oD,
                                        inactiveMs: u.Hb
                                    },
                                    ssl: void 0,
                                    obfuscate: void 0,
                                    jserrors: {
                                        enabled: !0,
                                        harvestTimeSeconds: 10,
                                        autoStart: !0
                                    },
                                    metrics: {
                                        enabled: !0,
                                        autoStart: !0
                                    },
                                    page_action: {
                                        enabled: !0,
                                        harvestTimeSeconds: 30,
                                        autoStart: !0
                                    },
                                    page_view_event: {
                                        enabled: !0,
                                        autoStart: !0
                                    },
                                    page_view_timing: {
                                        enabled: !0,
                                        harvestTimeSeconds: 30,
                                        long_task: !1,
                                        autoStart: !0
                                    },
                                    session_trace: {
                                        enabled: !0,
                                        harvestTimeSeconds: 10,
                                        autoStart: !0
                                    },
                                    harvest: {
                                        tooManyRequestsDelay: 60
                                    },
                                    session_replay: {
                                        autoStart: !0,
                                        enabled: !1,
                                        harvestTimeSeconds: 60,
                                        preload: !1,
                                        sampling_rate: 10,
                                        error_sampling_rate: 100,
                                        collect_fonts: !1,
                                        inline_images: !1,
                                        inline_stylesheet: !0,
                                        mask_all_inputs: !0,
                                        get mask_text_selector() {
                                            return e.mask_selector
                                        },
                                        set mask_text_selector(t) {
                                            d(t) ? e.mask_selector = "".concat(t, ",").concat(f) : "" === t || null === t ? e.mask_selector = f : (0, l.Z)("An invalid session_replay.mask_selector was provided. '*' will be used.", t)
                                        },
                                        get block_class() {
                                            return "nr-block"
                                        },
                                        get ignore_class() {
                                            return "nr-ignore"
                                        },
                                        get mask_text_class() {
                                            return "nr-mask"
                                        },
                                        get block_selector() {
                                            return e.block_selector
                                        },
                                        set block_selector(t) {
                                            d(t) ? e.block_selector += ",".concat(t) : "" !== t && (0, l.Z)("An invalid session_replay.block_selector was provided and will not be used", t)
                                        },
                                        get mask_input_options() {
                                            return e.mask_input_options
                                        },
                                        set mask_input_options(t) {
                                            t && "object" == typeof t ? e.mask_input_options = {
                                                ...t,
                                                password: !0
                                            } : (0, l.Z)("An invalid session_replay.mask_input_option was provided and will not be used", t)
                                        }
                                    },
                                    spa: {
                                        enabled: !0,
                                        harvestTimeSeconds: 10,
                                        autoStart: !0
                                    },
                                    soft_navigations: {
                                        enabled: !0,
                                        harvestTimeSeconds: 10,
                                        autoStart: !0
                                    }
                                }
                            },
                            p = {},
                            g = "All configuration objects require an agent identifier!";

                        function v(e) {
                            if (!e) throw new Error(g);
                            if (!p[e]) throw new Error("Configuration for ".concat(e, " was never set"));
                            return p[e]
                        }

                        function m(e, t) {
                            if (!e) throw new Error(g);
                            p[e] = (0, o.D)(t, h());
                            const r = (0, n.ek)(e);
                            r && (r.init = p[e])
                        }

                        function b(e, t) {
                            if (!e) throw new Error(g);
                            var r = v(e);
                            if (r) {
                                for (var n = t.split("."), o = 0; o < n.length - 1; o++)
                                    if ("object" != typeof(r = r[n[o]])) return;
                                r = r[n[n.length - 1]]
                            }
                            return r
                        }
                        const y = {
                                accountID: void 0,
                                trustKey: void 0,
                                agentID: void 0,
                                licenseKey: void 0,
                                applicationID: void 0,
                                xpid: void 0
                            },
                            x = {};

                        function A(e) {
                            if (!e) throw new Error("All loader-config objects require an agent identifier!");
                            if (!x[e]) throw new Error("LoaderConfig for ".concat(e, " was never set"));
                            return x[e]
                        }

                        function w(e, t) {
                            if (!e) throw new Error("All loader-config objects require an agent identifier!");
                            x[e] = (0, o.D)(t, y);
                            const r = (0, n.ek)(e);
                            r && (r.loader_config = x[e])
                        }
                        const E = (0, n.mF)().o;
                        var _ = r(385),
                            S = r(6818);
                        const R = {
                                buildEnv: S.Re,
                                customTransaction: void 0,
                                disabled: !1,
                                distMethod: S.gF,
                                isolatedBacklog: !1,
                                loaderType: void 0,
                                maxBytes: 3e4,
                                offset: Math.floor(_._A?.performance?.timeOrigin || _._A?.performance?.timing?.navigationStart || Date.now()),
                                onerror: void 0,
                                origin: "" + _._A.location,
                                ptid: void 0,
                                releaseIds: {},
                                session: void 0,
                                xhrWrappable: "function" == typeof _._A.XMLHttpRequest?.prototype?.addEventListener,
                                version: S.q4,
                                denyList: void 0
                            },
                            T = {};

                        function D(e) {
                            if (!e) throw new Error("All runtime objects require an agent identifier!");
                            if (!T[e]) throw new Error("Runtime for ".concat(e, " was never set"));
                            return T[e]
                        }

                        function C(e, t) {
                            if (!e) throw new Error("All runtime objects require an agent identifier!");
                            T[e] = (0, o.D)(t, R);
                            const r = (0, n.ek)(e);
                            r && (r.runtime = T[e])
                        }

                        function O(e) {
                            return function(e) {
                                try {
                                    const t = s(e);
                                    return !!t.licenseKey && !!t.errorBeacon && !!t.applicationID
                                } catch (e) {
                                    return !1
                                }
                            }(e)
                        }
                    },
                    9567: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            D: () => o
                        });
                        var n = r(50);

                        function o(e, t) {
                            try {
                                if (!e || "object" != typeof e) return (0, n.Z)("Setting a Configurable requires an object as input");
                                if (!t || "object" != typeof t) return (0, n.Z)("Setting a Configurable requires a model to set its initial properties");
                                const r = Object.create(Object.getPrototypeOf(t), Object.getOwnPropertyDescriptors(t)),
                                    i = 0 === Object.keys(r).length ? e : r;
                                for (let a in i)
                                    if (void 0 !== e[a]) try {
                                        Array.isArray(e[a]) && Array.isArray(t[a]) ? r[a] = Array.from(new Set([...e[a], ...t[a]])) : "object" == typeof e[a] && "object" == typeof t[a] ? r[a] = o(e[a], t[a]) : r[a] = e[a]
                                    } catch (e) {
                                        (0, n.Z)("An error occurred while setting a property of a Configurable", e)
                                    }
                                return r
                            } catch (e) {
                                (0, n.Z)("An error occured while setting a Configurable", e)
                            }
                        }
                    },
                    6818: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            Re: () => o,
                            gF: () => i,
                            lF: () => a,
                            q4: () => n
                        });
                        const n = "1.253.0",
                            o = "PROD",
                            i = "CDN",
                            a = "2.0.0-alpha.11"
                    },
                    385: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            FN: () => s,
                            IF: () => u,
                            Nk: () => f,
                            Tt: () => c,
                            _A: () => i,
                            cv: () => h,
                            iS: () => a,
                            il: () => n,
                            ux: () => d,
                            v6: () => o,
                            w1: () => l
                        });
                        const n = "undefined" != typeof window && !!window.document,
                            o = "undefined" != typeof WorkerGlobalScope && ("undefined" != typeof self && self instanceof WorkerGlobalScope && self.navigator instanceof WorkerNavigator || "undefined" != typeof globalThis && globalThis instanceof WorkerGlobalScope && globalThis.navigator instanceof WorkerNavigator),
                            i = n ? window : "undefined" != typeof WorkerGlobalScope && ("undefined" != typeof self && self instanceof WorkerGlobalScope && self || "undefined" != typeof globalThis && globalThis instanceof WorkerGlobalScope && globalThis),
                            a = Boolean("hidden" === i?.document?.visibilityState),
                            s = "" + i?.location,
                            c = /iPad|iPhone|iPod/.test(i.navigator?.userAgent),
                            d = c && "undefined" == typeof SharedWorker,
                            u = (() => {
                                const e = i.navigator?.userAgent?.match(/Firefox[/\s](\d+\.\d+)/);
                                return Array.isArray(e) && e.length >= 2 ? +e[1] : 0
                            })(),
                            l = Boolean(n && window.document.documentMode),
                            f = !!i.navigator?.sendBeacon,
                            h = Math.floor(i?.performance?.timeOrigin || i?.performance?.timing?.navigationStart || Date.now())
                    },
                    9907: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            A: () => n
                        });
                        class n {
                            constructor(e) {
                                this.contextId = e
                            }
                        }
                    },
                    8929: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            v: () => a
                        });
                        var n = r(8632);
                        const o = (0, r(4402).Rl)();
                        var i = r(9907);
                        class a {
                            static contextId = "nr@context:".concat(o);
                            static contextOriginalId = "nr@original:".concat(o);
                            static contextWrappedId = "nr@wrapped:".concat(a.contextId);
                            static getObservationContextByAgentIdentifier(e) {
                                const t = (0, n.fP)();
                                return Object.keys(t?.initializedAgents || {}).indexOf(e) > -1 ? t.initializedAgents[e].observationContext : void 0
                            }
                            #e = new WeakMap;
                            getCreateContext(e) {
                                return this.#e.has(e) || this.#e.set(e, new i.A), this.#e.get(e)
                            }
                            setContext(e, t) {
                                return this.#e.set(e, t), this.#e.get(e)
                            }
                        }
                    },
                    1117: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            w: () => i
                        });
                        var n = r(50);
                        const o = {
                            agentIdentifier: "",
                            ee: void 0
                        };
                        class i {
                            constructor(e) {
                                try {
                                    if ("object" != typeof e) return (0, n.Z)("shared context requires an object as input");
                                    this.sharedContext = {}, Object.assign(this.sharedContext, o), Object.entries(e).forEach((e => {
                                        let [t, r] = e;
                                        Object.keys(o).includes(t) && (this.sharedContext[t] = r)
                                    }))
                                } catch (e) {
                                    (0, n.Z)("An error occured while setting SharedContext", e)
                                }
                            }
                        }
                    },
                    8e3: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            L: () => u,
                            R: () => c
                        });
                        var n = r(2177),
                            o = r(1284),
                            i = r(4322),
                            a = r(3325);
                        const s = {};

                        function c(e, t) {
                            const r = {
                                staged: !1,
                                priority: a.p[t] || 0
                            };
                            d(e), s[e].get(t) || s[e].set(t, r)
                        }

                        function d(e) {
                            e && (s[e] || (s[e] = new Map))
                        }

                        function u() {
                            let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "feature",
                                r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
                            if (d(e), !e || !s[e].get(t) || r) return c(t);
                            s[e].get(t).staged = !0;
                            const a = [...s[e]];

                            function c(t) {
                                const r = e ? n.ee.get(e) : n.ee,
                                    a = i.X.handlers;
                                if (r.backlog && a) {
                                    var s = r.backlog[t],
                                        c = a[t];
                                    if (c) {
                                        for (var d = 0; s && d < s.length; ++d) l(s[d], c);
                                        (0, o.D)(c, (function(e, t) {
                                            (0, o.D)(t, (function(t, r) {
                                                r[0].on(e, r[1])
                                            }))
                                        }))
                                    }
                                    delete a[t], r.backlog[t] = null, r.emit("drain-" + t, [])
                                }
                            }
                            a.every((e => {
                                let [t, r] = e;
                                return r.staged
                            })) && (a.sort(((e, t) => e[1].priority - t[1].priority)), a.forEach((t => {
                                let [r] = t;
                                s[e].delete(r), c(r)
                            })))
                        }

                        function l(e, t) {
                            var r = e[1];
                            (0, o.D)(t[r], (function(t, r) {
                                var n = e[0];
                                if (r[0] === n) {
                                    var o = r[1],
                                        i = e[3],
                                        a = e[2];
                                    o.apply(i, a)
                                }
                            }))
                        }
                    },
                    2177: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            ee: () => c
                        });
                        var n = r(8632),
                            o = r(2210),
                            i = r(234),
                            a = r(9907),
                            s = r(8929);
                        const c = function e(t, r) {
                                var n = {},
                                    d = {},
                                    l = {},
                                    f = !1;
                                try {
                                    f = 16 === r.length && (0, i.OP)(r).isolatedBacklog
                                } catch (e) {}
                                var h = {
                                    on: g,
                                    addEventListener: g,
                                    removeEventListener: function(e, t) {
                                        var r = n[e];
                                        if (!r) return;
                                        for (var o = 0; o < r.length; o++) r[o] === t && r.splice(o, 1)
                                    },
                                    emit: function(e, r, n, o, i) {
                                        !1 !== i && (i = !0);
                                        if (c.aborted && !o) return;
                                        t && i && t.emit(e, r, n);
                                        for (var a = p(n), s = v(e), u = s.length, l = 0; l < u; l++) s[l].apply(a, r);
                                        var f = b()[d[e]];
                                        f && f.push([h, e, r, a]);
                                        return a
                                    },
                                    get: m,
                                    listeners: v,
                                    context: p,
                                    buffer: function(e, t) {
                                        const r = b();
                                        if (t = t || "feature", h.aborted) return;
                                        Object.entries(e || {}).forEach((e => {
                                            let [n, o] = e;
                                            d[o] = t, t in r || (r[t] = [])
                                        }))
                                    },
                                    abort: u,
                                    aborted: !1,
                                    isBuffering: function(e) {
                                        return !!b()[d[e]]
                                    },
                                    debugId: r,
                                    backlog: f ? {} : t && "object" == typeof t.backlog ? t.backlog : {},
                                    observationContextManager: null
                                };
                                return h;

                                function p(e) {
                                    return e && e instanceof a.A ? e : e ? (0, o.X)(e, s.v.contextId, (() => h.observationContextManager ? h.observationContextManager.getCreateContext(e) : new a.A(s.v.contextId))) : h.observationContextManager ? h.observationContextManager.getCreateContext({}) : new a.A(s.v.contextId)
                                }

                                function g(e, t) {
                                    n[e] = v(e).concat(t)
                                }

                                function v(e) {
                                    return n[e] || []
                                }

                                function m(t) {
                                    const r = l[t] = l[t] || e(h, t);
                                    return !r.observationContextManager && h.observationContextManager && (r.observationContextManager = h.observationContextManager), r
                                }

                                function b() {
                                    return h.backlog
                                }
                            }(void 0, "globalEE"),
                            d = (0, n.fP)();

                        function u() {
                            c.aborted = !0, Object.keys(c.backlog).forEach((e => {
                                delete c.backlog[e]
                            }))
                        }
                        d.ee || (d.ee = c)
                    },
                    5546: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            E: () => n,
                            p: () => o
                        });
                        var n = r(2177).ee.get("handle");

                        function o(e, t, r, o, i) {
                            i ? (i.buffer([e], o), i.emit(e, t, r)) : (n.buffer([e], o), n.emit(e, t, r))
                        }
                    },
                    4322: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            X: () => i
                        });
                        var n = r(5546);
                        i.on = a;
                        var o = i.handlers = {};

                        function i(e, t, r, i) {
                            a(i || n.E, o, e, t, r)
                        }

                        function a(e, t, r, o, i) {
                            i || (i = "feature"), e || (e = n.E);
                            var a = t[i] = t[i] || {};
                            (a[r] = a[r] || []).push([e, o])
                        }
                    },
                    3239: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            bP: () => s,
                            iz: () => c,
                            m$: () => a
                        });
                        var n = r(385);
                        let o = !1,
                            i = !1;
                        try {
                            const e = {
                                get passive() {
                                    return o = !0, !1
                                },
                                get signal() {
                                    return i = !0, !1
                                }
                            };
                            n._A.addEventListener("test", null, e), n._A.removeEventListener("test", null, e)
                        } catch (e) {}

                        function a(e, t) {
                            return o || i ? {
                                capture: !!e,
                                passive: o,
                                signal: t
                            } : !!e
                        }

                        function s(e, t) {
                            let r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                                n = arguments.length > 3 ? arguments[3] : void 0;
                            window.addEventListener(e, t, a(r, n))
                        }

                        function c(e, t) {
                            let r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                                n = arguments.length > 3 ? arguments[3] : void 0;
                            document.addEventListener(e, t, a(r, n))
                        }
                    },
                    4402: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            Ht: () => d,
                            M: () => c,
                            Rl: () => a,
                            ky: () => s
                        });
                        var n = r(385);
                        const o = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";

                        function i(e, t) {
                            return e ? 15 & e[t] : 16 * Math.random() | 0
                        }

                        function a() {
                            const e = n._A?.crypto || n._A?.msCrypto;
                            let t, r = 0;
                            return e && e.getRandomValues && (t = e.getRandomValues(new Uint8Array(30))), o.split("").map((e => "x" === e ? i(t, r++).toString(16) : "y" === e ? (3 & i() | 8).toString(16) : e)).join("")
                        }

                        function s(e) {
                            const t = n._A?.crypto || n._A?.msCrypto;
                            let r, o = 0;
                            t && t.getRandomValues && (r = t.getRandomValues(new Uint8Array(e)));
                            const a = [];
                            for (var s = 0; s < e; s++) a.push(i(r, o++).toString(16));
                            return a.join("")
                        }

                        function c() {
                            return s(16)
                        }

                        function d() {
                            return s(32)
                        }
                    },
                    7056: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            Bq: () => n,
                            Hb: () => a,
                            IK: () => d,
                            K4: () => o,
                            oD: () => i,
                            uT: () => c,
                            wO: () => s
                        });
                        const n = "NRBA",
                            o = "SESSION",
                            i = 144e5,
                            a = 18e5,
                            s = {
                                PAUSE: "session-pause",
                                RESET: "session-reset",
                                RESUME: "session-resume",
                                UPDATE: "session-update"
                            },
                            c = {
                                SAME_TAB: "same-tab",
                                CROSS_TAB: "cross-tab"
                            },
                            d = {
                                OFF: 0,
                                FULL: 1,
                                ERROR: 2
                            }
                    },
                    7894: (e, t, r) => {
                        "use strict";

                        function n() {
                            return Math.floor(performance.now())
                        }
                        r.d(t, {
                            z: () => n
                        })
                    },
                    7243: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            e: () => o
                        });
                        var n = r(385);

                        function o(e) {
                            if (0 === (e || "").indexOf("data:")) return {
                                protocol: "data"
                            };
                            try {
                                const t = new URL(e, location.href),
                                    r = {
                                        port: t.port,
                                        hostname: t.hostname,
                                        pathname: t.pathname,
                                        search: t.search,
                                        protocol: t.protocol.slice(0, t.protocol.indexOf(":")),
                                        sameOrigin: t.protocol === n._A?.location?.protocol && t.host === n._A?.location?.host
                                    };
                                return r.port && "" !== r.port || ("http:" === t.protocol && (r.port = "80"), "https:" === t.protocol && (r.port = "443")), r.pathname && "" !== r.pathname ? r.pathname.startsWith("/") || (r.pathname = "/".concat(r.pathname)) : r.pathname = "/", r
                            } catch (e) {
                                return {}
                            }
                        }
                    },
                    50: (e, t, r) => {
                        "use strict";

                        function n(e, t) {
                            "function" == typeof console.warn && (console.warn("New Relic: ".concat(e)), t && console.warn(t))
                        }
                        r.d(t, {
                            Z: () => n
                        })
                    },
                    2825: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            N: () => u,
                            T: () => l
                        });
                        var n = r(2177),
                            o = r(5546),
                            i = r(3325),
                            a = r(385);
                        const s = "newrelic";
                        const c = {
                                stn: [i.D.sessionTrace],
                                err: [i.D.jserrors, i.D.metrics],
                                ins: [i.D.pageAction],
                                spa: [i.D.spa, i.D.softNav],
                                sr: [i.D.sessionReplay, i.D.sessionTrace]
                            },
                            d = new Set;

                        function u(e, t) {
                            const r = n.ee.get(t);
                            e && "object" == typeof e && (d.has(t) || (Object.entries(e).forEach((e => {
                                let [t, n] = e;
                                c[t] ? c[t].forEach((e => {
                                    n ? (0, o.p)("feat-" + t, [], void 0, e, r) : (0, o.p)("block-" + t, [], void 0, e, r), (0, o.p)("rumresp-" + t, [Boolean(n)], void 0, e, r)
                                })) : n && (0, o.p)("feat-" + t, [], void 0, void 0, r), l[t] = Boolean(n)
                            })), Object.keys(c).forEach((e => {
                                void 0 === l[e] && (c[e]?.forEach((t => (0, o.p)("rumresp-" + e, [!1], void 0, t, r))), l[e] = !1)
                            })), d.add(t), function() {
                                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                                try {
                                    a._A.dispatchEvent(new CustomEvent(s, {
                                        detail: e
                                    }))
                                } catch (e) {}
                            }({
                                loaded: !0
                            })))
                        }
                        const l = {}
                    },
                    2210: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            X: () => o
                        });
                        var n = Object.prototype.hasOwnProperty;

                        function o(e, t, r) {
                            if (n.call(e, t)) return e[t];
                            var o = r();
                            if (Object.defineProperty && Object.keys) try {
                                return Object.defineProperty(e, t, {
                                    value: o,
                                    writable: !0,
                                    enumerable: !1
                                }), o
                            } catch (e) {}
                            return e[t] = o, o
                        }
                    },
                    1284: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            D: () => n
                        });
                        const n = (e, t) => Object.entries(e || {}).map((e => {
                            let [r, n] = e;
                            return t(r, n)
                        }))
                    },
                    4351: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            P: () => i
                        });
                        var n = r(2177);
                        const o = () => {
                            const e = new WeakSet;
                            return (t, r) => {
                                if ("object" == typeof r && null !== r) {
                                    if (e.has(r)) return;
                                    e.add(r)
                                }
                                return r
                            }
                        };

                        function i(e) {
                            try {
                                return JSON.stringify(e, o())
                            } catch (e) {
                                try {
                                    n.ee.emit("internal-error", [e])
                                } catch (e) {}
                            }
                        }
                    },
                    3960: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            KB: () => a,
                            b2: () => i
                        });
                        var n = r(3239);

                        function o() {
                            return "undefined" == typeof document || "complete" === document.readyState
                        }

                        function i(e, t) {
                            if (o()) return e();
                            (0, n.bP)("load", e, t)
                        }

                        function a(e) {
                            if (o()) return e();
                            (0, n.iz)("DOMContentLoaded", e)
                        }
                    },
                    8632: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            EZ: () => u,
                            ce: () => i,
                            ek: () => d,
                            fP: () => a,
                            gG: () => l,
                            h5: () => c,
                            mF: () => s
                        });
                        var n = r(7894),
                            o = r(385);
                        const i = {
                            beacon: "bam.nr-data.net",
                            errorBeacon: "bam.nr-data.net"
                        };

                        function a() {
                            return o._A.NREUM || (o._A.NREUM = {}), void 0 === o._A.newrelic && (o._A.newrelic = o._A.NREUM), o._A.NREUM
                        }

                        function s() {
                            let e = a();
                            return e.o || (e.o = {
                                ST: o._A.setTimeout,
                                SI: o._A.setImmediate,
                                CT: o._A.clearTimeout,
                                XHR: o._A.XMLHttpRequest,
                                REQ: o._A.Request,
                                EV: o._A.Event,
                                PR: o._A.Promise,
                                MO: o._A.MutationObserver,
                                FETCH: o._A.fetch
                            }), e
                        }

                        function c(e, t) {
                            let r = a();
                            r.initializedAgents ??= {}, t.initializedAt = {
                                ms: (0, n.z)(),
                                date: new Date
                            }, r.initializedAgents[e] = t
                        }

                        function d(e) {
                            let t = a();
                            return t.initializedAgents?.[e]
                        }

                        function u(e, t) {
                            a()[e] = t
                        }

                        function l() {
                            return function() {
                                    let e = a();
                                    const t = e.info || {};
                                    e.info = {
                                        beacon: i.beacon,
                                        errorBeacon: i.errorBeacon,
                                        ...t
                                    }
                                }(),
                                function() {
                                    let e = a();
                                    const t = e.init || {};
                                    e.init = {
                                        ...t
                                    }
                                }(), s(),
                                function() {
                                    let e = a();
                                    const t = e.loader_config || {};
                                    e.loader_config = {
                                        ...t
                                    }
                                }(), a()
                        }
                    },
                    7956: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            N: () => o
                        });
                        var n = r(3239);

                        function o(e) {
                            let t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                                r = arguments.length > 2 ? arguments[2] : void 0,
                                o = arguments.length > 3 ? arguments[3] : void 0;
                            (0, n.iz)("visibilitychange", (function() {
                                if (t) return void("hidden" === document.visibilityState && e());
                                e(document.visibilityState)
                            }), r, o)
                        }
                    },
                    7806: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            em: () => v,
                            u5: () => S,
                            QU: () => D,
                            Kf: () => P
                        });
                        var n = r(2177),
                            o = r(8929),
                            i = Object.prototype.hasOwnProperty,
                            a = !1;

                        function s(e, t) {
                            return e || (e = n.ee), r.inPlace = function(e, t, n, o, i) {
                                n || (n = "");
                                const a = "-" === n.charAt(0);
                                for (let s = 0; s < t.length; s++) {
                                    const c = t[s],
                                        u = e[c];
                                    d(u) || (e[c] = r(u, a ? c + n : n, o, c, i))
                                }
                            }, r.flag = o.v.contextOriginalId, r;

                            function r(t, r, n, a, u) {
                                return d(t) ? t : (r || (r = ""), nrWrapper[o.v.contextOriginalId] = t, function(e, t, r) {
                                    if (Object.defineProperty && Object.keys) try {
                                        return Object.keys(e).forEach((function(r) {
                                            Object.defineProperty(t, r, {
                                                get: function() {
                                                    return e[r]
                                                },
                                                set: function(t) {
                                                    return e[r] = t, t
                                                }
                                            })
                                        })), t
                                    } catch (e) {
                                        c([e], r)
                                    }
                                    for (var n in e) i.call(e, n) && (t[n] = e[n])
                                }(t, nrWrapper, e), nrWrapper);

                                function nrWrapper() {
                                    var o, i, d, l;
                                    try {
                                        i = this, o = [...arguments], d = "function" == typeof n ? n(o, i) : n || {}
                                    } catch (t) {
                                        c([t, "", [o, i, a], d], e)
                                    }
                                    s(r + "start", [o, i, a], d, u);
                                    try {
                                        return l = t.apply(i, o)
                                    } catch (e) {
                                        throw s(r + "err", [o, i, e], d, u), e
                                    } finally {
                                        s(r + "end", [o, i, l], d, u)
                                    }
                                }
                            }

                            function s(r, n, o, i) {
                                if (!a || t) {
                                    var s = a;
                                    a = !0;
                                    try {
                                        e.emit(r, n, o, t, i)
                                    } catch (t) {
                                        c([t, r, n, o], e)
                                    }
                                    a = s
                                }
                            }
                        }

                        function c(e, t) {
                            t || (t = n.ee);
                            try {
                                t.emit("internal-error", e)
                            } catch (e) {}
                        }

                        function d(e) {
                            return !(e && "function" == typeof e && e.apply && !e[o.v.contextOriginalId])
                        }
                        var u = r(2210),
                            l = r(385);
                        const f = {},
                            h = l._A.XMLHttpRequest,
                            p = "addEventListener",
                            g = "removeEventListener";

                        function v(e) {
                            var t = function(e) {
                                return (e || n.ee).get("events")
                            }(e);
                            if (f[t.debugId]++) return t;
                            f[t.debugId] = 1;
                            var r = s(t, !0);

                            function i(e) {
                                r.inPlace(e, [p, g], "-", a)
                            }

                            function a(e, t) {
                                return e[1]
                            }
                            return "getPrototypeOf" in Object && (l.il && m(document, i), m(l._A, i), m(h.prototype, i)), t.on(p + "-start", (function(e, t) {
                                var n = e[1];
                                if (null !== n && ("function" == typeof n || "object" == typeof n)) {
                                    var i = (0, u.X)(n, o.v.contextWrappedId, (function() {
                                        var e = {
                                            object: function() {
                                                if ("function" != typeof n.handleEvent) return;
                                                return n.handleEvent.apply(n, arguments)
                                            },
                                            function: n
                                        } [typeof n];
                                        return e ? r(e, "fn-", null, e.name || "anonymous") : n
                                    }));
                                    this.wrapped = e[1] = i
                                }
                            })), t.on(g + "-start", (function(e) {
                                e[1] = this.wrapped || e[1]
                            })), t
                        }

                        function m(e, t) {
                            let r = e;
                            for (;
                                "object" == typeof r && !Object.prototype.hasOwnProperty.call(r, p);) r = Object.getPrototypeOf(r);
                            for (var n = arguments.length, o = new Array(n > 2 ? n - 2 : 0), i = 2; i < n; i++) o[i - 2] = arguments[i];
                            r && t(r, ...o)
                        }
                        var b = "fetch-",
                            y = b + "body-",
                            x = ["arrayBuffer", "blob", "json", "text", "formData"],
                            A = l._A.Request,
                            w = l._A.Response,
                            E = "prototype";
                        const _ = {};

                        function S(e) {
                            const t = function(e) {
                                return (e || n.ee).get("fetch")
                            }(e);
                            if (!(A && w && l._A.fetch)) return t;
                            if (_[t.debugId]++) return t;

                            function r(e, r, n) {
                                var i = e[r];
                                "function" == typeof i && (e[r] = function() {
                                    var e, r = [...arguments],
                                        a = {};
                                    t.emit(n + "before-start", [r], a), a[o.v.contextId] && a[o.v.contextId].dt && (e = a[o.v.contextId].dt);
                                    var s = i.apply(this, r);
                                    return t.emit(n + "start", [r, e], s), s.then((function(e) {
                                        return t.emit(n + "end", [null, e], s), e
                                    }), (function(e) {
                                        throw t.emit(n + "end", [e], s), e
                                    }))
                                })
                            }
                            return _[t.debugId] = 1, x.forEach((e => {
                                r(A[E], e, y), r(w[E], e, y)
                            })), r(l._A, "fetch", b), t.on(b + "end", (function(e, r) {
                                var n = this;
                                if (r) {
                                    var o = r.headers.get("content-length");
                                    null !== o && (n.rxSize = o), t.emit(b + "done", [null, r], n)
                                } else t.emit(b + "done", [e], n)
                            })), t
                        }
                        const R = {},
                            T = ["pushState", "replaceState"];

                        function D(e) {
                            const t = function(e) {
                                return (e || n.ee).get("history")
                            }(e);
                            return !l.il || R[t.debugId]++ || (R[t.debugId] = 1, s(t).inPlace(window.history, T, "-")), t
                        }
                        var C = r(3239);
                        var O = r(50);
                        const I = {},
                            j = ["open", "send"];

                        function P(e) {
                            var t = e || n.ee;
                            const r = function(e) {
                                return (e || n.ee).get("xhr")
                            }(t);
                            if (I[r.debugId]++) return r;
                            I[r.debugId] = 1, v(t);
                            var o = s(r),
                                i = l._A.XMLHttpRequest,
                                a = l._A.MutationObserver,
                                c = l._A.Promise,
                                d = l._A.setInterval,
                                u = "readystatechange",
                                f = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"],
                                h = [],
                                p = l._A.XMLHttpRequest = function(e) {
                                    const t = new i(e),
                                        n = r.context(t);
                                    try {
                                        r.emit("new-xhr", [t], n), t.addEventListener(u, (a = n, function() {
                                            var e = this;
                                            e.readyState > 3 && !a.resolved && (a.resolved = !0, r.emit("xhr-resolved", [], e)), o.inPlace(e, f, "fn-", A)
                                        }), (0, C.m$)(!1))
                                    } catch (e) {
                                        (0, O.Z)("An error occurred while intercepting XHR", e);
                                        try {
                                            r.emit("internal-error", [e])
                                        } catch (e) {}
                                    }
                                    var a;
                                    return t
                                };

                            function g(e, t) {
                                o.inPlace(t, ["onreadystatechange"], "fn-", A)
                            }
                            if (function(e, t) {
                                    for (var r in e) t[r] = e[r]
                                }(i, p), p.prototype = i.prototype, o.inPlace(p.prototype, j, "-xhr-", A), r.on("send-xhr-start", (function(e, t) {
                                    g(e, t),
                                        function(e) {
                                            h.push(e), a && (m ? m.then(x) : d ? d(x) : (b = -b, y.data = b))
                                        }(t)
                                })), r.on("open-xhr-start", g), a) {
                                var m = c && c.resolve();
                                if (!d && !c) {
                                    var b = 1,
                                        y = document.createTextNode(b);
                                    new a(x).observe(y, {
                                        characterData: !0
                                    })
                                }
                            } else t.on("fn-end", (function(e) {
                                e[0] && e[0].type === u || x()
                            }));

                            function x() {
                                for (var e = 0; e < h.length; e++) g(0, h[e]);
                                h.length && (h = [])
                            }

                            function A(e, t) {
                                return t
                            }
                            return r
                        }
                    },
                    7825: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            t: () => n
                        });
                        const n = r(3325).D.ajax
                    },
                    6660: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            t: () => n
                        });
                        const n = r(3325).D.jserrors
                    },
                    3081: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            gF: () => i,
                            mY: () => o,
                            t9: () => n,
                            vz: () => s,
                            xS: () => a
                        });
                        const n = r(3325).D.metrics,
                            o = "sm",
                            i = "cm",
                            a = "storeSupportabilityMetrics",
                            s = "storeEventMetrics"
                    },
                    4649: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            t: () => n
                        });
                        const n = r(3325).D.pageAction
                    },
                    7633: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            t: () => n
                        });
                        const n = r(3325).D.pageViewEvent
                    },
                    9251: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            t: () => n
                        });
                        const n = r(3325).D.pageViewTiming
                    },
                    7144: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            Ef: () => i,
                            J0: () => f,
                            Mi: () => l,
                            Vb: () => a,
                            Ye: () => c,
                            fm: () => d,
                            i9: () => s,
                            t9: () => o,
                            u0: () => u
                        });
                        var n = r(7056);
                        const o = r(3325).D.sessionReplay,
                            i = {
                                RECORD: "recordReplay",
                                PAUSE: "pauseReplay"
                            },
                            a = .12,
                            s = {
                                DomContentLoaded: 0,
                                Load: 1,
                                FullSnapshot: 2,
                                IncrementalSnapshot: 3,
                                Meta: 4,
                                Custom: 5
                            },
                            c = 1e6,
                            d = 64e3,
                            u = {
                                [n.IK.ERROR]: 15e3,
                                [n.IK.FULL]: 3e5,
                                [n.IK.OFF]: 0
                            },
                            l = {
                                RESET: {
                                    message: "Session was reset",
                                    sm: "Reset"
                                },
                                IMPORT: {
                                    message: "Recorder failed to import",
                                    sm: "Import"
                                },
                                TOO_MANY: {
                                    message: "429: Too Many Requests",
                                    sm: "Too-Many"
                                },
                                TOO_BIG: {
                                    message: "Payload was too large",
                                    sm: "Too-Big"
                                },
                                CROSS_TAB: {
                                    message: "Session Entity was set to OFF on another tab",
                                    sm: "Cross-Tab"
                                },
                                ENTITLEMENTS: {
                                    message: "Session Replay is not allowed and will not be started",
                                    sm: "Entitlement"
                                }
                            },
                            f = 5e3
                    },
                    3614: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            BST_RESOURCE: () => o,
                            END: () => s,
                            FEATURE_NAME: () => n,
                            FN_END: () => d,
                            FN_START: () => c,
                            PUSH_STATE: () => u,
                            RESOURCE: () => i,
                            START: () => a
                        });
                        const n = r(3325).D.sessionTrace,
                            o = "bstResource",
                            i = "resource",
                            a = "-start",
                            s = "-end",
                            c = "fn" + a,
                            d = "fn" + s,
                            u = "pushState"
                    },
                    5938: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            W: () => o
                        });
                        var n = r(2177);
                        class o {
                            constructor(e, t, r) {
                                this.agentIdentifier = e, this.aggregator = t, this.ee = n.ee.get(e), this.featureName = r, this.blocked = !1
                            }
                        }
                    },
                    8862: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            j: () => A
                        });
                        var n = r(3325),
                            o = r(234),
                            i = r(5546),
                            a = r(2177),
                            s = r(7894),
                            c = r(8e3),
                            d = r(3960),
                            u = r(385),
                            l = r(50),
                            f = r(3081),
                            h = r(8632),
                            p = r(7144);
                        const g = ["setErrorHandler", "finished", "addToTrace", "addRelease", "addPageAction", "setCurrentRouteName", "setPageViewName", "setCustomAttribute", "interaction", "noticeError", "setUserId", "setApplicationVersion", "start", "recordReplay", "pauseReplay", p.Ef.RECORD, p.Ef.PAUSE],
                            v = ["setErrorHandler", "finished", "addToTrace", "addRelease"];

                        function m() {
                            const e = (0, h.gG)();
                            g.forEach((t => {
                                e[t] = function() {
                                    for (var r = arguments.length, n = new Array(r), o = 0; o < r; o++) n[o] = arguments[o];
                                    return function(t) {
                                        for (var r = arguments.length, n = new Array(r > 1 ? r - 1 : 0), o = 1; o < r; o++) n[o - 1] = arguments[o];
                                        let i = [];
                                        return Object.values(e.initializedAgents).forEach((e => {
                                            e.exposed && e.api[t] && i.push(e.api[t](...n))
                                        })), i.length > 1 ? i : i[0]
                                    }(t, ...n)
                                }
                            }))
                        }
                        var b = r(2825);
                        const y = e => {
                            const t = e.startsWith("http");
                            e += "/", r.p = t ? e : "https://" + e
                        };
                        let x = !1;

                        function A(e) {
                            let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                                g = arguments.length > 2 ? arguments[2] : void 0,
                                A = arguments.length > 3 ? arguments[3] : void 0,
                                {
                                    init: w,
                                    info: E,
                                    loader_config: _,
                                    runtime: S = {
                                        loaderType: g
                                    },
                                    exposed: R = !0
                                } = t;
                            const T = (0, h.gG)();
                            E || (w = T.init, E = T.info, _ = T.loader_config), (0, o.Dg)(e.agentIdentifier, w || {}), (0, o.GE)(e.agentIdentifier, _ || {}), E.jsAttributes ??= {}, u.v6 && (E.jsAttributes.isWorker = !0), (0, o.CX)(e.agentIdentifier, E);
                            const D = (0, o.P_)(e.agentIdentifier),
                                C = [E.beacon, E.errorBeacon];
                            x || (D.proxy.assets && (y(D.proxy.assets), C.push(D.proxy.assets)), D.proxy.beacon && C.push(D.proxy.beacon), m(), (0, h.EZ)("activatedFeatures", b.T), e.runSoftNavOverSpa &&= !0 === D.soft_navigations.enabled && D.feature_flags.includes("soft_nav")), S.denyList = [...D.ajax.deny_list || [], ...D.ajax.block_internal ? C : []], (0, o.sU)(e.agentIdentifier, S), void 0 === e.api && (e.api = function(e, t) {
                                let h = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
                                t || (0, c.R)(e, "api");
                                const g = {};
                                var m = a.ee.get(e),
                                    b = m.get("tracer"),
                                    y = "api-",
                                    x = y + "ixn-";

                                function A(t, r, n, i) {
                                    const a = (0, o.C5)(e);
                                    return null === r ? delete a.jsAttributes[t] : (0, o.CX)(e, {
                                        ...a,
                                        jsAttributes: {
                                            ...a.jsAttributes,
                                            [t]: r
                                        }
                                    }), _(y, n, !0, i || null === r ? "session" : void 0)(t, r)
                                }

                                function w() {}
                                v.forEach((e => {
                                    g[e] = _(y, e, !0, "api")
                                })), g.addPageAction = _(y, "addPageAction", !0, n.D.pageAction), g.setPageViewName = function(t, r) {
                                    if ("string" == typeof t) return "/" !== t.charAt(0) && (t = "/" + t), (0, o.OP)(e).customTransaction = (r || "http://custom.transaction") + t, _(y, "setPageViewName", !0)()
                                }, g.setCustomAttribute = function(e, t) {
                                    let r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
                                    if ("string" == typeof e) {
                                        if (["string", "number", "boolean"].includes(typeof t) || null === t) return A(e, t, "setCustomAttribute", r);
                                        (0, l.Z)("Failed to execute setCustomAttribute.\nNon-null value must be a string, number or boolean type, but a type of <".concat(typeof t, "> was provided."))
                                    } else(0, l.Z)("Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(typeof e, "> was provided."))
                                }, g.setUserId = function(e) {
                                    if ("string" == typeof e || null === e) return A("enduser.id", e, "setUserId", !0);
                                    (0, l.Z)("Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(typeof e, "> was provided."))
                                }, g.setApplicationVersion = function(e) {
                                    if ("string" == typeof e || null === e) return A("application.version", e, "setApplicationVersion", !1);
                                    (0, l.Z)("Failed to execute setApplicationVersion. Expected <String | null>, but got <".concat(typeof e, ">."))
                                }, g.start = e => {
                                    try {
                                        const t = e ? "defined" : "undefined";
                                        (0, i.p)(f.xS, ["API/start/".concat(t, "/called")], void 0, n.D.metrics, m);
                                        const r = Object.values(n.D);
                                        if (void 0 === e) e = r;
                                        else {
                                            if ((e = Array.isArray(e) && e.length ? e : [e]).some((e => !r.includes(e)))) return (0, l.Z)("Invalid feature name supplied. Acceptable feature names are: ".concat(r));
                                            e.includes(n.D.pageViewEvent) || e.push(n.D.pageViewEvent)
                                        }
                                        e.forEach((e => {
                                            m.emit("".concat(e, "-opt-in"))
                                        }))
                                    } catch (e) {
                                        (0, l.Z)("An unexpected issue occurred", e)
                                    }
                                }, g[p.Ef.RECORD] = function() {
                                    (0, i.p)(f.xS, ["API/recordReplay/called"], void 0, n.D.metrics, m), (0, i.p)(p.Ef.RECORD, [], void 0, n.D.sessionReplay, m)
                                }, g[p.Ef.PAUSE] = function() {
                                    (0, i.p)(f.xS, ["API/pauseReplay/called"], void 0, n.D.metrics, m), (0, i.p)(p.Ef.PAUSE, [], void 0, n.D.sessionReplay, m)
                                }, g.interaction = function(e) {
                                    return (new w).get("object" == typeof e ? e : {})
                                };
                                const E = w.prototype = {
                                    createTracer: function(e, t) {
                                        var r = {},
                                            o = this,
                                            a = "function" == typeof t;
                                        return (0, i.p)(f.xS, ["API/createTracer/called"], void 0, n.D.metrics, m), h || (0, i.p)(x + "tracer", [(0, s.z)(), e, r], o, n.D.spa, m),
                                            function() {
                                                if (b.emit((a ? "" : "no-") + "fn-start", [(0, s.z)(), o, a], r), a) try {
                                                    return t.apply(this, arguments)
                                                } catch (e) {
                                                    throw b.emit("fn-err", [arguments, this, e], r), e
                                                } finally {
                                                    b.emit("fn-end", [(0, s.z)()], r)
                                                }
                                            }
                                    }
                                };

                                function _(e, t, r, o) {
                                    return function() {
                                        return (0, i.p)(f.xS, ["API/" + t + "/called"], void 0, n.D.metrics, m), o && (0, i.p)(e + t, [(0, s.z)(), ...arguments], r ? null : this, o, m), r ? void 0 : this
                                    }
                                }

                                function S() {
                                    r.e(63).then(r.bind(r, 7438)).then((t => {
                                        let {
                                            setAPI: r
                                        } = t;
                                        r(e), (0, c.L)(e, "api")
                                    })).catch((() => {
                                        (0, l.Z)("Downloading runtime APIs failed..."), (0, c.L)(e, "api", !0)
                                    }))
                                }
                                return ["actionText", "setName", "setAttribute", "save", "ignore", "onEnd", "getContext", "end", "get"].forEach((e => {
                                    E[e] = _(x, e, void 0, h ? n.D.softNav : n.D.spa)
                                })), g.setCurrentRouteName = h ? _(x, "routeName", void 0, n.D.softNav) : _(y, "routeName", !0, n.D.spa), g.noticeError = function(e, t) {
                                    "string" == typeof e && (e = new Error(e)), (0, i.p)(f.xS, ["API/noticeError/called"], void 0, n.D.metrics, m), (0, i.p)("err", [e, (0, s.z)(), !1, t], void 0, n.D.jserrors, m)
                                }, u.il ? (0, d.b2)((() => S()), !0) : S(), g
                            }(e.agentIdentifier, A, e.runSoftNavOverSpa)), void 0 === e.exposed && (e.exposed = R), x = !0
                        }
                    },
                    1926: (e, t, r) => {
                        r.nc = (() => {
                            try {
                                return document?.currentScript?.nonce
                            } catch (e) {}
                            return ""
                        })()
                    },
                    3325: (e, t, r) => {
                        "use strict";
                        r.d(t, {
                            D: () => n,
                            p: () => o
                        });
                        const n = {
                                ajax: "ajax",
                                jserrors: "jserrors",
                                metrics: "metrics",
                                pageAction: "page_action",
                                pageViewEvent: "page_view_event",
                                pageViewTiming: "page_view_timing",
                                sessionReplay: "session_replay",
                                sessionTrace: "session_trace",
                                softNav: "soft_navigations",
                                spa: "spa"
                            },
                            o = {
                                [n.pageViewEvent]: 1,
                                [n.pageViewTiming]: 2,
                                [n.metrics]: 3,
                                [n.jserrors]: 4,
                                [n.ajax]: 5,
                                [n.sessionTrace]: 6,
                                [n.pageAction]: 7,
                                [n.spa]: 8,
                                [n.softNav]: 9,
                                [n.sessionReplay]: 10
                            }
                    }
                },
                n = {};

            function o(e) {
                var t = n[e];
                if (void 0 !== t) return t.exports;
                var i = n[e] = {
                    exports: {}
                };
                return r[e](i, i.exports, o), i.exports
            }
            o.m = r, o.d = (e, t) => {
                for (var r in t) o.o(t, r) && !o.o(e, r) && Object.defineProperty(e, r, {
                    enumerable: !0,
                    get: t[r]
                })
            }, o.f = {}, o.e = e => Promise.all(Object.keys(o.f).reduce(((t, r) => (o.f[r](e, t), t)), [])), o.u = e => ({
                63: "nr-full",
                110: "nr-full-compressor",
                379: "nr-full-recorder"
            } [e] + "-1.253.0.min.js"), o.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), e = {}, t = "NRBA-1.253.0.PROD:", o.l = (r, n, i, a) => {
                if (e[r]) e[r].push(n);
                else {
                    var s, c;
                    if (void 0 !== i)
                        for (var d = document.getElementsByTagName("script"), u = 0; u < d.length; u++) {
                            var l = d[u];
                            if (l.getAttribute("src") == r || l.getAttribute("data-webpack") == t + i) {
                                s = l;
                                break
                            }
                        }
                    if (!s) {
                        c = !0;
                        var f = {
                            63: "sha512-j+7ibjVKvz4TaznW3oG21bC+my3ErAHEw+iLhjg6JF4GkA+JUsl27HO4n5H27nNBpNza6/00FZDictaoaofnzg==",
                            379: "sha512-oJwGDU774Z+Kfq7rQ6dqhvDHoklX/TmRgGKNMRPFmT6mZ9sPKEJb8RrgN2IDfWRYESxVOpAJt8VemBmD2qWt4w==",
                            110: "sha512-v+WAs9pS7SzevyYMqbI2l1ML7kONdL1DCwww+7dFnJg2iNt0zd0v62EehYAcvyFOogG5Nn663Y0P4vnTrZKc9w=="
                        };
                        (s = document.createElement("script")).charset = "utf-8", s.timeout = 120, o.nc && s.setAttribute("nonce", o.nc), s.setAttribute("data-webpack", t + i), s.src = r, 0 !== s.src.indexOf(window.location.origin + "/") && (s.crossOrigin = "anonymous"), f[a] && (s.integrity = f[a])
                    }
                    e[r] = [n];
                    var h = (t, n) => {
                            s.onerror = s.onload = null, clearTimeout(p);
                            var o = e[r];
                            if (delete e[r], s.parentNode && s.parentNode.removeChild(s), o && o.forEach((e => e(n))), t) return t(n)
                        },
                        p = setTimeout(h.bind(null, void 0, {
                            type: "timeout",
                            target: s
                        }), 12e4);
                    s.onerror = h.bind(null, s.onerror), s.onload = h.bind(null, s.onload), c && document.head.appendChild(s)
                }
            }, o.r = e => {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, o.p = "https://js-agent.newrelic.com/", (() => {
                var e = {
                    29: 0,
                    789: 0
                };
                o.f.j = (t, r) => {
                    var n = o.o(e, t) ? e[t] : void 0;
                    if (0 !== n)
                        if (n) r.push(n[2]);
                        else {
                            var i = new Promise(((r, o) => n = e[t] = [r, o]));
                            r.push(n[2] = i);
                            var a = o.p + o.u(t),
                                s = new Error;
                            o.l(a, (r => {
                                if (o.o(e, t) && (0 !== (n = e[t]) && (e[t] = void 0), n)) {
                                    var i = r && ("load" === r.type ? "missing" : r.type),
                                        a = r && r.target && r.target.src;
                                    s.message = "Loading chunk " + t + " failed.\n(" + i + ": " + a + ")", s.name = "ChunkLoadError", s.type = i, s.request = a, n[1](s)
                                }
                            }), "chunk-" + t, t)
                        }
                };
                var t = (t, r) => {
                        var n, i, [a, s, c] = r,
                            d = 0;
                        if (a.some((t => 0 !== e[t]))) {
                            for (n in s) o.o(s, n) && (o.m[n] = s[n]);
                            if (c) c(o)
                        }
                        for (t && t(r); d < a.length; d++) i = a[d], o.o(e, i) && e[i] && e[i][0](), e[i] = 0
                    },
                    r = self["webpackChunk:NRBA-1.253.0.PROD"] = self["webpackChunk:NRBA-1.253.0.PROD"] || [];
                r.forEach(t.bind(null, 0)), r.push = t.bind(null, r.push.bind(r))
            })(), (() => {
                "use strict";
                o(1926);
                var e = o(50),
                    t = o(7144),
                    r = o(8929),
                    n = o(4402),
                    i = o(2177);
                class a {
                    agentIdentifier;
                    observationContext = new r.v;
                    constructor() {
                        let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : (0, n.ky)(16);
                        this.agentIdentifier = e;
                        i.ee.get(e).observationContext = this.observationContext
                    }
                    #t(t) {
                        for (var r = arguments.length, n = new Array(r > 1 ? r - 1 : 0), o = 1; o < r; o++) n[o - 1] = arguments[o];
                        if ("function" == typeof this.api?.[t]) return this.api[t](...n);
                        (0, e.Z)("Call to agent api ".concat(t, " failed. The API is not currently initialized."))
                    }
                    addPageAction(e, t) {
                        return this.#t("addPageAction", e, t)
                    }
                    setPageViewName(e, t) {
                        return this.#t("setPageViewName", e, t)
                    }
                    setCustomAttribute(e, t, r) {
                        return this.#t("setCustomAttribute", e, t, r)
                    }
                    noticeError(e, t) {
                        return this.#t("noticeError", e, t)
                    }
                    setUserId(e) {
                        return this.#t("setUserId", e)
                    }
                    setApplicationVersion(e) {
                        return this.#t("setApplicationVersion", e)
                    }
                    setErrorHandler(e) {
                        return this.#t("setErrorHandler", e)
                    }
                    finished(e) {
                        return this.#t("finished", e)
                    }
                    addRelease(e, t) {
                        return this.#t("addRelease", e, t)
                    }
                    start(e) {
                        return this.#t("start", e)
                    }
                    recordReplay() {
                        return this.#t(t.Ef.RECORD)
                    }
                    pauseReplay() {
                        return this.#t(t.Ef.PAUSE)
                    }
                    addToTrace(e) {
                        return this.#t("addToTrace", e)
                    }
                    setCurrentRouteName(e) {
                        return this.#t("setCurrentRouteName", e)
                    }
                    interaction() {
                        return this.#t("interaction")
                    }
                }
                var s = o(3325),
                    c = o(234);
                const d = Object.values(s.D);

                function u(e) {
                    const t = {};
                    return d.forEach((r => {
                        t[r] = function(e, t) {
                            return !0 === (0, c.Mt)(t, "".concat(e, ".enabled"))
                        }(r, e)
                    })), t
                }
                var l = o(8862);
                var f = o(8e3),
                    h = o(5938),
                    p = o(3960),
                    g = o(385);
                const v = e => g.il && !0 === (0, c.Mt)(e, "privacy.cookies_enabled");

                function m(e) {
                    return c.Yu.MO && v && !0 === (0, c.Mt)(e, "session_trace.enabled")
                }

                function b(e) {
                    return !0 === (0, c.Mt)(e, "session_replay.preload") && m(e)
                }
                class y extends h.W {
                    constructor(e, t, r) {
                        let n = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3];
                        super(e, t, r), this.auto = n, this.abortHandler = void 0, this.featAggregate = void 0, this.onAggregateImported = void 0, !1 === (0, c.Mt)(this.agentIdentifier, "".concat(this.featureName, ".autoStart")) && (this.auto = !1), this.auto && (0, f.R)(e, r)
                    }
                    importAggregator() {
                        let t, r = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                        if (this.featAggregate) return;
                        if (!this.auto) return void this.ee.on("".concat(this.featureName, "-opt-in"), (() => {
                            (0, f.R)(this.agentIdentifier, this.featureName), this.auto = !0, this.importAggregator()
                        }));
                        this.onAggregateImported = new Promise((e => {
                            t = e
                        }));
                        const n = async () => {
                            let n;
                            try {
                                if (v(this.agentIdentifier)) {
                                    const {
                                        setupAgentSession: e
                                    } = await o.e(63).then(o.bind(o, 1656));
                                    n = e(this.agentIdentifier)
                                }
                            } catch (t) {
                                (0, e.Z)("A problem occurred when starting up session manager. This page will not start or extend any session.", t), this.featureName === s.D.sessionReplay && this.abortHandler?.()
                            }
                            try {
                                if (!this.#r(this.featureName, n)) return (0, f.L)(this.agentIdentifier, this.featureName), void t(!1);
                                const {
                                    lazyFeatureLoader: e
                                } = await o.e(63).then(o.bind(o, 8582)), {
                                    Aggregate: i
                                } = await e(this.featureName, "aggregate");
                                this.featAggregate = new i(this.agentIdentifier, this.aggregator, r), t(!0)
                            } catch (r) {
                                (0, e.Z)("Downloading and initializing ".concat(this.featureName, " failed..."), r), this.abortHandler?.(), (0, f.L)(this.agentIdentifier, this.featureName, !0), t(!1)
                            }
                        };
                        g.il ? (0, p.b2)((() => n()), !0) : n()
                    }
                    #r(e, t) {
                        return e !== s.D.sessionReplay || (r = this.agentIdentifier, n = t, !(!m(r) || !n?.isNew && !n?.state.sessionReplayMode));
                        var r, n
                    }
                }
                var x = o(7633);
                class A extends y {
                    static featureName = x.t;
                    constructor(e, t) {
                        let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        super(e, t, x.t, r), this.importAggregator()
                    }
                }
                var w = o(1117),
                    E = o(1284);
                class _ extends w.w {
                    constructor(e) {
                        super(e), this.aggregatedData = {}
                    }
                    store(e, t, r, n, o) {
                        var i = this.getBucket(e, t, r, o);
                        return i.metrics = function(e, t) {
                            t || (t = {
                                count: 0
                            });
                            return t.count += 1, (0, E.D)(e, (function(e, r) {
                                t[e] = S(r, t[e])
                            })), t
                        }(n, i.metrics), i
                    }
                    merge(e, t, r, n, o) {
                        var i = this.getBucket(e, t, n, o);
                        if (i.metrics) {
                            var a = i.metrics;
                            a.count += r.count, (0, E.D)(r, (function(e, t) {
                                if ("count" !== e) {
                                    var n = a[e],
                                        o = r[e];
                                    o && !o.c ? a[e] = S(o.t, n) : a[e] = function(e, t) {
                                        if (!t) return e;
                                        t.c || (t = R(t.t));
                                        return t.min = Math.min(e.min, t.min), t.max = Math.max(e.max, t.max), t.t += e.t, t.sos += e.sos, t.c += e.c, t
                                    }(o, a[e])
                                }
                            }))
                        } else i.metrics = r
                    }
                    storeMetric(e, t, r, n) {
                        var o = this.getBucket(e, t, r);
                        return o.stats = S(n, o.stats), o
                    }
                    getBucket(e, t, r, n) {
                        this.aggregatedData[e] || (this.aggregatedData[e] = {});
                        var o = this.aggregatedData[e][t];
                        return o || (o = this.aggregatedData[e][t] = {
                            params: r || {}
                        }, n && (o.custom = n)), o
                    }
                    get(e, t) {
                        return t ? this.aggregatedData[e] && this.aggregatedData[e][t] : this.aggregatedData[e]
                    }
                    take(e) {
                        for (var t = {}, r = "", n = !1, o = 0; o < e.length; o++) t[r = e[o]] = Object.values(this.aggregatedData[r] || {}), t[r].length && (n = !0), delete this.aggregatedData[r];
                        return n ? t : null
                    }
                }

                function S(e, t) {
                    return null == e ? function(e) {
                        e ? e.c++ : e = {
                            c: 1
                        };
                        return e
                    }(t) : t ? (t.c || (t = R(t.t)), t.c += 1, t.t += e, t.sos += e * e, e > t.max && (t.max = e), e < t.min && (t.min = e), t) : {
                        t: e
                    }
                }

                function R(e) {
                    return {
                        t: e,
                        min: e,
                        max: e,
                        sos: e * e,
                        c: 1
                    }
                }
                var T = o(8632),
                    D = o(4351);
                var C = o(5546),
                    O = o(7956),
                    I = o(3239),
                    j = o(7894),
                    P = o(9251);
                class N extends y {
                    static featureName = P.t;
                    constructor(e, t) {
                        let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        super(e, t, P.t, r), g.il && ((0, O.N)((() => (0, C.p)("docHidden", [(0, j.z)()], void 0, P.t, this.ee)), !0), (0, I.bP)("pagehide", (() => (0, C.p)("winPagehide", [(0, j.z)()], void 0, P.t, this.ee))), this.importAggregator())
                    }
                }
                var k = o(3081);
                class M extends y {
                    static featureName = k.t9;
                    constructor(e, t) {
                        let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        super(e, t, k.t9, r), this.importAggregator()
                    }
                }
                var H = o(6660);
                class z {
                    constructor(e, t, r, n) {
                        this.name = "UncaughtError", this.message = e, this.sourceURL = t, this.line = r, this.column = n
                    }
                }
                class L extends y {
                    static featureName = H.t;
                    #n = new Set;
                    constructor(e, t) {
                        let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        super(e, t, H.t, r);
                        try {
                            this.removeOnAbort = new AbortController
                        } catch (e) {}
                        this.ee.on("fn-err", ((e, t, r) => {
                            this.abortHandler && !this.#n.has(r) && (this.#n.add(r), (0, C.p)("err", [this.#o(r), (0, j.z)()], void 0, s.D.jserrors, this.ee))
                        })), this.ee.on("internal-error", (e => {
                            this.abortHandler && (0, C.p)("ierr", [this.#o(e), (0, j.z)(), !0], void 0, s.D.jserrors, this.ee)
                        })), g._A.addEventListener("unhandledrejection", (e => {
                            this.abortHandler && (0, C.p)("err", [this.#i(e), (0, j.z)(), !1, {
                                unhandledPromiseRejection: 1
                            }], void 0, s.D.jserrors, this.ee)
                        }), (0, I.m$)(!1, this.removeOnAbort?.signal)), g._A.addEventListener("error", (e => {
                            this.abortHandler && (this.#n.has(e.error) ? this.#n.delete(e.error) : (0, C.p)("err", [this.#a(e), (0, j.z)()], void 0, s.D.jserrors, this.ee))
                        }), (0, I.m$)(!1, this.removeOnAbort?.signal)), this.abortHandler = this.#s, this.importAggregator()
                    }
                    #s() {
                        this.removeOnAbort?.abort(), this.#n.clear(), this.abortHandler = void 0
                    }
                    #o(e) {
                        return e instanceof Error ? e : void 0 !== e?.message ? new z(e.message, e.filename || e.sourceURL, e.lineno || e.line, e.colno || e.col) : new z("string" == typeof e ? e : (0, D.P)(e))
                    }
                    #i(e) {
                        let t = "Unhandled Promise Rejection: ";
                        if (e?.reason instanceof Error) try {
                            return e.reason.message = t + e.reason.message, e.reason
                        } catch (t) {
                            return e.reason
                        }
                        if (void 0 === e.reason) return new z(t);
                        const r = this.#o(e.reason);
                        return r.message = t + r.message, r
                    }
                    #a(e) {
                        if (e.error instanceof SyntaxError && !/:\d+$/.test(e.error.stack?.trim())) {
                            const t = new z(e.message, e.filename, e.lineno, e.colno);
                            return t.name = SyntaxError.name, t
                        }
                        return e.error instanceof Error ? e.error : new z(e.message, e.filename, e.lineno, e.colno)
                    }
                }
                var U = o(2210);
                let F = 1;
                const B = "nr@id";

                function q(e) {
                    const t = typeof e;
                    return !e || "object" !== t && "function" !== t ? -1 : e === g._A ? 0 : (0, U.X)(e, B, (function() {
                        return F++
                    }))
                }

                function V(e) {
                    if ("string" == typeof e && e.length) return e.length;
                    if ("object" == typeof e) {
                        if ("undefined" != typeof ArrayBuffer && e instanceof ArrayBuffer && e.byteLength) return e.byteLength;
                        if ("undefined" != typeof Blob && e instanceof Blob && e.size) return e.size;
                        if (!("undefined" != typeof FormData && e instanceof FormData)) try {
                            return (0, D.P)(e).length
                        } catch (e) {
                            return
                        }
                    }
                }
                var Z = o(7806),
                    W = o(7243);
                class G {
                    constructor(e) {
                        this.agentIdentifier = e
                    }
                    generateTracePayload(e) {
                        if (!this.shouldGenerateTrace(e)) return null;
                        var t = (0, c.DL)(this.agentIdentifier);
                        if (!t) return null;
                        var r = (t.accountID || "").toString() || null,
                            o = (t.agentID || "").toString() || null,
                            i = (t.trustKey || "").toString() || null;
                        if (!r || !o) return null;
                        var a = (0, n.M)(),
                            s = (0, n.Ht)(),
                            d = Date.now(),
                            u = {
                                spanId: a,
                                traceId: s,
                                timestamp: d
                            };
                        return (e.sameOrigin || this.isAllowedOrigin(e) && this.useTraceContextHeadersForCors()) && (u.traceContextParentHeader = this.generateTraceContextParentHeader(a, s), u.traceContextStateHeader = this.generateTraceContextStateHeader(a, d, r, o, i)), (e.sameOrigin && !this.excludeNewrelicHeader() || !e.sameOrigin && this.isAllowedOrigin(e) && this.useNewrelicHeaderForCors()) && (u.newrelicHeader = this.generateTraceHeader(a, s, d, r, o, i)), u
                    }
                    generateTraceContextParentHeader(e, t) {
                        return "00-" + t + "-" + e + "-01"
                    }
                    generateTraceContextStateHeader(e, t, r, n, o) {
                        return o + "@nr=0-1-" + r + "-" + n + "-" + e + "----" + t
                    }
                    generateTraceHeader(e, t, r, n, o, i) {
                        if (!("function" == typeof g._A?.btoa)) return null;
                        var a = {
                            v: [0, 1],
                            d: {
                                ty: "Browser",
                                ac: n,
                                ap: o,
                                id: e,
                                tr: t,
                                ti: r
                            }
                        };
                        return i && n !== i && (a.d.tk = i), btoa((0, D.P)(a))
                    }
                    shouldGenerateTrace(e) {
                        return this.isDtEnabled() && this.isAllowedOrigin(e)
                    }
                    isAllowedOrigin(e) {
                        var t = !1,
                            r = {};
                        if ((0, c.Mt)(this.agentIdentifier, "distributed_tracing") && (r = (0, c.P_)(this.agentIdentifier).distributed_tracing), e.sameOrigin) t = !0;
                        else if (r.allowed_origins instanceof Array)
                            for (var n = 0; n < r.allowed_origins.length; n++) {
                                var o = (0, W.e)(r.allowed_origins[n]);
                                if (e.hostname === o.hostname && e.protocol === o.protocol && e.port === o.port) {
                                    t = !0;
                                    break
                                }
                            }
                        return t
                    }
                    isDtEnabled() {
                        var e = (0, c.Mt)(this.agentIdentifier, "distributed_tracing");
                        return !!e && !!e.enabled
                    }
                    excludeNewrelicHeader() {
                        var e = (0, c.Mt)(this.agentIdentifier, "distributed_tracing");
                        return !!e && !!e.exclude_newrelic_header
                    }
                    useNewrelicHeaderForCors() {
                        var e = (0, c.Mt)(this.agentIdentifier, "distributed_tracing");
                        return !!e && !1 !== e.cors_use_newrelic_header
                    }
                    useTraceContextHeadersForCors() {
                        var e = (0, c.Mt)(this.agentIdentifier, "distributed_tracing");
                        return !!e && !!e.cors_use_tracecontext_headers
                    }
                }
                var K = o(7825),
                    X = ["load", "error", "abort", "timeout"],
                    Y = X.length,
                    Q = c.Yu.REQ,
                    J = c.Yu.XHR;
                class ee extends y {
                    static featureName = K.t;
                    constructor(e, t) {
                        let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        if (super(e, t, K.t, r), (0, c.OP)(e).xhrWrappable) {
                            this.dt = new G(e), this.handler = (e, t, r, n) => (0, C.p)(e, t, r, n, this.ee);
                            try {
                                const e = {
                                    xmlhttprequest: "xhr",
                                    fetch: "fetch",
                                    beacon: "beacon"
                                };
                                g._A?.performance?.getEntriesByType("resource").forEach((t => {
                                    if (t.initiatorType in e && 0 !== t.responseStatus) {
                                        const r = {
                                                status: t.responseStatus
                                            },
                                            n = {
                                                rxSize: t.transferSize,
                                                duration: Math.floor(t.duration),
                                                cbTime: 0
                                            };
                                        te(r, t.name), this.handler("xhr", [r, n, t.startTime, t.responseEnd, e[t.initiatorType]], void 0, s.D.ajax)
                                    }
                                }))
                            } catch (e) {}(0, Z.u5)(this.ee), (0, Z.Kf)(this.ee),
                            function(e, t, r, n) {
                                function o(e) {
                                    var t = this;
                                    t.totalCbs = 0, t.called = 0, t.cbTime = 0, t.end = w, t.ended = !1, t.xhrGuids = {}, t.lastSize = null, t.loadCaptureCalled = !1, t.params = this.params || {}, t.metrics = this.metrics || {}, e.addEventListener("load", (function(r) {
                                        E(t, e)
                                    }), (0, I.m$)(!1)), g.IF || e.addEventListener("progress", (function(e) {
                                        t.lastSize = e.loaded
                                    }), (0, I.m$)(!1))
                                }

                                function i(e) {
                                    this.params = {
                                        method: e[0]
                                    }, te(this, e[1]), this.metrics = {}
                                }

                                function a(t, r) {
                                    var o = (0, c.DL)(e);
                                    o.xpid && this.sameOrigin && r.setRequestHeader("X-NewRelic-ID", o.xpid);
                                    var i = n.generateTracePayload(this.parsedOrigin);
                                    if (i) {
                                        var a = !1;
                                        i.newrelicHeader && (r.setRequestHeader("newrelic", i.newrelicHeader), a = !0), i.traceContextParentHeader && (r.setRequestHeader("traceparent", i.traceContextParentHeader), i.traceContextStateHeader && r.setRequestHeader("tracestate", i.traceContextStateHeader), a = !0), a && (this.dt = i)
                                    }
                                }

                                function d(e, r) {
                                    var n = this.metrics,
                                        o = e[0],
                                        i = this;
                                    if (n && o) {
                                        var a = V(o);
                                        a && (n.txSize = a)
                                    }
                                    this.startTime = (0, j.z)(), this.body = o, this.listener = function(e) {
                                        try {
                                            "abort" !== e.type || i.loadCaptureCalled || (i.params.aborted = !0), ("load" !== e.type || i.called === i.totalCbs && (i.onloadCalled || "function" != typeof r.onload) && "function" == typeof i.end) && i.end(r)
                                        } catch (e) {
                                            try {
                                                t.emit("internal-error", [e])
                                            } catch (e) {}
                                        }
                                    };
                                    for (var s = 0; s < Y; s++) r.addEventListener(X[s], this.listener, (0, I.m$)(!1))
                                }

                                function u(e, t, r) {
                                    this.cbTime += e, t ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof r.onload || "function" != typeof this.end || this.end(r)
                                }

                                function l(e, t) {
                                    var r = "" + q(e) + !!t;
                                    this.xhrGuids && !this.xhrGuids[r] && (this.xhrGuids[r] = !0, this.totalCbs += 1)
                                }

                                function f(e, t) {
                                    var r = "" + q(e) + !!t;
                                    this.xhrGuids && this.xhrGuids[r] && (delete this.xhrGuids[r], this.totalCbs -= 1)
                                }

                                function h() {
                                    this.endTime = (0, j.z)()
                                }

                                function p(e, r) {
                                    r instanceof J && "load" === e[0] && t.emit("xhr-load-added", [e[1], e[2]], r)
                                }

                                function v(e, r) {
                                    r instanceof J && "load" === e[0] && t.emit("xhr-load-removed", [e[1], e[2]], r)
                                }

                                function m(e, t, r) {
                                    t instanceof J && ("onload" === r && (this.onload = !0), ("load" === (e[0] && e[0].type) || this.onload) && (this.xhrCbStart = (0, j.z)()))
                                }

                                function b(e, r) {
                                    this.xhrCbStart && t.emit("xhr-cb-time", [(0, j.z)() - this.xhrCbStart, this.onload, r], r)
                                }

                                function y(e) {
                                    var t, r = e[1] || {};
                                    if ("string" == typeof e[0] ? 0 === (t = e[0]).length && g.il && (t = "" + g._A.location.href) : e[0] && e[0].url ? t = e[0].url : g._A?.URL && e[0] && e[0] instanceof URL ? t = e[0].href : "function" == typeof e[0].toString && (t = e[0].toString()), "string" == typeof t && 0 !== t.length) {
                                        t && (this.parsedOrigin = (0, W.e)(t), this.sameOrigin = this.parsedOrigin.sameOrigin);
                                        var o = n.generateTracePayload(this.parsedOrigin);
                                        if (o && (o.newrelicHeader || o.traceContextParentHeader))
                                            if (e[0] && e[0].headers) s(e[0].headers, o) && (this.dt = o);
                                            else {
                                                var i = {};
                                                for (var a in r) i[a] = r[a];
                                                i.headers = new Headers(r.headers || {}), s(i.headers, o) && (this.dt = o), e.length > 1 ? e[1] = i : e.push(i)
                                            }
                                    }

                                    function s(e, t) {
                                        var r = !1;
                                        return t.newrelicHeader && (e.set("newrelic", t.newrelicHeader), r = !0), t.traceContextParentHeader && (e.set("traceparent", t.traceContextParentHeader), t.traceContextStateHeader && e.set("tracestate", t.traceContextStateHeader), r = !0), r
                                    }
                                }

                                function x(e, t) {
                                    this.params = {}, this.metrics = {}, this.startTime = (0, j.z)(), this.dt = t, e.length >= 1 && (this.target = e[0]), e.length >= 2 && (this.opts = e[1]);
                                    var r, n = this.opts || {},
                                        o = this.target;
                                    "string" == typeof o ? r = o : "object" == typeof o && o instanceof Q ? r = o.url : g._A?.URL && "object" == typeof o && o instanceof URL && (r = o.href), te(this, r);
                                    var i = ("" + (o && o instanceof Q && o.method || n.method || "GET")).toUpperCase();
                                    this.params.method = i, this.body = n.body, this.txSize = V(n.body) || 0
                                }

                                function A(e, t) {
                                    var n;
                                    this.endTime = (0, j.z)(), this.params || (this.params = {}), this.params.status = t ? t.status : 0, "string" == typeof this.rxSize && this.rxSize.length > 0 && (n = +this.rxSize);
                                    var o = {
                                        txSize: this.txSize,
                                        rxSize: n,
                                        duration: (0, j.z)() - this.startTime
                                    };
                                    r("xhr", [this.params, o, this.startTime, this.endTime, "fetch"], this, s.D.ajax)
                                }

                                function w(e) {
                                    var t = this.params,
                                        n = this.metrics;
                                    if (!this.ended) {
                                        this.ended = !0;
                                        for (var o = 0; o < Y; o++) e.removeEventListener(X[o], this.listener, !1);
                                        t.aborted || (n.duration = (0, j.z)() - this.startTime, this.loadCaptureCalled || 4 !== e.readyState ? null == t.status && (t.status = 0) : E(this, e), n.cbTime = this.cbTime, r("xhr", [t, n, this.startTime, this.endTime, "xhr"], this, s.D.ajax))
                                    }
                                }

                                function E(e, r) {
                                    e.params.status = r.status;
                                    var n = function(e, t) {
                                        var r = e.responseType;
                                        return "json" === r && null !== t ? t : "arraybuffer" === r || "blob" === r || "json" === r ? V(e.response) : "text" === r || "" === r || void 0 === r ? V(e.responseText) : void 0
                                    }(r, e.lastSize);
                                    if (n && (e.metrics.rxSize = n), e.sameOrigin) {
                                        var o = r.getResponseHeader("X-NewRelic-App-Data");
                                        o && ((0, C.p)(k.mY, ["Ajax/CrossApplicationTracing/Header/Seen"], void 0, s.D.metrics, t), e.params.cat = o.split(", ").pop())
                                    }
                                    e.loadCaptureCalled = !0
                                }
                                t.on("new-xhr", o), t.on("open-xhr-start", i), t.on("open-xhr-end", a), t.on("send-xhr-start", d), t.on("xhr-cb-time", u), t.on("xhr-load-added", l), t.on("xhr-load-removed", f), t.on("xhr-resolved", h), t.on("addEventListener-end", p), t.on("removeEventListener-end", v), t.on("fn-end", b), t.on("fetch-before-start", y), t.on("fetch-start", x), t.on("fn-start", m), t.on("fetch-done", A)
                            }(e, this.ee, this.handler, this.dt), this.importAggregator()
                        }
                    }
                }

                function te(e, t) {
                    var r = (0, W.e)(t),
                        n = e.params || e;
                    n.hostname = r.hostname, n.port = r.port, n.protocol = r.protocol, n.host = r.hostname + ":" + r.port, n.pathname = r.pathname, e.parsedOrigin = r, e.sameOrigin = r.sameOrigin
                }
                var re = o(3614);
                const {
                    BST_RESOURCE: ne,
                    RESOURCE: oe,
                    START: ie,
                    END: ae,
                    FEATURE_NAME: se,
                    FN_END: ce,
                    FN_START: de,
                    PUSH_STATE: ue
                } = re;
                var le = o(7056);
                class fe extends y {
                    static featureName = t.t9;
                    constructor(e, r) {
                        let n, o = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        super(e, r, t.t9, o);
                        try {
                            n = JSON.parse(localStorage.getItem("".concat(le.Bq, "_").concat(le.K4)))
                        } catch (e) {}
                        this.#c(n) ? this.#d(n?.sessionReplayMode) : this.importAggregator()
                    }
                    #c(e) {
                        return e && (e.sessionReplayMode === le.IK.FULL || e.sessionReplayMode === le.IK.ERROR) || b(this.agentIdentifier)
                    }
                    async #d(e) {
                        const {
                            Recorder: t
                        } = await Promise.all([o.e(63), o.e(379)]).then(o.bind(o, 4136));
                        this.recorder = new t({
                            mode: e,
                            agentIdentifier: this.agentIdentifier
                        }), this.recorder.startRecording(), this.abortHandler = this.recorder.stopRecording, this.importAggregator({
                            recorder: this.recorder
                        })
                    }
                }
                var he = o(4649);
                class pe extends y {
                    static featureName = he.t;
                    constructor(e, t) {
                        let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
                        super(e, t, he.t, r), this.importAggregator()
                    }
                }
                new class extends a {
                    constructor(t, r) {
                        super(r), g._A ? (this.sharedAggregator = new _({
                            agentIdentifier: this.agentIdentifier
                        }), this.features = {}, (0, T.h5)(this.agentIdentifier, this), this.desiredFeatures = new Set(t.features || []), this.desiredFeatures.add(A), this.runSoftNavOverSpa = [...this.desiredFeatures].some((e => e.featureName === s.D.softNav)), (0, l.j)(this, t, t.loaderType || "agent"), this.run()) : (0, e.Z)("Failed to initial the agent. Could not determine the runtime environment.")
                    }
                    get config() {
                        return {
                            info: this.info,
                            init: this.init,
                            loader_config: this.loader_config,
                            runtime: this.runtime
                        }
                    }
                    run() {
                        try {
                            const t = u(this.agentIdentifier),
                                r = [...this.desiredFeatures];
                            r.sort(((e, t) => s.p[e.featureName] - s.p[t.featureName])), r.forEach((r => {
                                if (!t[r.featureName] && r.featureName !== s.D.pageViewEvent) return;
                                if (this.runSoftNavOverSpa && r.featureName === s.D.spa) return;
                                if (!this.runSoftNavOverSpa && r.featureName === s.D.softNav) return;
                                const n = function(e) {
                                    switch (e) {
                                        case s.D.ajax:
                                            return [s.D.jserrors];
                                        case s.D.sessionTrace:
                                            return [s.D.ajax, s.D.pageViewEvent];
                                        case s.D.sessionReplay:
                                            return [s.D.sessionTrace];
                                        case s.D.pageViewTiming:
                                            return [s.D.pageViewEvent];
                                        default:
                                            return []
                                    }
                                }(r.featureName);
                                n.every((e => e in this.features)) || (0, e.Z)("".concat(r.featureName, " is enabled but one or more dependent features has not been initialized (").concat((0, D.P)(n), "). This may cause unintended consequences or missing data...")), this.features[r.featureName] = new r(this.agentIdentifier, this.sharedAggregator)
                            }))
                        } catch (t) {
                            (0, e.Z)("Failed to initialize all enabled instrument classes (agent aborted) -", t);
                            for (const e in this.features) this.features[e].abortHandler?.();
                            const r = (0, T.fP)();
                            return delete r.initializedAgents[this.agentIdentifier]?.api, delete r.initializedAgents[this.agentIdentifier]?.features, delete this.sharedAggregator, r.ee?.abort(), delete r.ee?.get(this.agentIdentifier), !1
                        }
                    }
                }({
                    features: [A, N, class extends y {
                        static featureName = se;
                        constructor(e, t) {
                            if (super(e, t, se, !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]), !g.il) return;
                            const r = this.ee;
                            let n;
                            (0, Z.QU)(r), this.eventsEE = (0, Z.em)(r), this.eventsEE.on(de, (function(e, t) {
                                this.bstStart = (0, j.z)()
                            })), this.eventsEE.on(ce, (function(e, t) {
                                (0, C.p)("bst", [e[0], t, this.bstStart, (0, j.z)()], void 0, s.D.sessionTrace, r)
                            })), r.on(ue + ie, (function(e) {
                                this.time = (0, j.z)(), this.startPath = location.pathname + location.hash
                            })), r.on(ue + ae, (function(e) {
                                (0, C.p)("bstHist", [location.pathname + location.hash, this.startPath, this.time], void 0, s.D.sessionTrace, r)
                            }));
                            try {
                                n = new PerformanceObserver((e => {
                                    const t = e.getEntries();
                                    (0, C.p)(ne, [t], void 0, s.D.sessionTrace, r)
                                })), n.observe({
                                    type: oe,
                                    buffered: !0
                                })
                            } catch (e) {}
                            this.importAggregator({
                                resourceObserver: n
                            })
                        }
                    }, fe, ee, M, pe, L],
                    loaderType: "pro"
                })
            })()
        })();
    </script>

    <script type="text/javascript">
        if (window && window.newrelic) {
            var cookieStorage = new URLSearchParams(document.cookie.replaceAll("&", "%26").replaceAll("; ", "&"));
            var uuid = cookieStorage.get("gk_suid2") || cookieStorage.get("gk_suid");
            if (uuid) {
                window.newrelic.setCustomAttribute("browser_session_id", uuid);
            }
        }
    </script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="cache-control" content="no-cache" />

    <meta name="language" content="english" />
    <meta name="distribution" content="global" />
    <meta name="author" content="Behance" />
    <meta name="publisher" content="Behance" />
    <meta name="copyright" content="2024 Behance" />
    <meta name="p:domain_verify" content="d7cdd4d26570133b3ce3a1e3c095b3a4" />
    <meta name="fb:app_id" content="229702757350" />
    <meta name="twitter:widgets:csp" content="on">


    <meta name="viewport" content="width=device-width, user-scalable=yes, minimum-scale=1.0" />

    <meta name="apple-itunes-app" content="app-id=489667151">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/behance/vorr" />
    <link rel="preload" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/fonts/AcuminPro/acumin.woff2" as='font' type='font/woff2' crossorigin='anonymous' />
    <link rel="preload" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/fonts/AcuminPro/acumin-semibold.woff2" as='font' type='font/woff2' crossorigin='anonymous' />
    <link rel="preload" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/fonts/AcuminPro/acumin-bold.woff2" as='font' type='font/woff2' crossorigin='anonymous' />
    <link rel="preload" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/fonts/AcuminPro/acumin-black.woff2" as='font' type='font/woff2' crossorigin='anonymous' />
    <link rel="preload" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/fonts/BeIcons/BeIcons.woff2" as='font' type='font/woff2' crossorigin='anonymous' />
    <script type="module" src="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/js/main.f42f421812f15a7a3db5.js" crossorigin></script>
    <script type="module" src="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/js/runtimechunk~427bc08356755dde99f62f76e1e0ffdd7bcce70f.app_client.2ef24ca0ba2399f9d9fe.js" crossorigin></script>
    <title>E-commerce Fashion Shop Web UI design :: Behance</title>
    <meta name="head:count" content="1">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "VisualArtwork",
            "artworkSurface": "Digital",
            "creator": [{
                "@type": "Person",
                "identifier": 330325461,
                "name": "MD Sohag Rana",
                "url": "https://www.behance.net/sohaguixd"
            }],
            "description": "Hello Creative People,\\nHere is my exploration of the E-commerce Fashion Shop Web UI design that I have created recently. I hope everyone will like the design.\\n\\nDon&#39;t forget to share your feedback.",
            "image": "https://mir-s3-cdn-cf.behance.net/projects/404/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg",
            "identifier": 126991995,
            "interactionStatistic": [{
                "@type": "InteractionCounter",
                "interactionType": "http://schema.org/LikeAction",
                "userInteractionCount": 105
            }, {
                "@type": "InteractionCounter",
                "interactionType": "http://schema.org/WatchAction",
                "userInteractionCount": 2108
            }],
            "name": "E-commerce Fashion Shop Web UI design",
            "url": "https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design"
        }
    </script>
    <link rel="alternate" type="application/json+oembed" href="https://www.behance.net/services/oembed?url=https%3A%2F%2Fwww.behance.net%2Fgallery%2F126991995%2FE-commerce-Fashion-Shop-Web-UI-design" title="E-commerce Fashion Shop Web UI design :: Behance" />
    <meta name="description" content="Hello Creative People,Here is my exploration of the E-commerce Fashion Shop Web UI design that I have created recently. I hope everyone will like the design.Don't forget to share your feedback." />
    <meta name="keywords" content="Adobe XD,Clothing,e-commerce,Ecommerce,Fashion ,landing page,online store,ui design,UI/UX,Web Design ,Woocommerce,UI/UX,Web Design,Graphic Design" />
    <meta name="revisit-after" content="2 days" />
    <meta name="robots" content="index, follow" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@behance" />
    <meta name="twitter:title" content="E-commerce Fashion Shop Web UI design" />
    <meta name="twitter:description" content="Hello Creative People,Here is my exploration of the E-commerce Fashion Shop Web UI design that I have created recently. I hope everyone will like the design.Don't forget to share your feedback." />
    <meta name="twitter:creator" content="@sohaguixd" />
    <meta name="twitter:app:id:iphone" content="489667151" />
    <meta name="twitter:app:url:iphone" content="behance://project/126991995" />
    <meta name="twitter:app:name:iphone" content="Behance" />
    <meta name="twitter:image" content="https://mir-s3-cdn-cf.behance.net/projects/max_808/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg" />
    <meta property="og:title" content="E-commerce Fashion Shop Web UI design" />
    <meta property="og:url" content="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" />
    <meta property="og:owners" content="MD Sohag Rana" />
    <meta property="og:site_name" content="Behance" />
    <meta property="og:type" content=":project" />
    <meta property="fb:app_id" content="229702757350" />
    <meta property="og:description" content="Hello Creative People,Here is my exploration of the E-commerce Fashion Shop Web UI design that I have created recently. I hope everyone will like the design.Don't forget to share your feedback." />
    <meta property="og:image" content="https://mir-s3-cdn-cf.behance.net/projects/max_808/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg" />

    <link rel="shortcut icon" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/img/site/favicon.ico?cb=264615658" />
    <link rel="apple-touch-icon" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/img/site/apple-touch-icon.png?cb=264615658" />


    <link rel='manifest' href='/manifest.json' />
    <link rel='preconnect' href='https://mir-s3-cdn-cf.behance.net' />
    <link rel='dns-prefetch' href='https://static.adobelogin.com' />
    <link rel='dns-prefetch' href='https://c.evidon.com' />
    <link rel='dns-prefetch' href='https://sstats.adobe.com/' />
    <link rel='dns-prefetch' href='https://assets.adobedtm.com/' />
    <link rel='dns-prefetch' href='https://www.adobe.com/' />
    <link rel='dns-prefetch' href='https://js-agent.newrelic.com' />
    <link rel='dns-prefetch' href='https://cdn.behance.net/' />
    <link rel='dns-prefetch' href='https://mir-s3-cdn-cf.behance.net/' />
    <link rel='dns-prefetch' href='https://cdn.cookielaw.org/' />
    <link rel='dns-prefetch' href='https://dpm.demdex.net/' />
    <link rel='dns-prefetch' href='https://geo2.adobe.com/' />
    <link rel='dns-prefetch' href='https://www.facebook.com/' />
    <link rel='dns-prefetch' href='https://connect.facebook.net/' />
    <link rel='image_src' href='https://mir-s3-cdn-cf.behance.net/projects/202/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg' />
    <link rel='canonical' href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=cs_CZ' hreflang='cs-cz' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=de_DE' hreflang='de-de' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=da_DK' hreflang='da-dk' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=en_US' hreflang='en-us' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=es_ES' hreflang='es-es' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=fi_FI' hreflang='fi-fi' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=fr_FR' hreflang='fr-fr' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=it_IT' hreflang='it-it' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=ja_JP' hreflang='ja-jp' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=ko_KR' hreflang='ko-kr' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=nl_NL' hreflang='nl-nl' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=nb_NO' hreflang='nb-no' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=pl_PL' hreflang='pl-pl' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=pt_BR' hreflang='pt-br' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=ru_RU' hreflang='ru-ru' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=sv_SE' hreflang='sv-se' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=tr_TR' hreflang='tr-tr' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=zh_CN' hreflang='zh-cn' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?locale=zh_TW' hreflang='zh-tw' rel='alternate' />
    <link href='https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design' hreflang='x-default' rel='alternate' />
    <link rel="stylesheet" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/css/networki-main.css?cb=264615658" type="text/css" />
    <link rel="stylesheet" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/css/networki-modules.css?cb=264615658" type="text/css" />
    <link rel="preload" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/css/responsive.css?cb=264615658" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/css/project/page.css?cb=264615658" type="text/css" />
    <style type="text/css">
        #project-modules .title {
            color: #191919;
            font-family: helvetica, arial, sans-serif;
            font-size: 36px;
            font-style: normal;
            font-weight: bold;
            line-height: 1.1em;
            text-align: left;
            text-decoration: none;
        }

        #project-modules .sub-title {
            color: #a4a4a4;
            font-family: helvetica, arial, sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: normal;
            line-height: 1.4em;
            text-align: left;
            text-decoration: none;
        }

        #project-modules .editor-text .main-text,
        #primary-project-content.project-styles .main-text {
            color: #696969;
            font-family: helvetica, arial, sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: normal;
            line-height: 1.4em;
            text-align: left;
            text-decoration: none;
        }

        #project-modules .caption,
        #project-modules .caption-text-wrap {
            color: #a4a4a4;
            font-family: helvetica, arial, sans-serif;
            font-size: 14px;
            font-style: italic;
            font-weight: normal;
            line-height: 1.4em;
            text-align: left;
            text-decoration: none;
        }

        #project-modules .caption-text-wrap a {
            font-size: 14px !important;
        }

        #project-modules .main-text a {
            color: #1769FF;
            text-align: left;
            text-decoration: none;
        }

        #primary-project-content .module {
            padding-bottom: 0px;
        }

        #primary-project-content {
            padding-top: 0px;
            background-color: #F2F2F2;
        }

        .spacer {
            height: 0px;
        }

        .divider {
            display: none;
        }

        .module.last .divider {
            display: none;
        }
    </style>
    <style data-vue-ssr-id="dee30e62:0 759743bf:0 c47c31b2:0 9cb64b28:0 36693b2c:0 6700c5bc:0 702c58fd:0 299f284a:0 acc8caf2:0 418f8d6c:0 81effa9c:0 96e232b6:0 6aefb90a:0 6c8d4cb2:0 83827f74:0 27a1257c:0 71eebf4c:0 46621324:0 1a52aa1b:0 59a0ebf9:0 23ace3c4:0 9c30441a:0 a91fe96a:0 4bd93bb8:0 268fc83c:0 7a9900aa:0 0eddcfb6:0 098d2f92:0 bafce7ce:0 1cc1c48a:0 2832ff30:0 7b241fde:0 24b01368:0 2aa1c938:0 319fbbeb:0 409f60bd:0 23db92da:0 6cadfb5d:0 15ac14ee:0 b1cbc246:0 5060ddb9:0 b4e861b0:0 6bffdbca:0 ad2956a0:0 11fd795b:0 0db07d4b:0 732d4d86:0 5e3cf294:0 171cfb00:0 6670bcbc:0 2da83e04:0 1125fe54:0 8bdb014c:0 724c4124:0 bb37affc:0 47c458fc:0 7bde7b5d:0 07d8289c:0 ffa781f0:0 d682811c:0 1cb9aa9e:0">
        .App-app-AxT * {
            box-sizing: border-box
        }

        .Accessibility-accessibility-T1N :focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .Accessibility-accessibility-T1N :focus:not(:focus-visible) {
            outline: none
        }

        .PurchaseSourceFileModalManager-purchaseModal-hu6.PurchaseSourceFileModalManager-purchaseModal-hu6 {
            max-width: 837px;
            min-width: unset;
            padding: 0
        }

        @media(max-width: 603px) {
            .PurchaseSourceFileModalManager-purchaseModal-hu6.PurchaseSourceFileModalManager-purchaseModal-hu6 {
                padding-top: 20px
            }
        }

        .SubscriptionModalManager-subscriptionModal-u0n.SubscriptionModalManager-subscriptionModal-u0n {
            min-width: unset;
            padding: 0
        }

        .SubscriptionModalManager-focusModal-CGK {
            z-index: 250
        }

        .MessageBanner-messageBanner-Lb_ {
            align-items: center;
            background-color: #fff;
            border-bottom: 1px solid #e8e8e8;
            display: flex;
            font-size: 13px;
            font-weight: bold;
            height: 35px;
            justify-content: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 8
        }

        @media(max-width: 1024px) {
            .MessageBanner-messageBanner-Lb_ {
                display: none
            }
        }

        .MessageBanner-messageBanner-Lb_ :focus-visible {
            outline: 2px solid #0057ff;
            outline-offset: 0
        }

        .MessageBanner-messageBanner-Lb_ .MessageBanner-close-gBl {
            cursor: pointer;
            position: absolute;
            right: 8px
        }

        .MessageBanner-messageBanner-Lb_ .MessageBanner-icon-t2P {
            display: block;
            fill: #707070;
            height: 8.6px;
            width: 8.6px
        }

        .MessageBanner-messageBanner-Lb_ .MessageBanner-icon-t2P:hover {
            fill: #191919
        }

        @media(min-width: 1025px) {
            .has-message #top-panel {
                padding-top: 92px
            }
        }

        @media(min-width: 1025px) {
            .has-message .rf-primary-nav.rf-primary-nav--main {
                top: 35px
            }
        }

        @media(min-width: 1025px)and (max-width: 1080px) {
            .has-message .rf-primary-nav--mobile {
                top: 35px
            }
        }

        .PrimaryNav-screenReaderOnly-Yh2 {
            border-width: 0 !important;
            clip: rect(1px, 1px, 1px, 1px) !important;
            height: 1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            white-space: nowrap !important;
            width: 1px !important
        }

        .PrimaryNav-root-GKW {
            margin-bottom: -3px;
            position: relative;
            z-index: 6
        }

        @media(max-width: 921px) {
            .PrimaryNav-root-GKW.PrimaryNav-isLightbox-eZW {
                z-index: 9
            }
        }

        .PrimaryNav-activate-RQu {
            margin-right: 20px
        }

        .PrimaryNav-menuItemIconFill-qZk {
            width: 100%
        }

        .PrimaryNav-fixed-IXr {
            left: 0;
            position: fixed;
            right: 0;
            top: 0
        }

        @media(min-width: 1025px) {
            .has-message .PrimaryNav-fixed-IXr {
                top: 35px
            }
        }

        .popup.inbox.timeline-container::after {
            right: 11px
        }

        .PrimaryNav-tooltipWrapper-ffQ.PrimaryNav-tooltipWrapper-ffQ {
            position: absolute;
            right: 0;
            top: 100%
        }

        @media(max-width: 1079px) {
            .PrimaryNav-tooltipWrapper-ffQ.PrimaryNav-tooltipWrapper-ffQ {
                display: none
            }
        }

        .PrimaryNav-strip-Xyi {
            background-color: #fff;
            display: flex;
            height: 55px;
            transition: background 300ms
        }

        @media(min-width: 1025px) {
            .PrimaryNav-strip-Xyi {
                padding-right: 24px
            }
        }

        @media(max-width: 1079px) {
            .PrimaryNav-strip-Xyi {
                padding-right: 8px
            }
        }

        .PrimaryNav-strip-Xyi::before {
            background-color: #ececec;
            bottom: 0;
            content: "";
            height: 1px;
            left: 0;
            opacity: 1;
            pointer-events: none;
            position: absolute;
            right: 0
        }

        .PrimaryNav-strip-Xyi::after {
            background-color: #191919;
            bottom: -1px;
            content: "";
            height: 100vh;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: opacity .25s linear
        }

        .PrimaryNav-root-GKW:not(.PrimaryNav-hamburgerMenuOpen-diU) .PrimaryNav-strip-Xyi::after {
            pointer-events: none
        }

        @media(min-width: 1080px) {
            .PrimaryNav-strip-Xyi {
                padding-left: 24px
            }
        }

        @media(max-width: 1079px) {
            .PrimaryNav-strip-Xyi .PrimaryNav-hamburgerMenuButtonWrapper-Cz7 .PrimaryNav-hamburgerButton-AQr {
                padding-left: 16px
            }
        }

        .PrimaryNav-transparentStripBackground-U3f {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0));
            display: block;
            height: 100px;
            left: 0;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            transition: opacity 300ms;
            width: 100%;
            z-index: -1
        }

        .PrimaryNav-transparentStripBackground-U3f.PrimaryNav-noGradient-YP2 {
            background: transparent
        }

        .PrimaryNav-announcementsActivator-qFI {
            margin: 0 6px
        }

        .PrimaryNav-appLinkContainer-bhx {
            align-items: center;
            display: flex;
            padding-left: 8px;
            padding-right: 8px
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-signup-XIt,
        .PrimaryNav-strip-Xyi .PrimaryNav-loggedOutOptions-ZwH {
            align-items: center;
            display: flex;
            height: 100%;
            justify-content: center
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-loggedOutOptions-ZwH {
            margin-right: 15px
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigation-iAB {
            display: flex
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigation-iAB,
        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p {
            height: 100%
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p {
            position: relative
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p:not(:last-child) {
            margin-right: 24px
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-text-zNv .PrimaryNav-coreNavigationLink-GpA,
        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-home-PBH .PrimaryNav-coreNavigationLink-GpA {
            align-items: center;
            cursor: pointer;
            display: flex;
            height: 100%
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-text-zNv .PrimaryNav-coreNavigationLink-GpA::after {
            background-color: #191919;
            content: "";
            height: 2px;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 100%;
            transition: transform .15s, opacity .15s
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-text-zNv .PrimaryNav-coreNavigationLink-GpA.PrimaryNav-active-REm::after,
        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-text-zNv .PrimaryNav-coreNavigationLink-GpA:hover::after {
            opacity: 1;
            transform: translateY(-100%)
        }

        .PrimaryNav-coreNavigationLink-GpA,
        .PrimaryNav-adobeCreativeCloudLink-m4O {
            color: inherit
        }

        .PrimaryNav-coreNavigationLink-GpA:hover,
        .PrimaryNav-adobeCreativeCloudLink-m4O:hover {
            text-decoration: none
        }

        .PrimaryNav-strip-Xyi:not(.PrimaryNav-transparentStrip-u4D) .PrimaryNav-coreNavigationLink-GpA:focus-visible,
        .PrimaryNav-strip-Xyi:not(.PrimaryNav-transparentStrip-u4D) .PrimaryNav-adobeCreativeCloudLink-m4O:focus-visible {
            outline: none
        }

        .PrimaryNav-strip-Xyi:not(.PrimaryNav-transparentStrip-u4D) .PrimaryNav-coreNavigationLink-GpA:focus-visible .PrimaryNav-coreNavigationLabel-eg9,
        .PrimaryNav-strip-Xyi:not(.PrimaryNav-transparentStrip-u4D) .PrimaryNav-coreNavigationLink-GpA:focus-visible .PrimaryNav-iconWrap-RHt,
        .PrimaryNav-strip-Xyi:not(.PrimaryNav-transparentStrip-u4D) .PrimaryNav-adobeCreativeCloudLink-m4O:focus-visible .PrimaryNav-coreNavigationLabel-eg9,
        .PrimaryNav-strip-Xyi:not(.PrimaryNav-transparentStrip-u4D) .PrimaryNav-adobeCreativeCloudLink-m4O:focus-visible .PrimaryNav-iconWrap-RHt {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .PrimaryNav-transparentStrip-u4D .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-text-zNv .PrimaryNav-coreNavigationLink-GpA::after {
            background-color: #fff
        }

        .PrimaryNav-transparentStrip-u4D .PrimaryNav-coreNavigationLink-GpA:focus-visible,
        .PrimaryNav-transparentStrip-u4D .PrimaryNav-adobeCreativeCloudLink-m4O:focus-visible {
            outline: none
        }

        .PrimaryNav-transparentStrip-u4D .PrimaryNav-coreNavigationLink-GpA:focus-visible .PrimaryNav-coreNavigationLabel-eg9,
        .PrimaryNav-transparentStrip-u4D .PrimaryNav-coreNavigationLink-GpA:focus-visible .PrimaryNav-iconWrap-RHt,
        .PrimaryNav-transparentStrip-u4D .PrimaryNav-adobeCreativeCloudLink-m4O:focus-visible .PrimaryNav-coreNavigationLabel-eg9,
        .PrimaryNav-transparentStrip-u4D .PrimaryNav-adobeCreativeCloudLink-m4O:focus-visible .PrimaryNav-iconWrap-RHt {
            outline: 1px solid #fff;
            outline-offset: 3px
        }

        .PrimaryNav-notificationsPopoverRoot-Uv7,
        .PrimaryNav-notificationsPopoverActivator-oUr {
            height: 100%
        }

        .PrimaryNav-recommendedTalentRoot-ax1 {
            margin: 0
        }

        .PrimaryNav-shareYourWork-YBv {
            min-width: 120px
        }

        .PrimaryNav-freeTrialListItem-H_O {
            display: flex
        }

        .PrimaryNav-freeTrialButton-TwI .PrimaryNav-freeTrialButtonLabel-_eM {
            height: 32px
        }

        .PrimaryNav-freeTrialButton-TwI .PrimaryNav-creativeCloudIcon-_M1 {
            height: 20px;
            margin-top: 3px;
            width: 20px
        }

        .PrimaryNav-freeTrialListItemDivider-zY8 {
            border-left: solid 1px #e8e8e8;
            height: 20px;
            margin-left: 8px;
            margin-top: 8px;
            width: 16px
        }

        .PrimaryNav-transparentStrip-u4D .PrimaryNav-searchLinkCompact-par .PrimaryNav-link-hxX {
            background-color: #fff
        }

        .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-home-PBH .PrimaryNav-coreNavigationLink-GpA .PrimaryNav-logoWrap-gf0 {
            padding: 6px 0 8px;
            position: relative
        }

        .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-home-PBH .PrimaryNav-coreNavigationLink-GpA:focus-visible {
            outline: none
        }

        .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-home-PBH .PrimaryNav-coreNavigationLink-GpA:focus-visible .PrimaryNav-logoWrap-gf0 {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .PrimaryNav-whiteNavigationItem-pnH.PrimaryNav-home-PBH .PrimaryNav-coreNavigationLink-GpA:focus-visible {
            outline: none
        }

        .PrimaryNav-whiteNavigationItem-pnH.PrimaryNav-home-PBH .PrimaryNav-coreNavigationLink-GpA:focus-visible .PrimaryNav-logoWrap-gf0 {
            outline: 1px solid #fff;
            outline-offset: 3px
        }

        .PrimaryNav-coreNavigationLabel-eg9 {
            display: flex;
            font-size: 16px;
            font-weight: 600;
            gap: 7px;
            margin: 0;
            position: relative
        }

        .PrimaryNav-coreNavigationLabel-eg9.PrimaryNav-coreNavigationLabelDesktop-wIZ {
            align-items: center;
            color: inherit;
            height: 20px;
            justify-content: center
        }

        .PrimaryNav-coreNavigationLabel-eg9.PrimaryNav-coreNavigationLabelDesktop-wIZ:hover {
            text-decoration: none
        }

        .PrimaryNav-coreNavigationLabel-eg9 .PrimaryNav-coreNavigationCustomComponent-KLu {
            margin-top: 2px;
            z-index: 0
        }

        .PrimaryNav-coreNavigationChildContainer-o_A {
            display: flex;
            flex-direction: column;
            min-width: 210px;
            padding: 14px 0 22px
        }

        .PrimaryNav-coreNavigationItemNestedLinkContainer-Tiz,
        .PrimaryNav-coreNavigationNestedLinks-Sy6 {
            height: 100%
        }

        .PrimaryNav-coreNavigationItemNestedLinkContainer-Tiz .PrimaryNav-coreNavigationNestedLinksActivator-AMC,
        .PrimaryNav-coreNavigationNestedLinks-Sy6 .PrimaryNav-coreNavigationNestedLinksActivator-AMC {
            align-items: center;
            display: flex;
            height: 100%;
            justify-content: center;
            z-index: 0
        }

        .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-text-zNv .PrimaryNav-coreNavigationItemNestedLinkContainer-Tiz.PrimaryNav-coreNavigationLink-GpA:hover::after {
            opacity: 0
        }

        .PrimaryNav-coreNavigationChildLink-CkL {
            color: dimgray;
            cursor: pointer;
            display: block;
            font-size: 13px;
            padding: 6px 24px;
            transition: color .15s ease-in-out;
            width: 100%
        }

        .PrimaryNav-coreNavigationChildLink-CkL.PrimaryNav-large-2Eu {
            color: #191919;
            font-size: 14px;
            font-weight: 600
        }

        .PrimaryNav-coreNavigationChildLink-CkL.PrimaryNav-active-REm,
        .PrimaryNav-coreNavigationChildLink-CkL:hover {
            color: #0057ff;
            text-decoration: none
        }

        .PrimaryNav-coreNavigationChildLink-CkL:focus-visible {
            outline-offset: -1px
        }

        .PrimaryNav-coreNavigationDivider-_Y7 {
            border-right: 1px solid #e8e8e8;
            height: 20px;
            margin-top: 18px;
            width: 1px
        }

        .PrimaryNav-coreNavigationChildDivider-ExJ {
            background-color: #e8e8e8;
            border: none;
            height: 1px;
            margin: 14px 0
        }

        .PrimaryNav-caret-UUZ {
            fill: #707070;
            height: 10px;
            margin-top: 2px;
            transform: rotate(-90deg);
            width: 10px
        }

        .PrimaryNav-logo-rqB.PrimaryNav-behance-Ecj {
            position: relative;
            top: 1px
        }

        @media(max-width: 1079px) {
            .PrimaryNav-coreNavigation-iAB {
                margin-right: auto
            }
        }

        .PrimaryNav-hideSearchInput-Edq .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigation-iAB {
            margin-right: auto
        }

        .PrimaryNav-siteSearch-yuO {
            align-items: center;
            display: flex;
            flex: 1;
            margin: auto;
            max-width: 750px;
            padding-left: 32px;
            padding-right: 32px;
            width: 100%
        }

        .PrimaryNav-shouldTruncateSearch-prq .PrimaryNav-siteSearch-yuO {
            visibility: hidden
        }

        .PrimaryNav-shouldTruncateSearch-prq .PrimaryNav-searchLinkCompact-par {
            display: flex
        }

        .PrimaryNav-signup-XIt {
            z-index: 0
        }

        .PrimaryNav-userControls-GbX {
            align-items: center;
            display: flex;
            position: relative;
            z-index: 0
        }

        @media(min-width: 1080px) {
            .PrimaryNav-userControls-GbX {
                margin-left: 16px;
                margin-right: 16px
            }
        }

        @media(max-width: 1079px) {

            .PrimaryNav-userControls-GbX .PrimaryNav-userControl-LdV,
            .PrimaryNav-searchLink-xVd {
                padding-left: 12px;
                padding-right: 12px
            }
        }

        .PrimaryNav-loggedOutOption-OP6:not(:last-child) {
            margin-right: 8px
        }

        .PrimaryNav-loggedOutOption-OP6.PrimaryNav-logIn-td1 {
            position: relative
        }

        .PrimaryNav-userControl-LdV {
            align-items: center;
            cursor: pointer;
            display: inline-flex;
            height: 100%;
            position: relative;
            vertical-align: top
        }

        @media(min-width: 1080px) {
            .PrimaryNav-userControl-LdV {
                padding: 8px;
                padding-bottom: 9px
            }

            .PrimaryNav-userControl-LdV.PrimaryNav-maxNotifications-Vw4 {
                padding-left: 12px;
                padding-right: 12px
            }
        }

        .PrimaryNav-userControl-LdV.PrimaryNav-me-apm {
            padding: 0
        }

        .PrimaryNav-userControl-LdV.PrimaryNav-me-apm .PrimaryNav-userControlLink-JRN:focus-visible {
            outline-offset: 0
        }

        .PrimaryNav-userControl-LdV.PrimaryNav-mail-gX_,
        .PrimaryNav-userControl-LdV.PrimaryNav-notifications-DqR {
            isolation: isolate;
            margin-top: 1px
        }

        .PrimaryNav-userControl-LdV.PrimaryNav-mail-gX_ .PrimaryNav-userControlLink-JRN,
        .PrimaryNav-userControl-LdV.PrimaryNav-notifications-DqR .PrimaryNav-userControlLink-JRN {
            background: none;
            border: none;
            cursor: pointer
        }

        .PrimaryNav-userControl-LdV .PrimaryNav-icon-r_P,
        .PrimaryNav-adobeLogo-VeZ .PrimaryNav-icon-r_P {
            transition: fill .15s linear
        }

        .PrimaryNav-userControl-LdV:hover .PrimaryNav-icon-r_P,
        .PrimaryNav-adobeLogo-VeZ:hover .PrimaryNav-icon-r_P {
            fill: #707070
        }

        .PrimaryNav-count-nkd {
            background-color: #0057ff;
            border: 2px solid #fff;
            border-radius: 4px;
            color: #fff;
            font-size: 10px;
            font-weight: 900;
            left: 40%;
            min-width: 20px;
            padding: 2px 3px;
            position: absolute;
            text-align: center;
            top: 4px;
            z-index: 1
        }

        .PrimaryNav-count-nkd.PrimaryNav-popoverCount-PX4 {
            top: -3px
        }

        .PrimaryNav-userControls-GbX .PrimaryNav-mail-gX_ .PrimaryNav-icon-r_P {
            height: 35px;
            width: 17px
        }

        @media(min-width: 1080px) {
            .PrimaryNav-inboxPopoverRoot-am1 {
                padding-bottom: 8px
            }
        }

        .PrimaryNav-mail-gX_.PrimaryNav-inboxActivator-e2X {
            margin-top: 1px;
            padding: 8px 0
        }

        .PrimaryNav-userControls-GbX .PrimaryNav-notification-MB4 .PrimaryNav-icon-r_P {
            height: 18px;
            width: 18px
        }

        .PrimaryNav-avatar-ifQ {
            border-radius: 50%;
            margin-bottom: -2px;
            position: relative;
            top: 2px;
            width: 25px
        }

        .PrimaryNav-avatarImgEl-WDU {
            height: 100%;
            width: 100%
        }

        .PrimaryNav-userAvatar-mGT {
            border-radius: 50%;
            overflow: hidden
        }

        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-mobileUserMenuAndTrigger-crt,
        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-appLinks-vve,
        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-languageSelector-ppl,
        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-blog-l_S,
        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-coreNavigationLink-GpA {
            padding-left: 16px;
            padding-right: 16px
        }

        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-navWrapper-QBz {
            overflow-y: auto
        }

        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-coreNavigationLink-GpA {
            display: block;
            position: relative
        }

        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-coreNavigationLink-GpA:not(.PrimaryNav-active-REm)::before {
            transform: translateX(-100%)
        }

        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-coreNavigationLink-GpA::before {
            background-color: #191919;
            bottom: 2px;
            content: "";
            left: 0;
            position: absolute;
            top: 2px;
            width: 4px
        }

        .PrimaryNav-mobileUserMenuAndTrigger-crt {
            margin-top: 32px;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .PrimaryNav-mobileUserMenuAndTrigger-crt.PrimaryNav-menuVisible-pZd .PrimaryNav-triangle-b8q {
            transform: rotate(-90deg)
        }

        .PrimaryNav-mobileTriggerUserMenu-g1S {
            cursor: pointer
        }

        .PrimaryNav-mobileTriggerUserMenu-g1S .PrimaryNav-userAvatar-mGT {
            height: 30px;
            margin-right: 15px;
            width: 30px
        }

        .PrimaryNav-mobileTriggerUserMenu-g1S .PrimaryNav-avatarLabel-Vza {
            font-size: 16px;
            font-weight: 600;
            margin-right: 5px
        }

        .PrimaryNav-mobileTriggerUserMenu-g1S .PrimaryNav-avatarLabel-Vza,
        .PrimaryNav-mobileTriggerUserMenu-g1S .PrimaryNav-userAvatar-mGT,
        .PrimaryNav-mobileTriggerUserMenu-g1S .PrimaryNav-triangle-b8q {
            display: inline-block;
            vertical-align: middle
        }

        .PrimaryNav-mobileTriggerUserMenu-g1S .PrimaryNav-triangle-b8q {
            height: 15px;
            position: relative;
            top: 2px;
            transform: rotate(90deg);
            width: 15px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-mobile-K_y {
            margin-top: 10px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-mobile-K_y .PrimaryNav-anchor-ecB {
            color: inherit;
            display: block;
            font-size: 14px;
            padding-bottom: 18px;
            padding-left: 45px;
            padding-top: 18px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan {
            width: 300px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan :focus-visible {
            outline-offset: 2px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userAvatar-mGT {
            height: 65px;
            margin-right: 15px;
            width: 65px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userMeta-w65 {
            padding: 20px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-listGroup-mq7:last-child {
            border-top-color: transparent
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-listGroup-mq7 {
            border-bottom: 1px solid #e8e8e8;
            border-top: 1px solid #e8e8e8;
            padding-bottom: 10px;
            padding-top: 10px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userMenuItem-HmN.PrimaryNav-link-hxX .PrimaryNav-anchor-ecB {
            display: block;
            padding-bottom: 7px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 7px;
            transition: background-color .15s linear
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userMenuItem-HmN.PrimaryNav-link-hxX .PrimaryNav-anchor-ecB:hover {
            background-color: #f0f0f0;
            text-decoration: none
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userName-bPp {
            font-size: 18px;
            line-height: 1.3
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userEmail-ULv,
        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userLink-abD,
        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userMenuItem-HmN.PrimaryNav-link-hxX .PrimaryNav-anchor-ecB {
            color: dimgray;
            font-size: 14px
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userLink-abD {
            margin: -3px;
            padding: 3px;
            text-decoration: underline
        }

        .PrimaryNav-userMenuList-k15.PrimaryNav-desktop-qan .PrimaryNav-userId-TKl {
            flex: 1
        }

        .PrimaryNav-userId-TKl {
            max-width: 175px
        }

        .PrimaryNav-userEmail-ULv,
        .PrimaryNav-userName-bPp {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .PrimaryNav-userMenuTooltip-EQT.PrimaryNav-userMenuTooltip-EQT {
            margin: 0;
            padding: 0 0 2px;
            width: auto
        }

        .PrimaryNav-userMetaContainer-FLs {
            display: flex
        }

        .PrimaryNav-userAvatarTrigger-Q_2 {
            align-items: center;
            display: flex;
            height: 32px;
            justify-content: center;
            overflow: hidden;
            position: relative;
            width: 40px
        }

        .PrimaryNav-userAvatarTrigger-Q_2 .PrimaryNav-avatarImgEl-WDU {
            border-radius: 50%;
            height: 25px;
            width: 25px
        }

        .PrimaryNav-notifications-DqR .PrimaryNav-icon-r_P {
            height: 35px
        }

        .PrimaryNav-formLabel-_dk {
            display: none
        }

        .PrimaryNav-tooltipContent-Ct4 {
            font-size: 13px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            width: 180px
        }

        .PrimaryNav-pushNotifTooltipContent-ula {
            font-size: 14px;
            height: 124px;
            padding: 10px;
            width: 235px
        }

        .PrimaryNav-pushNotifTooltipText-Hev {
            margin-bottom: 16px
        }

        .PrimaryNav-tooltipText-X5J {
            margin-bottom: 0;
            margin-bottom: 8px
        }

        .PrimaryNav-tooltipButton-AbF.PrimaryNav-tooltipButton-AbF {
            color: #0057ff;
            margin-left: -20px
        }

        .PrimaryNav-profileEmail-QcD {
            font-family: inherit;
            font-size: 13px;
            line-height: 1.3;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: inline-block;
            float: left;
            width: calc(100% - 79px);
            color: dimgray;
            margin-bottom: 8px
        }

        .PrimaryNav-profileAvatarContainer-NIY {
            float: left;
            height: 65px;
            margin-right: 14px;
            width: 65px
        }

        .PrimaryNav-profileAvatarWrap-lkV {
            border-radius: 50%;
            display: inline-block;
            overflow: hidden;
            position: relative
        }

        .PrimaryNav-profileAvatarLink-qEg .PrimaryNav-profileAvatarWrap-lkV::after {
            background-color: #191919;
            bottom: 0;
            content: "";
            left: 0;
            opacity: .2;
            pointer-events: none;
            position: absolute;
            right: 0;
            top: 0;
            transition: opacity .5s linear
        }

        .PrimaryNav-profileAvatarLink-qEg .PrimaryNav-profileAvatarWrap-lkV:not(:hover)::after {
            opacity: 0
        }

        .PrimaryNav-profileAvatar-qrQ {
            display: block;
            height: auto;
            width: 100%
        }

        .PrimaryNav-rf-tooltip--utility-qUF {
            left: auto;
            right: -10px;
            transform: translateY(-5px);
            transition: transform .15s
        }

        .PrimaryNav-rf-tooltip--utility-qUF::before {
            left: 93%
        }

        .PrimaryNav-adobeLogo-VeZ,
        .PrimaryNav-minimalWelcomeMessage-_yy {
            align-items: center;
            display: flex
        }

        .PrimaryNav-minimalWelcomeMessage-_yy {
            font-size: 16px;
            margin-left: auto
        }

        .PrimaryNav-activateAndShareButtonsHidden-gLW .PrimaryNav-adobeLogo-VeZ {
            margin-left: 200px
        }

        .PrimaryNav-adobeLogo-VeZ .PrimaryNav-icon-r_P {
            position: relative;
            top: 1px;
            width: 60px
        }

        .PrimaryNav-rf-submenu-FGg {
            margin: 0 -10px -14px
        }

        .PrimaryNav-rf-tooltip--utility-qUF .PrimaryNav-rf-submenu-FGg .PrimaryNav-rf-submenu__link-V9s {
            padding-left: 20px;
            padding-right: 20px
        }

        .PrimaryNav-skipFooter-TAI {
            margin-left: 150px
        }

        .PrimaryNav-skipContent-y_5,
        .PrimaryNav-skipFooter-TAI {
            color: #fff;
            font-size: 11px;
            font-weight: bold;
            left: -100%;
            padding: 0 10px;
            position: absolute;
            text-decoration: none;
            text-transform: uppercase;
            top: 2px
        }

        .PrimaryNav-skipContent-y_5:focus-visible,
        .PrimaryNav-skipFooter-TAI:focus-visible {
            color: #0057ff;
            left: 16px
        }

        .PrimaryNav-strip-Xyi:not(.PrimaryNav-transparentStrip-u4D)>div:not(.PrimaryNav-siteSearch-yuO) :focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .PrimaryNav-hamburgerMenu-iBG :focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .PrimaryNav-transparentStrip-u4D :focus-visible {
            outline: 1px solid #fff;
            outline-offset: 3px
        }

        .PrimaryNav-transparentStrip-u4D .PrimaryNav-skipContent-y_5,
        .PrimaryNav-transparentStrip-u4D .PrimaryNav-skipFooter-TAI {
            color: #fff
        }

        .PrimaryNav-transparentStrip-u4D .PrimaryNav-skipContent-y_5:focus-visible,
        .PrimaryNav-transparentStrip-u4D .PrimaryNav-skipFooter-TAI:focus-visible {
            outline: 1px solid #fff;
            outline-offset: 3px
        }

        .PrimaryNav-transparentStrip-u4D .PrimaryNav-userControls-GbX :focus-visible,
        .PrimaryNav-transparentStrip-u4D .PrimaryNav-signup-XIt :focus-visible,
        .PrimaryNav-transparentStrip-u4D .PrimaryNav-searchLinkCompact-par :focus-visible {
            outline: 1px solid #fff;
            outline-offset: 3px
        }

        .PrimaryNav-searchLink-xVd {
            align-items: center;
            display: flex
        }

        .PrimaryNav-searchLink-xVd .PrimaryNav-link-hxX {
            height: 18px;
            position: relative;
            top: -1px;
            width: 18px
        }

        .PrimaryNav-hamburgerMenuButtonWrapper-Cz7 {
            align-items: center;
            display: flex;
            height: 100%;
            margin-top: 1px;
            position: relative;
            z-index: 2
        }

        .PrimaryNav-hamburgerMenuButtonWrapper-Cz7 .PrimaryNav-hamburgerButton-AQr {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            cursor: pointer;
            display: inline-block;
            font-family: inherit;
            font-size: inherit;
            line-height: 1;
            margin: 0;
            padding: 0;
            padding-bottom: 20px;
            padding-right: 16px;
            padding-top: 20px
        }

        .PrimaryNav-hamburger-rSm {
            width: 15px
        }

        .PrimaryNav-hamburgerLine-jwi {
            background-color: #191919;
            height: 2px;
            margin-bottom: 3px;
            transition-duration: .25s;
            transition-property: transform, opacity;
            transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1)
        }

        .PrimaryNav-hamburgerMenu-iBG {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            height: 100vh;
            padding: 12px 0;
            position: absolute;
            transition: transform .25s cubic-bezier(0.19, 1, 0.22, 1);
            width: 270px;
            will-change: transform;
            z-index: 1
        }

        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-signUp-QZM {
            align-self: center;
            display: flex;
            margin-bottom: auto;
            margin-top: 30px;
            padding-left: 16px
        }

        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-signUp-QZM,
        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-signupButton-xx_ {
            width: 100%
        }

        .PrimaryNav-loginOrCreate-MZx {
            align-self: flex-end;
            padding-left: 24px;
            padding-right: 24px
        }

        .PrimaryNav-hamburgerMenu-iBG .PrimaryNav-coreNavigationItem-N4p {
            margin-top: 32px
        }

        .PrimaryNav-appLinks-vve {
            margin-bottom: 24px;
            margin-top: 32px
        }

        .PrimaryNav-appLink-r57 {
            background-repeat: no-repeat;
            display: block;
            font-size: 0;
            height: 40px;
            line-height: 40px;
            margin-bottom: 8px;
            width: 135px
        }

        .PrimaryNav-appLinkItem-f6g.PrimaryNav-ios-d_K .PrimaryNav-appLink-r57 {
            background-image: url("https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/svgs/apple-app-store-button.svg")
        }

        .PrimaryNav-appLinkItem-f6g.PrimaryNav-android-jXm .PrimaryNav-appLink-r57 {
            background-image: url("https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/svgs/google-play-button.svg")
        }

        .PrimaryNav-behanceLogo-jbj {
            fill: #191919
        }

        .PrimaryNav-behanceLogo-jbj.PrimaryNav-full-qXI {
            height: 16px;
            transform: translateY(2px);
            width: 82px
        }

        .PrimaryNav-behanceLogo-jbj.PrimaryNav-truncated-C4c {
            width: 24px
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-stripBackgroundFadedIn-tbe {
            opacity: 1;
            transition: opacity 300ms
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-transparentStrip-u4D {
            background: rgba(255, 255, 255, 0);
            box-shadow: none !important;
            height: 100px;
            padding-bottom: 45px;
            transition: background 300ms, height 0ms 300ms, padding-bottom 0ms 300ms
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-transparentStrip-u4D::before {
            background-color: rgba(255, 255, 255, .2);
            top: 55px
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-transparentStrip-u4D.PrimaryNav-noScrollPage-_Vy {
            height: 55px;
            padding-bottom: 0
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-transparentCount-oKH {
            border: none;
            border-radius: 3px;
            left: calc(40% + 2px);
            min-width: 16px;
            padding: 2px 3px;
            top: 6px
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-whiteHamburgerLine-JbL {
            background-color: #fff
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-whiteUserControl-hMm .PrimaryNav-icon-r_P {
            fill: #fff
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-whiteUserControl-hMm:hover .PrimaryNav-icon-r_P {
            fill: #fff;
            opacity: .8
        }

        @media(max-width: 1079px) {
            .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-whiteSearchLink-j_0 {
                color: #fff;
                fill: #fff
            }
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-adobeLogo-VeZ:hover .PrimaryNav-whiteUserControl-hMm .PrimaryNav-icon-r_P {
            fill: #fff;
            opacity: .8
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-behanceLogo-jbj.PrimaryNav-behanceLogoWhite-g_P {
            fill: #fff
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-whiteNavigationItem-pnH {
            color: #fff;
            fill: #fff
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-whiteNavigationItem-pnH .PrimaryNav-caret-UUZ {
            fill: #fff
        }

        .PrimaryNav-useTransparencyForAllWidth-gRQ .PrimaryNav-whiteNavigationItem-pnH .PrimaryNav-coreNavigationDivider-_Y7 {
            opacity: .2
        }

        @media(min-width: 1079px)and (min-height: 801px) {
            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-stripBackgroundFadedIn-tbe {
                opacity: 1;
                transition: opacity 300ms
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-transparentStrip-u4D {
                background: rgba(255, 255, 255, 0);
                box-shadow: none !important;
                height: 100px;
                padding-bottom: 45px;
                transition: background 300ms, height 0ms 300ms, padding-bottom 0ms 300ms
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-transparentStrip-u4D::before {
                background-color: rgba(255, 255, 255, .2);
                top: 55px
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-transparentStrip-u4D.PrimaryNav-noScrollPage-_Vy {
                height: 55px;
                padding-bottom: 0
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-transparentCount-oKH {
                border: none;
                border-radius: 3px;
                left: calc(40% + 2px);
                min-width: 16px;
                padding: 2px 3px;
                top: 6px
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-whiteHamburgerLine-JbL {
                background-color: #fff
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-whiteUserControl-hMm .PrimaryNav-icon-r_P {
                fill: #fff
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-whiteUserControl-hMm:hover .PrimaryNav-icon-r_P {
                fill: #fff;
                opacity: .8
            }
        }

        @media(min-width: 1079px)and (min-height: 801px)and (max-width: 1079px) {
            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-whiteSearchLink-j_0 {
                color: #fff;
                fill: #fff
            }
        }

        @media(min-width: 1079px)and (min-height: 801px) {
            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-adobeLogo-VeZ:hover .PrimaryNav-whiteUserControl-hMm .PrimaryNav-icon-r_P {
                fill: #fff;
                opacity: .8
            }
        }

        @media(min-width: 1079px)and (min-height: 801px) {
            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-behanceLogo-jbj.PrimaryNav-behanceLogoWhite-g_P {
                fill: #fff
            }
        }

        @media(min-width: 1079px)and (min-height: 801px) {
            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-whiteNavigationItem-pnH {
                color: #fff;
                fill: #fff
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-whiteNavigationItem-pnH .PrimaryNav-caret-UUZ {
                fill: #fff
            }

            .PrimaryNav-useTransparencyAtBreakpoint-OuV .PrimaryNav-whiteNavigationItem-pnH .PrimaryNav-coreNavigationDivider-_Y7 {
                opacity: .2
            }
        }

        .PrimaryNav-root-GKW:not(.PrimaryNav-hamburgerMenuOpen-diU) .PrimaryNav-hamburgerMenu-iBG {
            transform: translateX(-100%)
        }

        .PrimaryNav-hamburgerMenuOpen-diU .PrimaryNav-strip-Xyi::after {
            opacity: .5
        }

        .PrimaryNav-hamburgerMenuOpen-diU .PrimaryNav-hamburger-rSm {
            margin-right: -2px;
            width: 17px
        }

        .PrimaryNav-hamburgerMenuOpen-diU .PrimaryNav-hamburger-rSm .PrimaryNav-whiteHamburgerLine-JbL {
            background-color: #191919
        }

        .PrimaryNav-hamburgerMenuOpen-diU .PrimaryNav-hamburger-rSm .PrimaryNav-hamburgerLine-jwi:nth-child(1) {
            transform: translateY(4.8px) rotate(45deg)
        }

        .PrimaryNav-hamburgerMenuOpen-diU .PrimaryNav-hamburger-rSm .PrimaryNav-hamburgerLine-jwi:nth-child(2) {
            opacity: 0
        }

        .PrimaryNav-hamburgerMenuOpen-diU .PrimaryNav-hamburger-rSm .PrimaryNav-hamburgerLine-jwi:nth-child(3) {
            transform: translateY(-5px) rotate(-45deg)
        }

        @media(max-width: 1079px) {

            .PrimaryNav-strip-Xyi .PrimaryNav-adobeLogo-VeZ,
            .PrimaryNav-strip-Xyi .PrimaryNav-userControls-GbX .PrimaryNav-me-apm,
            .PrimaryNav-strip-Xyi .PrimaryNav-siteSearch-yuO,
            .PrimaryNav-strip-Xyi .PrimaryNav-searchLinkCompact-par,
            .PrimaryNav-strip-Xyi .PrimaryNav-signup-XIt,
            .PrimaryNav-strip-Xyi .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-text-zNv,
            .PrimaryNav-strip-Xyi .PrimaryNav-behanceLogo-jbj.PrimaryNav-full-qXI,
            .PrimaryNav-strip-Xyi .PrimaryNav-loggedOutOptions-ZwH {
                display: none
            }

            .PrimaryNav-strip-Xyi .PrimaryNav-logoWrap-gf0 {
                padding: 6px 0 !important
            }
        }

        @media(max-width: 603px) {
            .PrimaryNav-coreNavigation-iAB .PrimaryNav-coreNavigationItem-N4p.PrimaryNav-home-PBH {
                width: 26px
            }
        }

        @media(min-width: 1080px) {

            .PrimaryNav-hamburgerMenu-iBG,
            .PrimaryNav-hamburgerMenuButtonWrapper-Cz7,
            .PrimaryNav-searchLink-xVd,
            .PrimaryNav-behanceLogo-jbj.PrimaryNav-truncated-C4c,
            .PrimaryNav-appLinkContainer-bhx,
            .PrimaryNav-strip-Xyi::after {
                display: none
            }
        }

        @media(min-width: 1080px)and (max-width: 1300px) {
            .PrimaryNav-coreNavigationItem-N4p:not(:last-child) {
                margin-right: 20px !important
            }

            .PrimaryNav-coreNavigationLabel-eg9 {
                font-size: 15px
            }

            .PrimaryNav-behanceLogo-jbj.PrimaryNav-full-qXI,
            .PrimaryNav-fullAdobeLogo-qFK,
            .PrimaryNav-siteSearch-yuO {
                display: none
            }

            .PrimaryNav-behanceLogo-jbj.PrimaryNav-truncated-C4c,
            .PrimaryNav-adobeLogo-VeZ .PrimaryNav-compactAdobeLogo-EdF,
            .PrimaryNav-searchLinkCompact-par {
                display: flex !important
            }
        }

        .PrimaryNav-searchLinkCompact-par {
            align-items: center;
            display: none;
            justify-content: center;
            margin-left: auto;
            margin-top: 2px;
            padding-left: 12px;
            padding-right: 12px
        }

        .PrimaryNav-searchLinkCompact-par.PrimaryNav-noRightPadding-HYK {
            padding-right: 0
        }

        .PrimaryNav-searchLinkCompact-par .PrimaryNav-link-hxX {
            align-items: center;
            border: solid 1px #e8e8e8;
            border-radius: 50px;
            display: flex;
            height: 34px;
            justify-content: center;
            transition: background-color .15s linear;
            width: 34px
        }

        .PrimaryNav-searchLinkCompact-par .PrimaryNav-link-hxX:hover {
            background-color: #f0f0f0
        }

        .PrimaryNav-searchLinkCompact-par .PrimaryNav-link-hxX .PrimaryNav-searchIcon-qWb {
            height: 18px;
            width: 18px
        }

        .PrimaryNav-adobeLogo-VeZ {
            z-index: 0
        }

        .PrimaryNav-adobeLogo-VeZ .PrimaryNav-compactAdobeLogo-EdF {
            display: none;
            margin-bottom: 6px;
            width: 24px
        }

        .PrimaryNav-signup-XIt .PrimaryNav-compactAdobeLogo-EdF {
            height: 18px;
            width: 20px
        }

        .PrimaryNav-languageSelector-ppl {
            position: relative;
            width: 100%
        }

        .PrimaryNav-languageSelector-ppl .PrimaryNav-triangle-b8q {
            display: inline-block;
            height: 10px;
            margin-left: -10px;
            pointer-events: none;
            position: relative;
            top: 1px;
            transform: rotate(90deg);
            width: 10px
        }

        .PrimaryNav-hamburgerMenuLinkContainer-iPa {
            max-width: 180px;
            padding: 5px 16px;
            position: relative;
            width: 100%
        }

        .PrimaryNav-hamburgerMenuLinkContainer-iPa:focus-within {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .PrimaryNav-hamburgerMenuLinkContainer-iPa .PrimaryNav-hamburgerMenuLink-o8P {
            color: inherit
        }

        .PrimaryNav-hamburgerMenuLinkContainer-iPa .PrimaryNav-hamburgerMenuLink-o8P:hover {
            text-decoration: none
        }

        .PrimaryNav-hamburgerMenuLinkContainer-iPa .PrimaryNav-hamburgerMenuLink-o8P:focus-visible {
            outline: none
        }

        .PrimaryNav-languageSelectEl-aQj,
        .PrimaryNav-hamburgerMenuLink-o8P {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: none;
            font-size: 11px;
            font-weight: 600;
            padding: 5px 10px 5px 0;
            visibility: visible
        }

        .PrimaryNav-popover-Nnk {
            padding: 15px 20px
        }

        .PrimaryNav-adobeLogoPopover-dqL {
            padding: 15px 20px;
            width: 470px
        }

        .PrimaryNav-inboxPopover-UgL,
        .PrimaryNav-userPopover-cBn {
            padding: 0
        }

        .PrimaryNav-talentAnnouncement-TnD,
        .PrimaryNav-inboxAnnouncement-OT3 {
            background-color: #fff;
            border-radius: 6px;
            display: block;
            height: 100%;
            transition: height 3s ease-out;
            width: 410px
        }

        .PrimaryNav-talentAnnouncement-TnD {
            width: 440px
        }

        .PrimaryNav-inboxAnnouncementTitle-yw1 {
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            overflow: hidden
        }

        .PrimaryNav-inboxAnnouncementContent-BuD {
            gap: 0
        }

        .PrimaryNav-inboxAnnouncementTimeAgo-GFo {
            margin-top: 5px
        }

        .PrimaryNav-inboxNotificationItemTitle-KwN {
            font-weight: 600;
            line-height: 18px
        }

        .PrimaryNav-inboxAnnouncementAvatarBlueDotWrapper-NwX {
            left: 53px
        }

        .UniversalPopup-universalPopupContent-ey7.UniversalPopup-universalPopupContent-ey7 {
            background: none;
            display: flex;
            height: 100vh;
            justify-content: center;
            overflow-y: scroll;
            pointer-events: all;
            text-align: unset;
            width: 100%
        }

        @media(max-width: 603px) {
            .UniversalPopup-universalPopupContent-ey7.UniversalPopup-universalPopupContent-ey7 {
                height: 100%
            }
        }

        .UniversalPopup-universalPopupContent-ey7.UniversalPopup-universalPopupContent-ey7.UniversalPopup-assetPopup-s2X {
            overflow-y: auto
        }

        .UniversalPopup-navigationLayer-N3_ {
            bottom: 0;
            height: 100vh;
            left: 0;
            pointer-events: none;
            position: fixed;
            right: 0;
            top: 0;
            width: 100vw
        }

        @media(max-width: 1024px) {
            .UniversalPopup-navigationLayer-N3_ {
                display: none
            }
        }

        .UniversalPopup-paginationButton-bfH .UniversalPopup-labelWrapper-vDg.UniversalPopup-labelWrapper-vDg,
        .UniversalPopup-closeModule-RuD .UniversalPopup-labelWrapper-vDg.UniversalPopup-labelWrapper-vDg {
            padding: 0
        }

        .UniversalPopup-closeModule-RuD {
            background-color: #343434;
            height: 35px;
            pointer-events: initial;
            position: absolute;
            right: 20px;
            top: 10px;
            width: 35px;
            z-index: 1
        }

        .UniversalPopup-closeModule-RuD:hover {
            background-color: dimgray
        }

        .UniversalPopup-closeModule-RuD .UniversalPopup-icon-Zgw {
            fill: #fff;
            height: 10px;
            position: relative;
            width: 10px
        }

        .UniversalPopup-paginationContainer-Fhp {
            align-items: flex-end;
            bottom: 20px;
            display: flex;
            pointer-events: none;
            position: absolute;
            top: 0
        }

        .UniversalPopup-paginationContainer-Fhp:hover {
            text-decoration: none
        }

        .UniversalPopup-paginationButton-bfH {
            background-color: #343434;
            pointer-events: initial
        }

        .UniversalPopup-paginationButton-bfH:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .UniversalPopup-paginationButton-bfH:hover {
            background-color: dimgray
        }

        .UniversalPopup-paginationContainer-Fhp.UniversalPopup-previous-xCX {
            left: 0
        }

        .UniversalPopup-paginationContainer-Fhp.UniversalPopup-previous-xCX .UniversalPopup-paginationButtonWrapper-y5m {
            margin-left: 20px;
            margin-right: auto
        }

        .UniversalPopup-paginationContainer-Fhp.UniversalPopup-next-JZb {
            right: 0
        }

        .UniversalPopup-paginationContainer-Fhp.UniversalPopup-next-JZb .UniversalPopup-paginationButtonWrapper-y5m {
            margin-left: auto;
            margin-right: 20px
        }

        .UniversalPopup-paginationContainer-Fhp.UniversalPopup-next-JZb .UniversalPopup-paginationButtonWrapper-y5m .UniversalPopup-icon-Zgw {
            margin-left: 1px;
            transform: rotate(180deg)
        }

        .UniversalPopup-paginationButton-bfH.UniversalPopup-prev-PP8 .UniversalPopup-icon-Zgw {
            margin-right: 1px
        }

        .UniversalPopup-paginationContainer-Fhp .UniversalPopup-paginationButton-bfH {
            height: 45px;
            margin-bottom: 8px;
            width: 45px
        }

        .UniversalPopup-paginationButton-bfH .UniversalPopup-icon-Zgw {
            fill: #fff;
            height: 13px;
            margin-top: 1px;
            vertical-align: top;
            width: 15px
        }

        .UniversalPopup-paginationButtonWrapper-y5m {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        .UniversalPopup-paginationButtonLabel-MDM {
            border: none;
            color: #959595;
            font-size: 11px;
            font-weight: bold;
            text-decoration: none;
            transition: color .2s linear
        }

        .UniversalPopup-modalClass-IPk {
            cursor: zoom-out
        }

        .UniversalPopup-permalinkContent-kVu {
            cursor: auto
        }

        .InfinityFooter-screenReaderOnly-v6w {
            border-width: 0 !important;
            clip: rect(1px, 1px, 1px, 1px) !important;
            height: 1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            white-space: nowrap !important;
            width: 1px !important
        }

        .InfinityFooter-resetButton-F9M {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            cursor: pointer;
            display: inline-block;
            font-family: inherit;
            font-size: inherit;
            line-height: 1;
            margin: 0;
            padding: 0
        }

        .InfinityFooter-footer-lWR {
            bottom: 0;
            position: fixed;
            width: 100%;
            z-index: 2
        }

        .InfinityFooter-footerInfinity-X7B {
            align-items: center;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: #fff;
            border-top: 1px solid #e1e1e1;
            bottom: 0;
            display: flex;
            height: 33px;
            left: 0;
            margin-top: 33px;
            width: 100%;
            z-index: 2
        }

        @media(max-width: 1024px) {
            .InfinityFooter-footerInfinity-X7B {
                display: none
            }
        }

        .InfinityFooter-footerInfinity-X7B :focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 2px
        }

        .InfinityFooter-footerInfinity-X7B .InfinityFooter-tooltipMore-UjP {
            width: 195px
        }

        .InfinityFooter-footerInfinity-X7B .InfinityFooter-tooltipMore-UjP .InfinityFooter-footerSelectorItem-Yoy {
            padding-right: 7px
        }

        .InfinityFooter-footerSelector-rpC,
        .InfinityFooter-footerProLinkItem-tQh {
            font-family: inherit;
            font-size: 11px;
            font-weight: bold;
            color: dimgray;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 0;
            margin-top: -7.5px;
            padding: calc(7.5px * 2) 25px 7.5px;
            position: relative;
            text-align: center
        }

        @media(max-width: 1024px) {

            .InfinityFooter-footerSelector-rpC,
            .InfinityFooter-footerProLinkItem-tQh {
                display: none
            }
        }

        .InfinityFooter-footerSelector-rpC::before,
        .InfinityFooter-footerProLinkItem-tQh::before {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border-right: 1px #afafaf solid;
            content: "";
            height: 15px;
            margin-top: 5px;
            position: absolute;
            right: 0;
            width: 1px
        }

        .InfinityFooter-footerSelector-rpC::after,
        .InfinityFooter-footerProLinkItem-tQh::after {
            content: "";
            display: inline-block;
            left: 3px;
            position: relative;
            top: -2px;
            border-left: 3px solid transparent;
            border-right: 3px solid transparent;
            border-top: 3px solid dimgray;
            height: 0;
            width: 0
        }

        .InfinityFooter-footerSelector-rpC:hover::after,
        .InfinityFooter-footerProLinkItem-tQh:hover::after {
            transform: rotate(180deg)
        }

        .InfinityFooter-footerProLinkItem-tQh .InfinityFooter-footerLink-Sgi {
            margin-right: 0
        }

        .InfinityFooter-footerProLinkItem-tQh::after {
            content: none
        }

        .InfinityFooter-footerSelectorItem-Yoy {
            font-family: inherit;
            font-size: 11px;
            font-weight: bold;
            align-items: center;
            color: dimgray;
            display: flex
        }

        .InfinityFooter-footerSelectorItem-Yoy:hover,
        .InfinityFooter-footerSelectorItem-Yoy:focus {
            background: #0057ff;
            color: #fff
        }

        .InfinityFooter-footerSelectorItem-Yoy .InfinityFooter-footerSelectorLinks-uP9 {
            color: inherit;
            display: flex;
            padding: 6px 20px;
            width: 100%
        }

        .InfinityFooter-footerSelectorItem-Yoy .InfinityFooter-footerSelectorLinks-uP9:hover {
            text-decoration: none
        }

        .InfinityFooter-footerLinks-STj {
            align-items: center;
            display: flex;
            height: 20px;
            list-style: none;
            padding-left: 20px
        }

        .InfinityFooter-skipContent-yLL {
            color: #fff;
            font-size: 11px;
            font-weight: bold;
            left: -100%;
            padding: 0 10px;
            position: absolute;
            text-decoration: none;
            text-transform: uppercase;
            top: 2px
        }

        .InfinityFooter-skipContent-yLL:focus-visible {
            color: #0057ff;
            left: 16px;
            outline: 1px solid #0057ff;
            outline-offset: 2px
        }

        .InfinityFooter-footerLink-Sgi {
            font-family: inherit;
            font-size: 11px;
            font-weight: bold;
            color: dimgray;
            margin-right: 10px
        }

        .InfinityFooter-footerLink-Sgi:hover {
            color: #0057ff;
            text-decoration: none
        }

        .InfinityFooter-tooltipContainer-vxD {
            display: block
        }

        .InfinityFooter-adobeLogo-Sr1 {
            align-items: center;
            display: flex;
            margin-right: 25px;
            position: fixed;
            right: 0
        }

        .InfinityFooter-adobeLogo-Sr1 .InfinityFooter-icon-CAF {
            position: relative;
            top: 2px;
            width: 60px
        }

        .InfinityFooter-adobeLogo-Sr1:hover .InfinityFooter-icon-CAF {
            fill: #707070
        }

        .StaticFooter-screenReaderOnly-K51 {
            border-width: 0 !important;
            clip: rect(1px, 1px, 1px, 1px) !important;
            height: 1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            white-space: nowrap !important;
            width: 1px !important
        }

        .StaticFooter-resetButton-lt7 {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            cursor: pointer;
            display: inline-block;
            font-family: inherit;
            font-size: inherit;
            line-height: 1;
            margin: 0;
            padding: 0
        }

        .StaticFooter-footerContainer-jf4 {
            background: #191919;
            font-family: "acumin-pro-wide", "Acumin Pro Wide", "Helvetica Neue", Helvetica, Arial, sans-serif;
            margin-top: calc(-1 * 33px);
            padding: 82px 200px 0;
            position: relative;
            width: 100%;
            z-index: 3
        }

        @media(max-width: 1800px) {
            .StaticFooter-footerContainer-jf4 {
                padding: 82px 50px 0
            }
        }

        @media(max-width: 603px) {
            .StaticFooter-footerContainer-jf4 {
                padding: 60px 35px 0
            }
        }

        .StaticFooter-footerContainer-jf4 :focus-visible {
            outline: 1px solid #fff;
            outline-offset: 3px
        }

        .StaticFooter-mainFooterContainer-Bqa {
            align-items: baseline;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-bottom: 100px
        }

        @media(max-width: 1200px) {
            .StaticFooter-mainFooterContainer-Bqa {
                flex-direction: column;
                padding-bottom: 60px
            }
        }

        @media(max-width: 603px) {
            .StaticFooter-mainFooterContainer-Bqa {
                flex-direction: column;
                padding-bottom: 60px
            }
        }

        .StaticFooter-behanceLinkContainer-qBT {
            flex: 2;
            height: 32px;
            margin: 0 50px 60px 0
        }

        .StaticFooter-footerSelectorItems-I6_:hover,
        .StaticFooter-footerSelectorItems-I6_:focus {
            text-decoration: underline
        }

        .StaticFooter-behanceLogoContainer-_tw {
            width: 200px
        }

        .StaticFooter-behanceLogo-jGq {
            fill: #fff;
            height: 32px;
            width: 160px
        }

        .StaticFooter-behanceLogo-jGq:focus {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .StaticFooter-sectionContainer-Kyo {
            display: grid;
            gap: 40px 50px;
            grid-template-columns: auto auto auto auto
        }

        @media(min-width: 604px)and (max-width: 1024px) {
            .StaticFooter-sectionContainer-Kyo {
                grid-template-columns: auto auto auto
            }
        }

        @media(min-width: 603px)and (max-width: 800px) {
            .StaticFooter-sectionContainer-Kyo {
                grid-template-columns: auto auto
            }
        }

        @media(max-width: 603px) {
            .StaticFooter-sectionContainer-Kyo {
                grid-template-columns: auto
            }
        }

        .StaticFooter-footerSection-E69 {
            width: 200px
        }

        .StaticFooter-footerSection-E69 .StaticFooter-footerSectionHeader-xFg {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 40px
        }

        .StaticFooter-footerSection-E69 .StaticFooter-footerSelectorItems-I6_ {
            font-size: 16px;
            margin-bottom: 19px
        }

        .StaticFooter-footerSection-E69 .StaticFooter-footerSelectorItems-I6_:last-of-type {
            margin-bottom: 0
        }

        .StaticFooter-footerSection-E69 .StaticFooter-iconClass-JdV {
            fill: #ccc;
            height: 16px;
            margin-right: 10px;
            width: 16px
        }

        .StaticFooter-footerSection-E69 .StaticFooter-iconClass-JdV .StaticFooter-iconFillClass-zNl {
            fill: #191919
        }

        .StaticFooter-footerSelectorLinks-HKF {
            color: #fff;
            font-size: 16px;
            font-weight: normal
        }

        .StaticFooter-footerSelectorLinks-HKF:hover,
        .StaticFooter-footerSelectorLinks-HKF:focus {
            text-decoration: underline
        }

        .StaticFooter-bottomFooter-Z_1 {
            align-items: flex-end;
            color: #fff;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 35px 0 10px
        }

        .StaticFooter-divider-HTR {
            background: #707070;
            margin: 0
        }

        .StaticFooter-moreFooterLinks-Zab {
            align-items: center;
            align-self: flex-end;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-left: 120px
        }

        @media(min-width: 604px)and (max-width: 921px) {
            .StaticFooter-moreFooterLinks-Zab {
                margin: 0
            }
        }

        @media(max-width: 603px) {
            .StaticFooter-moreFooterLinks-Zab {
                margin: 0
            }
        }

        .StaticFooter-moreFooterLinks-Zab .StaticFooter-footerSelectorItems-I6_ {
            margin-right: 25px;
            padding-bottom: 25px
        }

        .StaticFooter-moreFooterLinks-Zab .StaticFooter-footerSelectorItems-I6_:last-of-type {
            margin-right: 0
        }

        .StaticFooter-moreFooterLinks-Zab .StaticFooter-footerSelectorLinks-HKF {
            font-size: 13px
        }

        .StaticFooter-adobeInfo-UYN {
            align-items: end;
            display: flex;
            flex-wrap: wrap
        }

        .StaticFooter-adobeLogo-ROd {
            height: 20px;
            margin: 0 40px 25px 0;
            width: 80px
        }

        .StaticFooter-adobeLogo-ROd .StaticFooter-logoLink-vQ3 {
            fill: #fff
        }

        .StaticFooter-allRightsReserved-iM3 {
            font-size: 13px;
            margin-bottom: 25px
        }

        .StaticFooter-footerLanguageSelector-lED {
            color: #fff;
            font-size: 13px
        }

        .StaticFooter-footerLanguageSelector-lED::after {
            border-left: 3px solid transparent;
            border-right: 3px solid transparent;
            border-top: 3px solid #fff;
            content: "";
            display: inline-block;
            height: 0;
            left: 3px;
            position: relative;
            top: -2px;
            width: 0
        }

        .StaticFooter-footerLanguageSelector-lED:hover::after {
            transform: rotate(180deg)
        }

        .StaticFooter-skipContent-erF {
            color: transparent;
            display: block;
            font-size: 11px;
            font-weight: bold;
            left: 0;
            padding: 0 10px;
            position: absolute;
            text-decoration: none;
            text-transform: uppercase;
            top: 2px
        }

        .StaticFooter-skipContent-erF:focus-visible {
            color: #fff;
            left: 16px;
            outline: 1px solid #fff;
            outline-offset: 2px
        }

        .Btn-button-CqT {
            border: 1px solid transparent;
            border-radius: 100px;
            cursor: pointer;
            display: inline-block;
            font-weight: 600;
            line-height: 1;
            transition-duration: 300ms;
            transition-property: color, background, border;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .Btn-button-CqT:hover {
            text-decoration: none
        }

        .Btn-button-CqT:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .Btn-nostyles-Lai {
            background: none;
            border: none;
            cursor: pointer
        }

        .Btn-base-L7P {
            background: #fff;
            border: 1px solid #e8e8e8;
            color: #191919
        }

        .Btn-base-L7P .Btn-icon-BDP .rf-icon {
            fill: #191919
        }

        .Btn-base-L7P .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-base-L7P .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-base-L7P:hover {
            background: #f1f1f1;
            border-color: #e8e8e8
        }

        .Btn-base-L7P:active {
            background: #e4e4e4
        }

        .Btn-base-L7P.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-base-L7P.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-light-Z5z {
            background: #fff;
            border: 1px solid transparent;
            color: #0057ff
        }

        .Btn-light-Z5z .Btn-icon-BDP .rf-icon {
            fill: #0057ff
        }

        .Btn-light-Z5z .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-light-Z5z .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-light-Z5z:hover {
            background: #f1f1f1;
            border-color: transparent
        }

        .Btn-light-Z5z:active {
            background: #e4e4e4
        }

        .Btn-light-Z5z.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-light-Z5z.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-lightAlternate-xvv {
            background: #fff;
            border: 1px solid transparent;
            color: #191919
        }

        .Btn-lightAlternate-xvv .Btn-icon-BDP .rf-icon {
            fill: #191919
        }

        .Btn-lightAlternate-xvv .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-lightAlternate-xvv .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-lightAlternate-xvv:hover {
            background: #f1f1f1;
            border-color: transparent
        }

        .Btn-lightAlternate-xvv:active {
            background: #e4e4e4
        }

        .Btn-lightAlternate-xvv.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-lightAlternate-xvv.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-inverted-GDL {
            background: rgba(25, 25, 25, .65);
            border: 1px solid transparent;
            color: #fff
        }

        .Btn-inverted-GDL.Btn-shouldBlur-ZHs {
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px)
        }

        .Btn-inverted-GDL .Btn-icon-BDP .rf-icon {
            fill: #fff
        }

        .Btn-inverted-GDL .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-inverted-GDL .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-inverted-GDL:hover {
            background: rgba(25, 25, 25, .8);
            border-color: transparent
        }

        .Btn-inverted-GDL:active {
            background: rgba(25, 25, 25, .95)
        }

        .Btn-inverted-GDL.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-inverted-GDL.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-primary-wt8 {
            background: #0057ff;
            border: 1px solid transparent;
            color: #fff
        }

        .Btn-primary-wt8 .Btn-icon-BDP .rf-icon {
            fill: #fff
        }

        .Btn-primary-wt8 .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-primary-wt8 .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-primary-wt8:hover {
            background: #003ecb;
            border-color: transparent
        }

        .Btn-primary-wt8:active {
            background: #002f9a
        }

        .Btn-primary-wt8.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-primary-wt8.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-secondary-Ine {
            background: #fff;
            border: 1px solid #e8e8e8;
            color: #191919
        }

        .Btn-secondary-Ine .Btn-icon-BDP .rf-icon {
            fill: #191919
        }

        .Btn-secondary-Ine .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-secondary-Ine .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-secondary-Ine:hover {
            background: #f1f1f1;
            border-color: #e8e8e8
        }

        .Btn-secondary-Ine:active {
            background: #e4e4e4
        }

        .Btn-secondary-Ine.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-secondary-Ine.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-tertiary-Z8Q {
            background: #f5f8ff;
            border: 1px solid #dee8ff;
            color: #0057ff
        }

        .Btn-tertiary-Z8Q .Btn-icon-BDP .rf-icon {
            fill: #0057ff
        }

        .Btn-tertiary-Z8Q .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-tertiary-Z8Q .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-tertiary-Z8Q:hover {
            background: #dee8ff;
            border-color: #dee8ff
        }

        .Btn-tertiary-Z8Q:active {
            background: #bfd2ff
        }

        .Btn-tertiary-Z8Q.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-tertiary-Z8Q.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-tertiary-Z8Q:hover {
            border-color: #b7cdff
        }

        .Btn-ghost-aaK {
            background: #fff;
            border: 1px solid transparent;
            color: dimgray
        }

        .Btn-ghost-aaK .Btn-icon-BDP .rf-icon {
            fill: dimgray
        }

        .Btn-ghost-aaK .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-ghost-aaK .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-ghost-aaK:hover {
            background: #fff;
            border-color: transparent
        }

        .Btn-ghost-aaK:active {
            background: #fff
        }

        .Btn-ghost-aaK.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-ghost-aaK.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-ghost-aaK:hover .Btn-label-QJi {
            border-bottom: 1px solid #9c9c9c
        }

        .Btn-ghost-aaK.Btn-disabled-m3f {
            background: transparent;
            color: #e8e8e8
        }

        .Btn-transparent-Cn8 {
            background: transparent;
            border: 1px solid transparent;
            color: #fff
        }

        .Btn-transparent-Cn8 .Btn-icon-BDP .rf-icon {
            fill: #fff
        }

        .Btn-transparent-Cn8 .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-transparent-Cn8 .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-transparent-Cn8:hover {
            background: transparent;
            border-color: transparent
        }

        .Btn-transparent-Cn8:active {
            background: transparent
        }

        .Btn-transparent-Cn8.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-transparent-Cn8.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-transparent-Cn8:hover .Btn-label-QJi {
            text-decoration: underline
        }

        .Btn-transparent-Cn8.Btn-disabled-m3f {
            background: transparent;
            opacity: .5
        }

        .Btn-success-EDu {
            background: #058900;
            border: 1px solid transparent;
            color: #fff
        }

        .Btn-success-EDu .Btn-icon-BDP .rf-icon {
            fill: #fff
        }

        .Btn-success-EDu .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-success-EDu .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-success-EDu:hover {
            background: #026700;
            border-color: transparent
        }

        .Btn-success-EDu:active {
            background: #024400
        }

        .Btn-success-EDu.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-success-EDu.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-danger-H83 {
            background: #d00d00;
            border: 1px solid transparent;
            color: #fff
        }

        .Btn-danger-H83 .Btn-icon-BDP .rf-icon {
            fill: #fff
        }

        .Btn-danger-H83 .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-danger-H83 .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-danger-H83:hover {
            background: #9d0a00;
            border-color: transparent
        }

        .Btn-danger-H83:active {
            background: #840800
        }

        .Btn-danger-H83.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-danger-H83.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-dark-BkE {
            background: #191919;
            border: 1px solid rgba(255, 255, 255, .4);
            color: #fff
        }

        .Btn-dark-BkE .Btn-icon-BDP .rf-icon {
            fill: #fff
        }

        .Btn-dark-BkE .Btn-icon-BDP.Btn-leading-gb0 {
            float: left
        }

        .Btn-dark-BkE .Btn-icon-BDP.Btn-trailing-Lem {
            float: right
        }

        .Btn-dark-BkE:hover {
            background: #191919;
            border-color: rgba(255, 255, 255, .7)
        }

        .Btn-dark-BkE:active {
            background: #191919
        }

        .Btn-dark-BkE.Btn-disabled-m3f {
            background: #e8e8e8;
            color: #fff;
            cursor: default;
            fill: #fff;
            pointer-events: none;
            transition: none
        }

        .Btn-dark-BkE.Btn-disabled-m3f.Btn-placeholder-AFc {
            background: #ccc
        }

        .Btn-label-QJi {
            border: 1px solid transparent;
            display: inline-block;
            max-width: 100%
        }

        .Btn-labelWrapper-_Re {
            align-items: center;
            display: flex;
            justify-content: center
        }

        .Btn-small-lgf {
            height: 29px
        }

        .Btn-small-lgf .Btn-labelWrapper-_Re {
            padding: 6px 12px
        }

        .Btn-small-lgf .Btn-label-QJi {
            font-size: 12px
        }

        .Btn-small-lgf .Btn-icon-BDP .rf-icon {
            height: 14px
        }

        .Btn-small-lgf .Btn-icon-BDP.Btn-leading-gb0 {
            margin-right: 6px
        }

        .Btn-small-lgf .Btn-icon-BDP.Btn-trailing-Lem {
            margin-left: 4px
        }

        .Btn-normal-If5 .Btn-labelWrapper-_Re {
            padding: 8px 18px
        }

        .Btn-normal-If5 .Btn-label-QJi {
            font-size: 14px
        }

        .Btn-normal-If5 .Btn-icon-BDP .rf-icon {
            height: 18px;
            margin-top: -2px
        }

        .Btn-normal-If5 .Btn-icon-BDP.Btn-leading-gb0 {
            margin-right: 7px
        }

        .Btn-normal-If5 .Btn-icon-BDP.Btn-trailing-Lem {
            margin-left: 7px
        }

        .Btn-mediumLarge-EdB .Btn-labelWrapper-_Re {
            padding: 8px 18px
        }

        .Btn-mediumLarge-EdB .Btn-label-QJi {
            font-size: 16px
        }

        .Btn-mediumLarge-EdB .Btn-icon-BDP .rf-icon {
            height: 18px;
            margin-top: -2px
        }

        .Btn-mediumLarge-EdB .Btn-icon-BDP.Btn-leading-gb0 {
            margin-right: 7px
        }

        .Btn-mediumLarge-EdB .Btn-icon-BDP.Btn-trailing-Lem {
            margin-left: 7px
        }

        .Btn-large-Gn8 .Btn-labelWrapper-_Re {
            padding: 10px 22px 12px
        }

        .Btn-large-Gn8 .Btn-label-QJi {
            font-size: 18px
        }

        .Btn-large-Gn8 .Btn-icon-BDP .rf-icon {
            height: 20px
        }

        .Btn-large-Gn8 .Btn-icon-BDP.Btn-leading-gb0 {
            margin-right: 10px
        }

        .Btn-large-Gn8 .Btn-icon-BDP.Btn-trailing-Lem {
            margin-left: 10px
        }

        @media(max-width: 603px) {

            .Btn-shouldOnlyShowIconInNarrowBreakpoints-H4b.Btn-large-Gn8 .Btn-label-QJi,
            .Btn-shouldOnlyShowIconInNarrowBreakpoints-H4b.Btn-normal-If5 .Btn-label-QJi,
            .Btn-shouldOnlyShowIconInNarrowBreakpoints-H4b.Btn-small-lgf .Btn-label-QJi {
                display: none
            }

            .Btn-shouldOnlyShowIconInNarrowBreakpoints-H4b.Btn-large-Gn8 .Btn-icon-BDP.Btn-leading-gb0,
            .Btn-shouldOnlyShowIconInNarrowBreakpoints-H4b.Btn-normal-If5 .Btn-icon-BDP.Btn-leading-gb0,
            .Btn-shouldOnlyShowIconInNarrowBreakpoints-H4b.Btn-small-lgf .Btn-icon-BDP.Btn-leading-gb0 {
                margin-right: 0
            }
        }

        .Btn-forceIconOnly-IeA.Btn-large-Gn8 .Btn-label-QJi,
        .Btn-forceIconOnly-IeA.Btn-normal-If5 .Btn-label-QJi,
        .Btn-forceIconOnly-IeA.Btn-small-lgf .Btn-label-QJi {
            display: none
        }

        .Btn-forceIconOnly-IeA.Btn-large-Gn8 .Btn-icon-BDP.Btn-leading-gb0,
        .Btn-forceIconOnly-IeA.Btn-normal-If5 .Btn-icon-BDP.Btn-leading-gb0,
        .Btn-forceIconOnly-IeA.Btn-small-lgf .Btn-icon-BDP.Btn-leading-gb0 {
            margin-right: 0
        }

        .CreatorProBadge-activator-oU4 {
            cursor: unset
        }

        .CreatorProBadge-disablePointerEvents-iIs {
            pointer-events: none
        }

        .CreatorProBadge-link-ZaU {
            color: #fff;
            text-decoration: underline
        }

        .CreatorProBadge-link-ZaU:focus-visible {
            outline: 1px solid #fff;
            outline-offset: 2px
        }

        .CreatorProBadge-pill-lJL {
            background: linear-gradient(45deg, #0088fd 0%, #003bff 50%, #001faa 100%);
            border: 0;
            border-radius: 6px;
            color: #fff;
            cursor: default;
            font-family: "acumin-pro-wide", "Acumin Pro Wide", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 9px;
            font-weight: bold;
            height: 18px;
            line-height: 20px;
            text-align: center;
            text-transform: uppercase;
            width: 34px
        }

        .CreatorProBadge-pill-lJL.CreatorProBadge-light-EaQ {
            background: #fff;
            color: #0057ff
        }

        .CreatorProBadge-pill-lJL.CreatorProBadge-lightBlue-GXc {
            background: #dee8ff;
            color: #0057ff
        }

        .CreatorProBadge-proIcon-Lg5 {
            align-items: center;
            display: flex;
            fill: currentColor;
            height: 18px;
            justify-content: center;
            stroke-width: 0
        }

        .CreatorProBadge-popover-BYU {
            width: 34px
        }

        .CreatorProBadge-screenReaderOnly-zpD {
            border-width: 0 !important;
            clip: rect(1px, 1px, 1px, 1px) !important;
            height: 1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            white-space: nowrap !important;
            width: 1px !important
        }

        .CreatorProBadge-tooltipContainer-F_H {
            font-size: 13px;
            line-height: 18px;
            padding: 15px 40px;
            text-align: center;
            width: 320px
        }

        @media(max-width: 603px) {
            .CreatorProBadge-pill-lJL {
                pointer-events: none
            }
        }

        .Popover-activator-M8N {
            cursor: pointer;
            display: block;
            position: relative;
            width: inherit;
            z-index: 3
        }

        .Popover-activator-M8N:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .Popover-arrowWrapper-hh2 {
            display: block;
            height: calc(100% + 20px);
            left: -10px;
            position: absolute;
            top: -10px;
            width: calc(100% + 20px);
            z-index: -1
        }

        .Popover-arrow-rN6 {
            height: 20px;
            width: 20px
        }

        .Popover-arrow-rN6::after {
            content: "";
            display: block;
            height: 15px;
            position: absolute;
            transform: rotateZ(45deg);
            width: 15px
        }

        .Popover-blue-lTE .Popover-arrow-rN6::after {
            background: #0057ff
        }

        .Popover-dark-akw .Popover-arrow-rN6::after {
            background-color: #191919
        }

        .Popover-light-WK0 .Popover-arrow-rN6::after {
            background-color: #fff
        }

        .Popover-hiddenArrow-tqs {
            opacity: 0
        }

        .Popover-content-rnw {
            background: transparent;
            border-radius: 5px;
            display: flex;
            filter: drop-shadow(0 1px 2px rgba(0, 0, 0, 0.4));
            flex-flow: column nowrap;
            inset: -1000000px auto auto -1000000px;
            position: absolute;
            width: auto;
            z-index: 1004
        }

        .Popover-content-rnw.Popover-light-WK0 {
            background: #fff
        }

        .Popover-content-rnw.Popover-dark-akw {
            background: #191919;
            color: #fff
        }

        .Popover-content-rnw.Popover-blue-lTE {
            background: #0057ff;
            color: #fff
        }

        .Popover-content-rnw[data-popper-placement=bottom] .Popover-arrow-rN6,
        .Popover-content-rnw[data-popper-placement=bottom-start] .Popover-arrow-rN6,
        .Popover-content-rnw[data-popper-placement=bottom-end] .Popover-arrow-rN6 {
            top: 5px
        }

        .Popover-content-rnw[data-popper-placement=right] .Popover-arrow-rN6,
        .Popover-content-rnw[data-popper-placement=right-start] .Popover-arrow-rN6,
        .Popover-content-rnw[data-popper-placement=right-end] .Popover-arrow-rN6 {
            left: 5px
        }

        .Popover-content-rnw[data-popper-placement=left] .Popover-arrow-rN6,
        .Popover-content-rnw[data-popper-placement=left-start] .Popover-arrow-rN6,
        .Popover-content-rnw[data-popper-placement=left-end] .Popover-arrow-rN6 {
            left: calc(100% - 20px)
        }

        .Popover-content-rnw[data-popper-placement=top] .Popover-arrow-rN6,
        .Popover-content-rnw[data-popper-placement=top-start] .Popover-arrow-rN6,
        .Popover-content-rnw[data-popper-placement=top-end] .Popover-arrow-rN6 {
            top: calc(100% - 20px)
        }

        @media(max-width: 603px) {
            .Popover-hideMobile-KuU {
                display: none
            }
        }

        @media(min-width: 604px)and (max-width: 1024px) {
            .Popover-hideTablet-Se9 {
                display: none
            }
        }

        .Popover-mask-k_L {
            cursor: default;
            height: 100%;
            left: 0;
            pointer-events: none;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1003
        }

        @media(max-width: 603px) {
            .Popover-mask-k_L {
                display: none
            }
        }

        .Popover-mask-k_L.Popover-usePointerEvents-ZOZ {
            pointer-events: auto
        }

        .Popover-mask-k_L.Popover-showBackgroundMask-ouh {
            background-color: rgba(0, 0, 0, .15)
        }

        [data-popper-placement=bottom] .Popover-arrow-rN6,
        [data-popper-placement=bottom-start] .Popover-arrow-rN6,
        [data-popper-placement=bottom-end] .Popover-arrow-rN6,
        [data-popper-placement=top] .Popover-arrow-rN6,
        [data-popper-placement=top-start] .Popover-arrow-rN6,
        [data-popper-placement=top-end] .Popover-arrow-rN6 {
            display: flex;
            justify-content: center
        }

        .SearchTypeahead-searchContainer-Owv {
            --result-padding-x: 36px;
            --result-font-size: 20px;
            position: relative;
            width: 100%;
            z-index: 1
        }

        @media(min-width: 1080px)and (max-width: 1180px) {
            .SearchTypeahead-searchContainer-Owv {
                --result-font-size: 15px
            }
        }

        .SearchTypeahead-searchContainer-Owv.SearchTypeahead-isSubmittable-JcY {
            --result-font-size: 22px;
            --result-padding-x: 51px
        }

        @media(max-width: 603px) {
            .SearchTypeahead-searchContainer-Owv.SearchTypeahead-isSubmittable-JcY {
                --result-padding-x: 71px;
                --result-font-size: 18px
            }
        }

        .SearchTypeahead-searchContainer-Owv.SearchTypeahead-forSidebar-vLM.SearchTypeahead-isSubmittable-JcY {
            --result-padding-x: 36px;
            --result-font-size: 18px
        }

        @media(max-width: 603px) {
            .SearchTypeahead-searchContainer-Owv.SearchTypeahead-isSubmittable-JcY:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within {
                background: #fff;
                display: flex;
                left: 0;
                overflow: hidden;
                overscroll-behavior: contain;
                padding: 24px;
                position: fixed;
                right: 0;
                top: 55px;
                z-index: 1
            }

            .SearchTypeahead-searchContainer-Owv.SearchTypeahead-isSubmittable-JcY:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within.SearchTypeahead-isTypeaheadEnabled-xOv {
                bottom: 0;
                height: calc(100vh - 55px);
                height: calc(100dvh - 55px)
            }

            .SearchTypeahead-searchContainer-Owv.SearchTypeahead-isSubmittable-JcY:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-suggestions-r5x {
                box-shadow: none;
                padding-top: 0;
                top: 90px
            }

            .SearchTypeahead-searchContainer-Owv.SearchTypeahead-isSubmittable-JcY:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within.SearchTypeahead-forSidebar-vLM .SearchTypeahead-suggestions-r5x {
                overflow: hidden;
                top: 60px
            }
        }

        .SearchTypeahead-searchContainer-Owv .SearchTypeahead-searchInput-BMV:focus-visible {
            outline: none
        }

        .SearchTypeahead-searchContainer-Owv:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-transparentSearchInputWrap-WA4 .SearchTypeahead-transparentSearchInput-0Xl {
            color: #191919
        }

        .SearchTypeahead-searchContainer-Owv:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-transparentSearchInputWrap-WA4 .SearchTypeahead-transparentSearchInput-0Xl::-moz-placeholder {
            color: #959595
        }

        .SearchTypeahead-searchContainer-Owv:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-transparentSearchInputWrap-WA4 .SearchTypeahead-transparentSearchInput-0Xl::placeholder {
            color: #959595
        }

        .SearchTypeahead-searchContainer-Owv:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-transparentSearchInputWrap-WA4 .SearchTypeahead-whiteIcon-vjS {
            fill: #191919
        }

        .SearchTypeahead-searchContainer-Owv.SearchTypeahead-forSidebar-vLM {
            padding-left: 5px
        }

        @media(max-width: 900px) {
            .SearchTypeahead-searchContainer-Owv.SearchTypeahead-forSidebar-vLM {
                overflow: visible !important;
                padding: 0 !important;
                position: relative !important;
                top: 0 !important
            }
        }

        .SearchTypeahead-forSidebar-vLM.SearchTypeahead-isSubmittable-JcY:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within {
            padding: 0;
            position: relative;
            top: 0
        }

        .SearchTypeahead-searchInputWrap-_8H {
            background-color: #f9f9f9;
            border: 1px solid #e8e8e8;
            border-radius: 50px;
            display: flex;
            height: 32px;
            width: 100%
        }

        @media(min-width: 922px) {
            .SearchTypeahead-searchInputWrap-_8H {
                transition: background-color .15s linear, border-color .15s linear
            }
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchInputWrap-_8H {
            border: 1px solid transparent;
            height: 100%;
            max-height: 50px
        }

        @media(min-width: 922px) {
            .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchInputWrap-_8H {
                border-bottom-right-radius: 0;
                border-top-right-radius: 0
            }
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-searchInputWrap-_8H {
            border: 1px solid #e8e8e8
        }

        @media(min-width: 922px) {
            .SearchTypeahead-forSidebar-vLM .SearchTypeahead-searchInputWrap-_8H {
                border-bottom-right-radius: 50px;
                border-top-right-radius: 50px
            }
        }

        @media(max-width: 603px) {
            .SearchTypeahead-isSubmittable-JcY:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-searchInputWrap-_8H {
                background: transparent;
                border-color: #ccc;
                height: 52px;
                padding-left: 1px
            }
        }

        @media(max-width: 603px) {
            .SearchTypeahead-isSubmittable-JcY.SearchTypeahead-forSidebar-vLM:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-searchInputWrap-_8H {
                height: 38px
            }
        }

        @media(min-width: 922px) {
            .SearchTypeahead-isTypeaheadEnabled-xOv .SearchTypeahead-searchInputWrap-_8H {
                z-index: 1
            }
        }

        .SearchTypeahead-transparentSearchInputWrap-WA4 {
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, .3);
            border: 1px solid rgba(232, 232, 232, 0)
        }

        .SearchTypeahead-transparentSearchInputWrap-WA4:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within {
            -webkit-backdrop-filter: none;
            backdrop-filter: none
        }

        .SearchTypeahead-transparentSearchInputWrap-WA4:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-transparentSearchInput-0Xl {
            color: #191919
        }

        .SearchTypeahead-transparentSearchInputWrap-WA4:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-transparentSearchInput-0Xl::-moz-placeholder {
            color: #959595
        }

        .SearchTypeahead-transparentSearchInputWrap-WA4:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-transparentSearchInput-0Xl::placeholder {
            color: #959595
        }

        .SearchTypeahead-transparentSearchInputWrap-WA4:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-whiteIcon-vjS {
            fill: #191919
        }

        .SearchTypeahead-overlay-p2d {
            background: #000;
            height: 100%;
            left: 0;
            opacity: 0;
            pointer-events: none;
            position: fixed;
            top: 0;
            transition: opacity .15s linear;
            width: 100%;
            z-index: -1
        }

        .SearchTypeahead-searchContainer-Owv:focus-within .SearchTypeahead-overlay-p2d {
            opacity: .5
        }

        .SearchTypeahead-contentTypeShortcutWrapper-uBi {
            padding: 20px var(--result-padding-x, 36px) 10px
        }

        .SearchTypeahead-contentTypeShortcutWrapper-uBi.SearchTypeahead-contentTypeShortcutAfterResults-LLM {
            border-top: 1px solid #e8e8e8;
            margin-top: 10px
        }

        .SearchTypeahead-suggestions-r5x {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .15);
            display: flex;
            flex-direction: column;
            left: 0;
            max-height: min(100vh - 100px, 80vh);
            opacity: 0;
            overflow: hidden;
            padding-bottom: 10px;
            padding-top: 50px;
            pointer-events: none;
            position: absolute;
            right: 0;
            top: -5px;
            will-change: transform
        }

        @media(min-width: 922px) {
            .SearchTypeahead-suggestions-r5x {
                transition: opacity .15s linear
            }
        }

        .SearchTypeahead-suggestions-r5x .SearchTypeahead-suggestionsInner-XR4 {
            flex-grow: 1;
            overflow: auto
        }

        @media(max-width: 603px) {
            .SearchTypeahead-suggestions-r5x .SearchTypeahead-suggestionsInner-XR4 {
                padding-bottom: 85px
            }
        }

        .SearchTypeahead-suggestions-r5x .SearchTypeahead-suggestion-lkE {
            margin-right: -17px;
            padding-left: 22px
        }

        .SearchTypeahead-suggestions-r5x .SearchTypeahead-hideOverflow-O4a {
            overflow: hidden
        }

        .SearchTypeahead-suggestions-r5x .SearchTypeahead-headingSuggestion-Hmb {
            padding-left: calc(var(--result-padding-x, 36px) + 22px)
        }

        .SearchTypeahead-searchContainer-Owv:focus-within .SearchTypeahead-suggestions-r5x {
            opacity: 1;
            pointer-events: auto
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-suggestions-r5x {
            border-top-right-radius: 0;
            left: -1px;
            padding-top: 65px;
            right: -1px;
            top: -1px
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-suggestions-r5x {
            border-top-right-radius: 15px;
            padding-bottom: 30px
        }

        @media(max-width: 900px) {
            .SearchTypeahead-forSidebar-vLM .SearchTypeahead-suggestions-r5x {
                box-sizing: border-box;
                height: 100vh;
                max-width: 100vw
            }
        }

        .SearchTypeahead-shortcuts-_zp {
            border-bottom: 1px solid #e8e8e8;
            margin-bottom: 20px
        }

        .SearchTypeahead-mobileCloseButton-kpv.SearchTypeahead-mobileCloseButton-kpv {
            display: none
        }

        @media(max-width: 603px) {
            .SearchTypeahead-isSubmittable-JcY:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-mobileCloseButton-kpv.SearchTypeahead-mobileCloseButton-kpv {
                display: block;
                height: 45px;
                z-index: 1
            }
        }

        @media(max-width: 603px) {
            .SearchTypeahead-forSidebar-vLM.SearchTypeahead-isSubmittable-JcY:not(.SearchTypeahead-hasFollowingTagFocus-hzS):focus-within .SearchTypeahead-mobileCloseButton-kpv.SearchTypeahead-mobileCloseButton-kpv {
                height: 38px
            }
        }

        .SearchTypeahead-closeButton-Ac2 {
            align-items: center;
            cursor: pointer;
            display: flex;
            height: 100%;
            justify-content: center;
            position: absolute;
            right: 0;
            top: 0;
            width: 50px
        }

        .SearchTypeahead-closeButton-Ac2 .SearchTypeahead-icon-FI6 {
            fill: dimgray;
            height: 15px;
            width: 15px
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-closeButton-Ac2 .SearchTypeahead-icon-FI6 {
            fill: #191919;
            height: 12px;
            width: 12px
        }

        @media(max-width: 603px) {
            .SearchTypeahead-closeButton-Ac2 {
                display: none
            }
        }

        .SearchTypeahead-searchForm-Qsy {
            flex: 1;
            margin-right: 10px;
            position: relative;
            text-align: start;
            z-index: 1
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchForm-Qsy {
            margin-right: 0
        }

        .SearchTypeahead-inputOutline-Vg_:focus-within::after {
            opacity: 1
        }

        .SearchTypeahead-inputOutline-Vg_::after {
            border: 1px solid #0057ff;
            border-top-left-radius: 14px;
            border-top-right-radius: 14px;
            content: "";
            display: block;
            height: 38px;
            left: -36px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            right: -10px;
            top: -5px
        }

        @media(min-width: 603px) {
            .SearchTypeahead-inputOutline-Vg_::after {
                transition: opacity .2s linear
            }
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-inputOutline-Vg_::after {
            border-radius: 999px;
            bottom: 0;
            height: 100%;
            left: -51px;
            max-height: 50px;
            right: -2px;
            top: -2px
        }

        @media(min-width: 603px) {
            .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-inputOutline-Vg_::after {
                border-bottom-right-radius: 0;
                border-top-right-radius: 0
            }
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-inputOutline-Vg_::after {
            left: -58px;
            right: 0;
            top: -1px
        }

        @media(min-width: 603px) {
            .SearchTypeahead-forSidebar-vLM .SearchTypeahead-inputOutline-Vg_::after {
                border-bottom-right-radius: 0;
                border-top-right-radius: 14px
            }
        }

        @media(min-width: 603px) {
            .SearchTypeahead-isSubmittable-JcY.SearchTypeahead-isTypeaheadEnabled-xOv .SearchTypeahead-inputOutline-Vg_::after {
                border-bottom-left-radius: 0;
                border-top-left-radius: 14px
            }
        }

        .SearchTypeahead-searchInput-BMV {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            color: #191919;
            font-size: 15px;
            font-weight: 600;
            height: 100%;
            margin-top: -1px;
            overflow: hidden;
            position: absolute;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 100%
        }

        .SearchTypeahead-searchInput-BMV::-moz-placeholder {
            color: #959595;
            font-weight: normal
        }

        .SearchTypeahead-searchInput-BMV::placeholder {
            color: #959595;
            font-weight: normal
        }

        .SearchTypeahead-searchInput-BMV::-webkit-search-cancel-button {
            display: none
        }

        .SearchTypeahead-searchInput-BMV::-webkit-search-decoration {
            display: none
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchInput-BMV {
            font-size: 22px;
            font-weight: 800;
            padding-right: 45px
        }

        @media(max-width: 603px) {
            .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchInput-BMV {
                font-size: 18px
            }
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchInput-BMV::-moz-placeholder {
            color: dimgray;
            font-weight: bold
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchInput-BMV::placeholder {
            color: dimgray;
            font-weight: bold
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-searchInput-BMV {
            font-size: var(--result-font-size)
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-searchInput-BMV::-moz-placeholder {
            color: #191919
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-searchInput-BMV::placeholder {
            color: #191919
        }

        @media(max-width: 603px) {
            .SearchTypeahead-searchInput-BMV {
                padding-right: 10px
            }
        }

        .SearchTypeahead-transparentSearchInput-0Xl {
            color: #fff
        }

        .SearchTypeahead-transparentSearchInput-0Xl::-moz-placeholder {
            color: #fff;
            opacity: 1
        }

        .SearchTypeahead-transparentSearchInput-0Xl::placeholder {
            color: #fff;
            opacity: 1
        }

        .SearchTypeahead-searchIcon-SB6 {
            align-items: center;
            display: flex;
            justify-content: center;
            width: 36px;
            z-index: 1
        }

        .SearchTypeahead-searchIcon-SB6 .SearchTypeahead-icon-FI6 {
            fill: #959595;
            height: 18px;
            margin-left: 4px;
            margin-top: -1px;
            width: 18px
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchIcon-SB6 {
            width: 50px
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-searchIcon-SB6 .SearchTypeahead-icon-FI6 {
            fill: dimgray;
            height: 23px;
            width: 23px
        }

        .SearchTypeahead-searchIcon-SB6 .SearchTypeahead-whiteIcon-vjS {
            fill: #fff
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-searchIcon-SB6 {
            margin: 0 5px 0 16px;
            width: 36px
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-searchIcon-SB6 .SearchTypeahead-icon-FI6 {
            fill: #191919;
            height: 18px;
            width: 18px
        }

        .SearchTypeahead-spinnerWrapper-GdA {
            position: absolute;
            right: 9px;
            top: 6px
        }

        .SearchTypeahead-isSubmittable-JcY .SearchTypeahead-spinnerWrapper-GdA {
            right: 17px;
            top: 15px
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-spinnerWrapper-GdA {
            right: 9px;
            top: 11px
        }

        @media(max-width: 900px) {
            .SearchTypeahead-forSidebar-vLM .SearchTypeahead-spinnerWrapper-GdA {
                top: 10px
            }
        }

        @media(max-width: 900px) {
            .SearchTypeahead-forSidebar-vLM .SearchTypeahead-spinnerWrapper-GdA {
                top: 10px
            }
        }

        .SearchTypeahead-spinner-unI {
            height: 17px;
            width: 17px
        }

        .SearchTypeahead-followingTag-We8 {
            position: absolute;
            top: 5px
        }

        .SearchTypeahead-forSidebar-vLM .SearchTypeahead-followingTag-We8 {
            height: 40px;
            top: 3px
        }

        @media(max-width: 900px) {
            .SearchTypeahead-forSidebar-vLM .SearchTypeahead-followingTag-We8 {
                height: 34px
            }
        }

        .SearchTypeahead-hideInput-O6Y {
            opacity: 0;
            pointer-events: none
        }

        .SearchTypeahead-recentSearch-aSQ {
            overflow-x: hidden
        }

        .NotificationsMenu-root-YjN {
            display: inline-flex;
            height: 100%
        }

        .NotificationsMenu-notificationsPopover-XHC {
            padding: 0
        }

        @media(min-width: 604px) {
            .NotificationsMenu-notificationsDesktop-vbh {
                display: inline-flex
            }
        }

        @media(max-width: 603px) {
            .NotificationsMenu-notificationsDesktop-vbh {
                display: none
            }
        }

        @media(min-width: 604px) {
            .NotificationsMenu-notificationsMobile-kcE {
                display: none
            }
        }

        @media(max-width: 603px) {
            .NotificationsMenu-notificationsMobile-kcE {
                display: inline-flex
            }
        }

        .Project-projectWrapper-qk5 {
            height: 100%;
            pointer-events: none;
            width: 100%
        }

        @media(min-width: 1025px) {
            .Project-projectWrapper-qk5 {
                margin-top: -20px
            }
        }

        @media(max-width: 1024px) {
            .Project-projectWrapper-qk5 #lightbox-wrap .lightbox-extra.control.close {
                top: 60px
            }
        }

        .Project-centerSpinner-AOd {
            margin: 0 auto;
            top: 50%
        }

        .Project-collectionModalWithLightboxOpen-f0D {
            z-index: 1100
        }

        .Tooltip-wrapper-Uzv {
            align-self: flex-start;
            display: inline-flex;
            justify-content: center;
            margin-bottom: -6px;
            padding-bottom: 6px;
            position: relative
        }

        @media(max-width: 921px) {
            .Tooltip-wrapper-Uzv:not(.Tooltip-responsive-XDl) .Tooltip-container-DIF {
                display: none
            }
        }

        .Tooltip-textWrapper-eiQ {
            display: block
        }

        .Tooltip-fullWidth-yEW {
            width: 100%
        }

        .Tooltip-trigger-eZ_ {
            position: relative;
            z-index: 2
        }

        .Tooltip-truncateTrigger-AyT {
            display: flex;
            max-width: 100%;
            overflow: hidden;
            white-space: nowrap
        }

        .Tooltip-blockLayoutTrigger-KVJ {
            display: block;
            height: 100%;
            width: 100%
        }

        .Tooltip-container-DIF {
            background-color: #fff;
            border-radius: 3px;
            color: #191919;
            filter: drop-shadow(0 1px 2px rgba(0, 0, 0, 0.4));
            border-radius: 6px;
            position: absolute;
            will-change: transform;
            z-index: 100
        }

        .Tooltip-blackTooltip-EME .Tooltip-container-DIF {
            background: #191919;
            color: #fff
        }

        .Tooltip-greyTooltip-y9s .Tooltip-container-DIF {
            background: #3c3c3c;
            color: #fff
        }

        .Tooltip-blueTooltip-c1e .Tooltip-container-DIF {
            background: #0057ff;
            color: #fff
        }

        .Tooltip-container-DIF:not(.Tooltip-fullWidth-yEW) {
            display: flex;
            justify-content: center
        }

        .Tooltip-container-DIF .Tooltip-triangleContainer-r5D {
            position: absolute
        }

        .Tooltip-container-DIF .Tooltip-mask-mwQ {
            background: #fff;
            height: 6px;
            left: -2px;
            position: relative;
            width: 16px
        }

        .Tooltip-blackTooltip-EME .Tooltip-container-DIF .Tooltip-mask-mwQ {
            background: #191919
        }

        .Tooltip-blueTooltip-c1e .Tooltip-container-DIF .Tooltip-mask-mwQ {
            background: #0057ff
        }

        .Tooltip-greyTooltip-y9s .Tooltip-container-DIF .Tooltip-mask-mwQ {
            background: #3c3c3c
        }

        .Tooltip-container-DIF.Tooltip-right-pvm {
            right: calc(100% + 7px)
        }

        .Tooltip-container-DIF.Tooltip-position-left-YvP {
            right: 0;
            top: 0
        }

        .Tooltip-container-DIF.Tooltip-position-left-YvP .Tooltip-triangleContainer-r5D {
            right: -11px;
            transform: rotate(-90deg)
        }

        .Tooltip-container-DIF.Tooltip-position-left-YvP .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-right-color: #fff;
            transform: rotate(-90deg)
        }

        .Tooltip-blackTooltip-EME .Tooltip-container-DIF.Tooltip-position-left-YvP .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-right-color: #191919
        }

        .Tooltip-greyTooltip-y9s .Tooltip-container-DIF.Tooltip-position-left-YvP .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-right-color: #3c3c3c
        }

        .Tooltip-blueTooltip-c1e .Tooltip-container-DIF.Tooltip-position-left-YvP .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-right-color: #0057ff
        }

        .Tooltip-container-DIF.Tooltip-position-left-YvP .Tooltip-mask-mwQ {
            top: -6px
        }

        .Tooltip-container-DIF.Tooltip-position-top-FZF .Tooltip-triangleContainer-r5D {
            bottom: -6px;
            transform: initial
        }

        .Tooltip-container-DIF.Tooltip-position-top-FZF .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-top-color: #fff;
            transform: initial
        }

        .Tooltip-blackTooltip-EME .Tooltip-container-DIF.Tooltip-position-top-FZF .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-top-color: #191919
        }

        .Tooltip-greyTooltip-y9s .Tooltip-container-DIF.Tooltip-position-top-FZF .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-top-color: #3c3c3c
        }

        .Tooltip-blueTooltip-c1e .Tooltip-container-DIF.Tooltip-position-top-FZF .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-top-color: #0057ff
        }

        .Tooltip-container-DIF.Tooltip-position-top-FZF .Tooltip-mask-mwQ {
            top: -6px
        }

        .Tooltip-container-DIF.Tooltip-position-top-FZF.Tooltip-center-krh .Tooltip-mask-mwQ {
            left: 0;
            width: 12px
        }

        .Tooltip-container-DIF.Tooltip-position-center-CBA {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            margin-top: -3px
        }

        .Tooltip-container-DIF.Tooltip-position-center-CBA.Tooltip-right-pvm .Tooltip-triangleContainer-r5D {
            margin-top: -6px;
            right: 0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .Tooltip-container-DIF.Tooltip-position-center-CBA.Tooltip-right-pvm .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-top-color: #fff;
            transform: rotate(-90deg)
        }

        .Tooltip-blackTooltip-EME .Tooltip-container-DIF.Tooltip-position-center-CBA.Tooltip-right-pvm .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-top-color: #191919
        }

        .Tooltip-greyTooltip-y9s .Tooltip-container-DIF.Tooltip-position-center-CBA.Tooltip-right-pvm .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-top-color: #3c3c3c
        }

        .Tooltip-blueTooltip-c1e .Tooltip-container-DIF.Tooltip-position-center-CBA.Tooltip-right-pvm .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-top-color: #0057ff
        }

        .Tooltip-container-DIF.Tooltip-position-center-CBA.Tooltip-right-pvm .Tooltip-mask-mwQ {
            display: none
        }

        .Tooltip-container-DIF.Tooltip-position-bottom-CSC .Tooltip-triangleContainer-r5D {
            top: -12px;
            transform: initial
        }

        .Tooltip-container-DIF.Tooltip-position-bottom-CSC .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-bottom-color: #fff;
            transform: initial
        }

        .Tooltip-blackTooltip-EME .Tooltip-container-DIF.Tooltip-position-bottom-CSC .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-bottom-color: #191919
        }

        .Tooltip-greyTooltip-y9s .Tooltip-container-DIF.Tooltip-position-bottom-CSC .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-bottom-color: #3c3c3c
        }

        .Tooltip-blueTooltip-c1e .Tooltip-container-DIF.Tooltip-position-bottom-CSC .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-bottom-color: #0057ff
        }

        .Tooltip-container-DIF.Tooltip-position-bottom-CSC .Tooltip-mask-mwQ {
            top: 12px
        }

        .Tooltip-container-DIF.Tooltip-position-bottom-CSC.Tooltip-center-krh .Tooltip-mask-mwQ {
            left: 0;
            width: 12px
        }

        .Tooltip-container-DIF.Tooltip-position-right-pyx {
            top: -5px
        }

        .Tooltip-container-DIF.Tooltip-position-right-pyx.Tooltip-isLightbox-zwJ .Tooltip-triangleContainer-r5D {
            top: 14px
        }

        .Tooltip-container-DIF.Tooltip-position-right-pyx .Tooltip-triangleContainer-r5D {
            left: -10px;
            transform: rotate(90deg)
        }

        .Tooltip-container-DIF.Tooltip-position-right-pyx .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-right-color: #fff;
            transform: rotate(-90deg)
        }

        .Tooltip-blackTooltip-EME .Tooltip-container-DIF.Tooltip-position-right-pyx .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-right-color: #191919
        }

        .Tooltip-greyTooltip-y9s .Tooltip-container-DIF.Tooltip-position-right-pyx .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-right-color: #3c3c3c
        }

        .Tooltip-blueTooltip-c1e .Tooltip-container-DIF.Tooltip-position-right-pyx .Tooltip-triangle-Qw9 {
            border-color: transparent;
            border-style: solid;
            border-width: 7px;
            height: 0;
            position: absolute;
            width: 0;
            border-right-color: #0057ff
        }

        .Tooltip-container-DIF.Tooltip-position-right-pyx .Tooltip-mask-mwQ {
            bottom: 6px
        }

        .Tooltip-closeIconWrapper-Oo4 {
            position: absolute;
            right: 8px;
            top: 8px
        }

        .Tooltip-closeIcon-WS8 {
            fill: #959595;
            width: 10px
        }

        .Tooltip-closeIcon-WS8:hover {
            fill: dimgray
        }

        .Tooltip-topPositionHitBox-Q8Z {
            bottom: 0;
            position: absolute;
            width: 100%;
            z-index: 1
        }

        .LanguageSelector-tooltipContainer-cBd {
            display: block
        }

        .LanguageSelector-resetButton-qrR {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            cursor: pointer;
            display: inline-block;
            font-family: inherit;
            font-size: inherit;
            line-height: 1;
            margin: 0;
            padding: 0
        }

        .LanguageSelector-footerSelectorItem-m2u {
            font-family: inherit;
            font-size: 11px;
            font-weight: bold;
            align-items: center;
            color: dimgray;
            display: flex
        }

        .LanguageSelector-footerSelectorItem-m2u.LanguageSelector-selected-sPL {
            background: #0057ff;
            color: #fff
        }

        .LanguageSelector-footerSelectorItem-m2u:hover,
        .LanguageSelector-footerSelectorItem-m2u:focus {
            background: #0057ff;
            color: #fff
        }

        .LanguageSelector-footerSelectorLinks-h87 {
            color: inherit;
            display: flex;
            padding: 6px 20px;
            width: 100%
        }

        .LanguageSelector-footerSelectorLinks-h87:hover {
            text-decoration: none
        }

        .LanguageSelector-footerSelectorLinks-h87.LanguageSelector-footerSelectorLinks-h87:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: -2px
        }

        .FooterLinks-downloadApp-Tiw {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            cursor: pointer;
            display: inline-block;
            font-family: inherit;
            font-size: inherit;
            line-height: 1;
            margin: 0;
            padding: 0;
            text-align: left
        }

        .FooterLinks-link-SQa {
            display: flex;
            flex-direction: row
        }

        .FooterLinks-link-SQa .FooterLinks-icon-Fzx {
            height: 100%;
            width: 100%
        }

        .SearchContentTypeSelector-wrapper-_Lw {
            --columns: 2;
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(var(--columns), 1fr);
            margin-top: 10px;
            max-width: 100%
        }

        @media(max-width: 753px) {
            .SearchContentTypeSelector-wrapper-_Lw.SearchContentTypeSelector-wrapperSearch-wRI {
                --columns: 1
            }
        }

        @media(min-width: 1440px) {
            .SearchContentTypeSelector-wrapper-_Lw.SearchContentTypeSelector-wrapperSearch-wRI {
                --columns: 3
            }
        }

        @media(min-width: 1080px)and (max-width: 1200px) {
            .SearchContentTypeSelector-wrapper-_Lw.SearchContentTypeSelector-wrapperSearch-wRI.SearchContentTypeSelector-wrapperSearchWithAssets-jxn {
                --columns: 1
            }
        }

        .SearchContentTypeSelector-wrapper-_Lw.SearchContentTypeSelector-wrapperNav-Pr7 {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr))
        }

        @media(min-width: 1440px) {
            .SearchContentTypeSelector-wrapper-_Lw.SearchContentTypeSelector-wrapperNav-Pr7 {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))
            }
        }

        .SearchContentTypeSelector-emphasis-hk7 {
            color: #191919;
            font-style: normal;
            font-weight: bold;
            word-break: break-all
        }

        .SearchContentTypeSelector-headingQuery-NgI {
            color: dimgray;
            display: inline-block;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 16px
        }

        .SearchContentTypeSelector-headingDefault-z9K.SearchContentTypeSelector-headingDefault-z9K {
            padding-left: 0;
            padding-right: 0
        }

        .Fade-enterActive-MtI {
            animation: Fade-fade-Vp_ .3s
        }

        .Fade-leaveActive-BTR {
            animation: Fade-fade-Vp_ .3s reverse
        }

        @keyframes Fade-fade-Vp_ {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .SwapConfirmationModal-modalTitle-pCk {
            margin-left: 8px
        }

        .SwapConfirmationModal-faqlink-Wuu {
            color: #191919;
            text-decoration: underline
        }

        .SwapConfirmationModal-closeIconClass-opc {
            margin: 0
        }

        @media(max-width: 603px) {
            .SwapConfirmationModal-closeIconClass-opc {
                display: none
            }
        }

        .SearchResultTypeHeading-heading-wSt {
            color: dimgray;
            display: inline-block;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 8px;
            padding-left: var(--result-padding-x, 5px);
            padding-right: var(--result-padding-x, 5px);
            text-transform: uppercase
        }

        .SearchContentTypeButton-btn-fXK {
            border-radius: 12px;
            width: 100%
        }

        .SearchContentTypeButton-btn-fXK:focus-visible,
        .SearchContentTypeButton-btn-fXK :focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .SearchContentTypeButton-btnLabel-quG {
            margin-right: auto;
            margin-top: -1px;
            overflow: hidden;
            padding: 10px;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .SearchContentTypeButton-btnIcon-YBA {
            color: #959595;
            fill: currentColor;
            flex-shrink: 0;
            height: 20px;
            width: 20px
        }

        .SearchContentTypeButton-btnArrow-lFf {
            fill: #959595;
            height: 10px;
            width: 10px
        }

        .Project-rf-button__container-Z6v {
            box-sizing: border-box;
            display: inline-block;
            text-align: center
        }

        .Project-rf-button__container-Z6v.Project-form-item-G71 {
            margin: 0
        }

        .Project-rf-button__container-Z6v .Project-rf-icon--share-MSl,
        .Project-rf-button__container-Z6v .Project-rf-icon--edit-NPU,
        .Project-rf-button__container-Z6v .Project-rf-icon--teams-fzf,
        .Project-rf-button__container-Z6v .Project-rf-icon--clone-project-YNN {
            transform: scale(0.75)
        }

        .Project-rf-button__container-Z6v.Project-rf-button__container--message-pQf .Project-rf-button__icon-container-anx {
            margin-left: 2px
        }

        .Project-rf-button__container-Z6v.Project-rf-button__container--appreciate-S1O .Project-rf-button__icon-container--leading-l8I {
            margin-bottom: -1px;
            margin-top: 1px
        }

        .Project-rf-button-ucL {
            background-color: #0057ff;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 50px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.25;
            padding: 6px 15px 8px;
            text-shadow: none;
            transition-duration: 300ms;
            transition-property: background, color, border;
            transition-timing-function: linear;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            vertical-align: top
        }

        .Project-rf-button-ucL:hover {
            background-color: #003ecb;
            background-image: none;
            text-decoration: none
        }

        .Project-rf-button-ucL:active {
            background-color: #002f9a;
            background-image: none;
            box-shadow: none
        }

        .Project-rf-button-ucL.Project-hide-xSh {
            display: none
        }

        .Project-rf-button__label-Lar,
        .Project-rf-button__icon-container-anx {
            vertical-align: inherit
        }

        .Project-rf-button__label-Lar {
            color: inherit;
            display: inline-block
        }

        .Project-rf-button__icon-container-anx {
            display: inline-block;
            height: 17px;
            width: 17px
        }

        .Project-rf-button__icon-container-anx svg {
            fill: #fff;
            height: 100%;
            width: 100%
        }

        .Project-rf-button__icon-container--leading-wide-fxz {
            height: 19px;
            margin-right: 7px;
            width: 18px
        }

        .Project-rf-button__icon-container--leading-l8I {
            margin-left: -4px;
            margin-right: 6px
        }

        .Project-rf-button__icon-container--leading-l8I .Project-rf-icon--triangle-H05 {
            transform: rotate(180deg)
        }

        .Project-rf-button__icon-container--trailing-_Ir {
            margin-left: 6px;
            margin-right: -4px
        }

        .Project-rf-button-ucL:not(.Project-rf-button--icon-leading-Xug) .Project-rf-button__icon-container--leading-l8I {
            display: none
        }

        .Project-rf-button-ucL:not(.Project-rf-button--icon-trailing-i8n) .Project-rf-button__icon-container--trailing-_Ir {
            display: none
        }

        .Project-rf-button--icon-only-s7D.Project-rf-button-ucL {
            padding-left: 17px;
            padding-right: 17px
        }

        .Project-rf-button--icon-only-s7D .Project-rf-button__label-Lar {
            display: none
        }

        .Project-rf-button--icon-only-s7D .Project-rf-button__icon-container-anx {
            margin: 0
        }

        .Project-rf-button--icon-only-s7D .Project-rf-button__icon-container-anx.Project-rf-button__icon-container--leading-l8I {
            display: block;
            margin: 0 -5px
        }

        .Project-rf-button-ucL.Project-rf-button--icon-with-arrow-QlR .Project-rf-button__icon-container--leading-l8I {
            display: inline-block
        }

        .Project-rf-button-ucL.Project-rf-button--icon-with-arrow-QlR .Project-rf-button__icon-container--trailing-_Ir {
            margin-left: 6px;
            margin-right: -7px
        }

        .Project-rf-button-ucL.Project-rf-button--icon-with-arrow-QlR .Project-rf-button__icon-container--trailing-_Ir .Project-rf-icon--triangle-H05 {
            margin-top: 1px
        }

        .Project-rf-button-ucL.Project-rf-button--icon-with-arrow-QlR .Project-rf-button__label-Lar {
            display: none
        }

        .Project-rf-button--icon-dropdown-VBV .Project-rf-button__icon-container-anx.Project-rf-button__icon-container--trailing-_Ir,
        .Project-rf-button-ucL.Project-rf-button--icon-with-arrow-QlR .Project-rf-button__icon-container-anx.Project-rf-button__icon-container--trailing-_Ir {
            display: inline-block;
            padding-left: 3px;
            transform: rotate(90deg)
        }

        .Project-rf-button-ucL.Project-rf-button--small-E3V {
            font-size: 12px;
            padding: 4px 15px
        }

        .Project-rf-button-ucL.Project-rf-button--small-E3V .Project-rf-button__icon-container-anx {
            height: 15px;
            width: 15px
        }

        .Project-rf-button-ucL.Project-rf-button--small-E3V.Project-rf-button--inline-QbE {
            padding-left: 2px;
            padding-right: 2px
        }

        .Project-rf-button-ucL.Project-rf-button--large-C2c {
            padding: 7px 18px 8px
        }

        .Project-rf-button-ucL.Project-rf-button--huge-hSz {
            font-size: 18px;
            padding: 9px 22px 11px
        }

        .Project-rf-button-ucL.Project-rf-button--huge-hSz .Project-rf-button__icon-container-anx {
            height: 22px;
            width: 22px
        }

        .Project-rf-button--secondary-Dte {
            background-color: #fff;
            background-image: none;
            border: 1px solid #e8e8e8;
            color: #191919;
            font-size: 14px
        }

        .Project-rf-button--secondary-Dte:hover {
            background-color: #f1f1f1
        }

        .Project-rf-button--secondary-Dte:active {
            background-color: #e4e4e4
        }

        .Project-rf-button--secondary-Dte .Project-rf-button__icon-container-anx svg {
            fill: #444
        }

        .Project-rf-button--tertiary-cKH {
            background-color: #058900
        }

        .Project-rf-button--tertiary-cKH:hover {
            background-color: #026700
        }

        .Project-rf-button--tertiary-cKH:active {
            background-color: #024400
        }

        .Project-rf-button--danger-r04 {
            background-color: #d00d00;
            color: #fff
        }

        .Project-rf-button--danger-r04:hover {
            background-color: #9d0a00
        }

        .Project-rf-button--danger-r04:active {
            background-color: #840800
        }

        .Project-rf-button--inline-QbE {
            background: transparent;
            background-color: transparent;
            border-color: transparent;
            color: #0057ff;
            font-size: 12px;
            padding: 7px 10px;
            text-shadow: none
        }

        .Project-rf-button--inline-QbE:hover {
            background: transparent;
            background-color: transparent;
            border-color: transparent;
            text-decoration: underline
        }

        .Project-rf-button--inline-QbE:active {
            box-shadow: none
        }

        .Project-rf-button--disabled-dXw {
            background-color: #e8e8e8;
            cursor: default;
            pointer-events: none
        }

        .Project-rf-button--disabled-dXw .Project-rf-button__label-Lar {
            color: #fff
        }

        .Project-rf-button--accessible-U33:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 2px
        }

        .Project-rf-button__container--follow-b0O .Project-rf-button--following-NQN,
        .Project-rf-button__container--follow-b0O .Project-rf-button--unfollow-TF4,
        .Project-rf-button__container--follow-b0O .Project-rf-button__label--following-jET,
        .Project-rf-button__container--follow-b0O .Project-rf-button__label--unfollow-IzY {
            display: none
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-wide-rqF {
            width: 100%
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-wide-rqF .Project-rf-button__label-wide-eud {
            align-items: initial;
            flex: auto;
            font-size: 16px;
            font-weight: bold
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-wide-rqF .Project-rf-button--follow-wide-Kbm {
            padding: 10px 18px
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-wide-rqF .Project-rf-button--unfollow-TF4 .Project-rf-button__label-Lar,
        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-wide-rqF .Project-rf-button--following-NQN .Project-rf-button__label-Lar {
            font-size: 16px;
            font-weight: bold
        }

        .Project-rf-button__container--follow-b0O.Project-following-ZOt .Project-rf-button--following-NQN,
        .Project-rf-button__container--follow-b0O.Project-following-ZOt .Project-rf-button__label--following-jET,
        .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt .Project-rf-button--following-NQN,
        .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt .Project-rf-button__label--following-jET {
            display: block
        }

        .Project-rf-button__container--follow-b0O.Project-following-ZOt .Project-rf-button--follow-yVU,
        .Project-rf-button__container--follow-b0O.Project-following-ZOt .Project-rf-button__label--follow-Oul,
        .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt .Project-rf-button--follow-yVU,
        .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt .Project-rf-button__label--follow-Oul {
            display: none
        }

        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O.Project-following-ZOt:hover .Project-rf-button--unfollow-TF4,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O.Project-following-ZOt:hover .Project-rf-button__label--unfollow-IzY,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt:hover .Project-rf-button--unfollow-TF4,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt:hover .Project-rf-button__label--unfollow-IzY {
            display: block
        }

        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O.Project-following-ZOt:hover .Project-rf-button--following-NQN,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O.Project-following-ZOt:hover .Project-rf-button-label--following-lCC,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt:hover .Project-rf-button--following-NQN,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt:hover .Project-rf-button-label--following-lCC {
            display: none
        }

        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O.Project-following-ZOt.Project-following-hold-YvE:hover .Project-rf-button--unfollow-TF4,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O.Project-following-ZOt.Project-following-hold-YvE:hover .Project-rf-button__label--unfollow-IzY,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt.Project-following-hold-YvE:hover .Project-rf-button--unfollow-TF4,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt.Project-following-hold-YvE:hover .Project-rf-button__label--unfollow-IzY {
            display: none
        }

        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O.Project-following-ZOt.Project-following-hold-YvE:hover .Project-rf-button--following-NQN,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O.Project-following-ZOt.Project-following-hold-YvE:hover .Project-rf-button__label--following-jET,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt.Project-following-hold-YvE:hover .Project-rf-button--following-NQN,
        .Project-no-has-touch-EOc .Project-rf-button__container--follow-b0O .Project-rf-button-ucL.Project-following-ZOt.Project-following-hold-YvE:hover .Project-rf-button__label--following-jET {
            display: block
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button-ucL,
        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button--secondary-Dte,
        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button--danger-r04 {
            background-color: transparent;
            background-image: none;
            border-color: transparent;
            color: #0057ff;
            padding-left: 0;
            padding-right: 0;
            text-shadow: none
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button-ucL:hover,
        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button--secondary-Dte:hover,
        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button--danger-r04:hover {
            background-color: transparent;
            color: #0057ff;
            text-shadow: none
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button-ucL:active,
        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button--secondary-Dte:active,
        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v>.Project-rf-button--danger-r04:active {
            background-color: transparent;
            box-shadow: none;
            color: #0057ff
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v .Project-rf-button--follow-yVU .Project-rf-button__label-Lar::before {
            color: inherit;
            content: "+ "
        }

        .Project-rf-button__container--follow-b0O.Project-rf-button__container--follow-link-M7u.Project-rf-button__container-Z6v .Project-rf-button--unfollow-TF4 .Project-rf-button__label-Lar::before {
            color: inherit;
            content: "- "
        }

        .Project-dark-background-gXh .Project-rf-button-ucL {
            border-color: #191919
        }

        .Project-rf-button__container--follow-b0O:not(.Project-rf-button__container--follow-link-M7u) .Project-rf-button--danger-r04:hover,
        .Project-rf-button__container--follow-b0O:not(.Project-rf-button__container--follow-link-M7u) .Project-rf-button--danger-r04:active {
            background-color: #d00d00
        }

        body.Project-project-editor-AFw button.Project-btn-primary-Q3j,
        body.Project-project-editor-AFw button.Project-btn-secondary-gtC,
        body.Project-project-editor-AFw button.Project-btn-tertiary-kZg,
        body.Project-project-editor-AFw button.Project-btn-action-B7j {
            background-color: #0057ff;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 50px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.25;
            padding: 6px 15px 8px;
            text-shadow: none;
            transition-duration: 300ms;
            transition-property: background, color, border;
            transition-timing-function: linear;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            vertical-align: top;
            display: inline-block
        }

        body.Project-project-editor-AFw button.Project-btn-primary-Q3j:hover,
        body.Project-project-editor-AFw button.Project-btn-secondary-gtC:hover,
        body.Project-project-editor-AFw button.Project-btn-tertiary-kZg:hover,
        body.Project-project-editor-AFw button.Project-btn-action-B7j:hover {
            background-color: #003ecb;
            background-image: none;
            text-decoration: none
        }

        body.Project-project-editor-AFw button.Project-btn-primary-Q3j:active,
        body.Project-project-editor-AFw button.Project-btn-secondary-gtC:active,
        body.Project-project-editor-AFw button.Project-btn-tertiary-kZg:active,
        body.Project-project-editor-AFw button.Project-btn-action-B7j:active {
            background-color: #002f9a;
            background-image: none;
            box-shadow: none
        }

        body.Project-project-editor-AFw button.Project-btn-primary-Q3j.Project-hide-xSh,
        body.Project-project-editor-AFw button.Project-btn-secondary-gtC.Project-hide-xSh,
        body.Project-project-editor-AFw button.Project-btn-tertiary-kZg.Project-hide-xSh,
        body.Project-project-editor-AFw button.Project-btn-action-B7j.Project-hide-xSh {
            display: none
        }

        body.Project-project-editor-AFw button.Project-btn-tertiary-kZg,
        body.Project-project-editor-AFw button.Project-btn-secondary-gtC {
            background: transparent;
            background-color: transparent;
            border-color: transparent;
            color: #0057ff;
            font-size: 12px;
            padding: 7px 10px;
            text-shadow: none
        }

        body.Project-project-editor-AFw button.Project-btn-tertiary-kZg:hover,
        body.Project-project-editor-AFw button.Project-btn-secondary-gtC:hover {
            background: transparent;
            background-color: transparent;
            border-color: transparent;
            text-decoration: underline
        }

        body.Project-project-editor-AFw button.Project-btn-tertiary-kZg:active,
        body.Project-project-editor-AFw button.Project-btn-secondary-gtC:active {
            box-shadow: none
        }

        body.Project-project-editor-AFw button.Project-btn-minor-WjN {
            color: dimgray
        }

        body.Project-project-editor-AFw button.Project-btn-primary-Q3j[disabled] {
            background-color: #e8e8e8
        }

        body.Project-project-editor-AFw button.Project-btn-action-B7j {
            background-color: #058900
        }

        body.Project-project-editor-AFw button.Project-btn-action-B7j:hover {
            background-color: #026700
        }

        body.Project-project-editor-AFw button.Project-btn-action-B7j:active {
            background-color: #024400
        }

        body.Project-project-editor-AFw .Project-module-edit-bar-TyU button.Project-btn-secondary-gtC {
            background-color: #fff;
            background-image: none;
            border: 1px solid #e8e8e8;
            color: #191919;
            font-size: 14px
        }

        body.Project-project-editor-AFw .Project-module-edit-bar-TyU button.Project-btn-secondary-gtC:hover {
            background-color: #f1f1f1
        }

        body.Project-project-editor-AFw .Project-module-edit-bar-TyU button.Project-btn-secondary-gtC:active {
            background-color: #e4e4e4
        }

        body.Project-project-editor-AFw .Project-module-edit-bar-TyU button.Project-btn-secondary-gtC .Project-rf-button__icon-container-anx svg {
            fill: #444
        }

        .Project-resetButton-Bcw {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            cursor: pointer;
            display: inline-block;
            font-family: inherit;
            font-size: inherit;
            line-height: 1;
            margin: 0;
            padding: 0
        }

        .Project-creatorProBadge-MI6 {
            padding-left: 6px
        }

        .Project-project-z8i {
            margin-top: 83px;
            pointer-events: none
        }

        @media(min-width: 1025px) {
            .Project-project-z8i {
                margin-left: auto;
                margin-right: auto
            }

            .Project-project-z8i.Project-fullPage-WM8 .Project-userActions-XFE {
                top: 70px
            }

            .Project-project-z8i.Project-fullPage-WM8 .Project-userActions-XFE.Project-userActionsWithTools-sdb {
                top: 143px
            }
        }

        @media(max-width: 1024px) {
            .Project-project-z8i .Project-userActions-XFE {
                align-items: start;
                margin-left: 20px;
                top: -15px
            }
        }

        @media(min-width: 1025px) {
            .Project-project-z8i .Project-userActions-XFE {
                margin-right: -50px;
                position: sticky;
                top: 40px;
                transform: translateX(20px);
                transition: opacity .15s linear;
                will-change: opacity
            }

            .Project-project-z8i .Project-userActions-XFE.Project-userActionsWithTools-sdb {
                margin-left: 25px;
                top: 83px
            }

            .Project-project-z8i .Project-userActions-XFE.Project-onLock-ScB {
                top: 83px
            }

            .Project-project-z8i .Project-userActions-XFE.Project-onLock-ScB.Project-fullPageUserActions-XW6 {
                top: 143px
            }
        }

        .Project-project-z8i {
            flex-grow: 1;
            padding-bottom: 70px;
            position: relative;
            width: 100%
        }

        #site-content .Project-project-z8i {
            text-align: left
        }

        @media(min-width: 1025px) {
            .Project-project-z8i {
                max-width: 1400px
            }

            .Project-project-z8i.Project-fullPage-WM8 {
                top: 0
            }
        }

        .Project-project-z8i.Project-accessibilityOutlines-K0R :focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        @media(min-width: 1025px) {
            .Project-horizontalPadding-f14 {
                width: calc(100% - 400px)
            }
        }

        @media(min-width: 1025px)and (max-width: 1870px) {
            .Project-horizontalPadding-f14 {
                width: calc(100% - 190px)
            }
        }

        @media(min-width: 1025px) {
            .Project-narrowProject-oTV {
                max-width: 740px
            }
        }

        .Project-admin-vBZ {
            max-width: 1670px
        }

        .Project-admin-vBZ.Project-narrowProject-oTV {
            max-width: 1010px
        }

        .Project-belowProjectContent-CwK {
            height: 10px;
            position: absolute;
            width: 100%
        }

        .Project-wrapper-G8w {
            pointer-events: all;
            position: relative;
            z-index: 1
        }

        .Project-admin-vBZ .Project-wrapper-G8w::after {
            clear: both;
            content: "";
            display: block
        }

        .Project-adminSidebar-gW1 {
            display: none;
            float: left;
            width: 270px
        }

        @media(min-width: 1025px) {
            .Project-adminSidebar-gW1 {
                display: block
            }
        }

        .Project-sidebar-oAa {
            z-index: 3
        }

        .Project-sidebar-oAa:hover {
            z-index: 4
        }

        @media(max-width: 1024px) {
            .Project-sidebar-oAa {
                position: relative;
                top: -44px
            }
        }

        @media(min-width: 1025px) {
            .Project-sidebar-oAa {
                display: block;
                float: right;
                height: 100%;
                position: absolute;
                right: 0
            }
        }

        .Project-main-oWL {
            cursor: default;
            z-index: 3
        }

        .Project-main-oWL:hover {
            z-index: 4
        }

        @media(min-width: 1025px) {
            .Project-main-oWL {
                width: 100%
            }

            .Project-admin-vBZ .Project-main-oWL {
                float: left;
                width: calc(100% - 270px)
            }
        }

        .Project-topElement-P3R {
            background: #fff;
            box-sizing: border-box;
            color: #191919;
            display: flex;
            height: 83px;
            padding: 20px;
            position: absolute;
            top: -83px;
            width: 100%
        }

        @media(min-width: 1025px) {
            .Project-topElement-P3R {
                background: transparent;
                color: #fff;
                padding: 20px 0
            }
        }

        .Project-userActions-XFE .Project-userActionPhone-meh,
        .Project-userActions-XFE .Project-userActionTablet-f2f,
        .Project-userActions-XFE .Project-collection-y5x,
        .Project-userActions-XFE .Project-shareAndEmbed-Kf7,
        .Project-userActions-XFE .Project-aeroSidebar-dIn,
        .Project-userActions-XFE .Project-appreciate-yq7 {
            pointer-events: all
        }

        @media(max-width: 1024px) {
            .Project-userActions-XFE {
                align-items: center;
                display: flex;
                position: absolute;
                right: 20px
            }
        }

        @media(min-width: 1025px) {
            .Project-userActions-XFE {
                width: 45px
            }
        }

        .Project-userActions-XFE .Project-actionName-DD5 {
            color: #959595;
            cursor: pointer;
            display: flex;
            font-size: 11px;
            font-weight: bold;
            justify-content: center;
            margin-bottom: 25px;
            margin-top: 8px;
            pointer-events: all;
            text-align: center
        }

        .Project-userActions-XFE .Project-actionName-DD5.Project-avatarTitle-QfZ {
            margin-top: 13px
        }

        .Project-userActions-XFE .Project-actionName-DD5.Project-moodboardTitle-PRv,
        .Project-userActions-XFE .Project-actionName-DD5.Project-aeroTitle-GW2 {
            margin-top: -4px
        }

        .Project-userActions-XFE .Project-actionName-DD5.Project-aeroTitle-GW2 {
            text-decoration: none
        }

        @media(max-width: 1024px) {
            .Project-userActions-XFE .Project-actionName-DD5 {
                display: none
            }
        }

        .Project-userActions-XFE .Project-toolsAvatar-p2p,
        .Project-userActions-XFE .Project-sidebarTools-WFJ {
            pointer-events: all
        }

        @media(max-width: 1024px) {

            .Project-userActions-XFE .Project-toolsAvatar-p2p,
            .Project-userActions-XFE .Project-sidebarTools-WFJ {
                display: none
            }
        }

        .Project-actionNameFullPage-Nwt {
            color: dimgray !important
        }

        .Project-iconMessageButton-UEh .Project-actionName-DD5 {
            display: flex;
            justify-content: center;
            margin-bottom: 13px;
            margin-left: -2.5px;
            text-align: center;
            white-space: normal;
            width: 50px;
            word-break: break-word
        }

        @media(max-width: 1024px) {
            .Project-iconMessageButton-UEh .Project-actionName-DD5 {
                display: none
            }
        }

        @media(min-width: 1025px) {
            .Project-iconMessageButton-UEh {
                margin-bottom: 10px;
                margin-left: 0
            }
        }

        @media(max-width: 603px) {
            .Project-iconMessageButton-UEh {
                margin-left: 10px
            }
        }

        .Project-disableUserActions-tiz .Project-appreciateBottomContainer-dgs,
        .Project-disableUserActions-tiz .Project-appreciateBottom-Wgy,
        .Project-disableUserActions-tiz .Project-otherProjects-RvE,
        .Project-disableUserActions-tiz .Project-projectInfoComponent-AZq,
        .Project-disableUserActions-tiz .Project-topElement-P3R,
        .Project-disableUserActions-tiz .Project-iconMessageButton-UEh,
        .Project-disableUserActions-tiz .Project-sidebarEmbedTrigger-yfA,
        .Project-disableUserActions-tiz .Project-sourceFilesTooltip-C5t {
            pointer-events: none
        }

        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-userActionPhone-meh,
        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-userActionTablet-f2f,
        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-collection-y5x,
        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-shareAndEmbed-Kf7,
        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-aeroSidebar-dIn,
        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-appreciate-yq7,
        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-actionName-DD5,
        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-toolsAvatar-p2p,
        .Project-disableUserActions-tiz .Project-userActions-XFE .Project-sidebarTools-WFJ {
            pointer-events: none
        }

        .Project-followTitle-VkM {
            cursor: pointer;
            display: block
        }

        .following .Project-followTitle-VkM {
            display: none
        }

        .Project-followingTitle-J3w {
            cursor: pointer;
            display: none
        }

        .following .Project-followingTitle-J3w {
            display: block
        }

        .Project-floatingAvatar-dx6 {
            opacity: 0;
            pointer-events: none;
            position: relative
        }

        @media(min-width: 1025px) {
            .Project-floatingAvatar-dx6 {
                opacity: 1;
                pointer-events: all
            }
        }

        @media(max-width: 1024px) {
            .Project-floatingAvatar-dx6 {
                display: none
            }
        }

        .Project-floatingAvatar-dx6:not(.Project-hasNoTopSection-Kyl) {
            opacity: 0;
            pointer-events: none
        }

        .Project-owner-uRW {
            align-items: center;
            color: #191919;
            display: inline-flex;
            flex-grow: 1;
            justify-content: flex-start;
            width: 100%
        }

        @media(min-width: 1025px) {
            .Project-owner-uRW {
                color: #fff;
                padding: 20px 0;
                width: auto
            }
        }

        .Project-fullPageOwner-gxM {
            color: #191919
        }

        .Project-fullPageOwner-gxM .Project-captionFollow-fY4 .rf-button__container--follow-link .rf-button__label {
            color: #191919
        }

        .Project-ownerItems-qza {
            display: flex;
            font-size: 14px;
            white-space: nowrap
        }

        .Project-ownerName-A8O {
            color: inherit
        }

        .Project-titleRow-QSo {
            align-items: center;
            -moz-column-gap: 8px;
            column-gap: 8px;
            display: flex;
            flex-wrap: wrap
        }

        .Project-title-Q6Q {
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            line-height: inherit;
            margin: 0;
            max-width: 100%
        }

        .Project-title-Q6Q,
        .Project-ownerName-A8O {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .Project-privacyLock-Ze5 {
            margin-bottom: 1px;
            width: -moz-fit-content;
            width: fit-content
        }

        @media(max-width: 603px) {
            .Project-privacyLock-Ze5 .Project-privacyLockBadge-lyQ {
                font-size: 8px
            }
        }

        .Project-separator-j9H {
            margin: -1px 10px 0
        }

        .Project-editBtn-pLV {
            color: inherit
        }

        .Project-caption-ayk {
            flex-grow: 1;
            margin: -2px 0 0 10px;
            max-width: calc(100% - 235px - 40px)
        }

        @media(max-width: 603px) {
            .Project-caption-ayk {
                max-width: calc(100% - 139px - 40px - 20px - 10px)
            }
        }

        @media(min-width: 604px)and (max-width: 1024px) {
            .Project-caption-ayk {
                max-width: calc(100% - 187px - 40px - 20px - 10px)
            }
        }

        @media(max-width: 603px) {
            .Project-isOwner-Bk1 .Project-caption-ayk {
                max-width: calc(100% - 32px - 50px - 40px)
            }
        }

        @media(min-width: 604px)and (max-width: 1024px) {
            .Project-isOwner-Bk1 .Project-caption-ayk {
                max-width: calc(100% - 241px - 20px - 40px)
            }
        }

        .Project-captionFollow-fY4,
        .Project-separator-j9H,
        .Project-appreciate-yq7,
        .Project-featureContainer-NMJ,
        .Project-editBtn-pLV {
            display: none
        }

        @media(min-width: 1025px) {

            .Project-captionFollow-fY4,
            .Project-separator-j9H,
            .Project-editBtn-pLV {
                display: inline
            }
        }

        .Project-captionFollow-fY4 .rf-button__container--follow-link .rf-button__label {
            color: #fff;
            font-size: 14px;
            vertical-align: initial
        }

        .Project-captionFollow-fY4 .rf-button__container--follow.rf-button__container--follow-link.rf-button__container>.rf-button--follow .rf-button__label::before,
        .Project-captionFollow-fY4 .rf-button__container--follow.rf-button__container--follow-link.rf-button__container>.rf-button--unfollow .rf-button__label::before {
            content: none
        }

        .Project-captionFollow-fY4 .rf-button__label:hover {
            text-decoration: underline
        }

        @media(min-width: 1025px) {
            .Project-appreciate-yq7 {
                display: block
            }
        }

        @media(max-width: 603px) {
            .Project-sidebar-oAa .Project-editProjectBtn-PvM {
                display: none
            }
        }

        .Project-sidebar-oAa .Project-editProjectBtn-PvM .Project-editButtonLabel-ExW {
            padding: 5px 15px 7px
        }

        .Project-editIcon-eb4 {
            height: 14px;
            margin-left: -4px;
            margin-right: 4px;
            padding-top: 2px;
            width: 14px
        }

        .Project-project-z8i .Project-userActionTablet-f2f {
            display: none;
            margin-left: 10px
        }

        @media(min-width: 604px)and (max-width: 1024px) {
            .Project-project-z8i .Project-userActionTablet-f2f {
                display: block
            }
        }

        .Project-project-z8i .Project-userActionPhone-meh {
            display: none
        }

        @media(max-width: 603px) {
            .Project-project-z8i .Project-userActionPhone-meh {
                display: block
            }
        }

        .Project-featureContainer-NMJ {
            margin-left: auto;
            max-width: 235px;
            position: relative;
            top: -20px
        }

        @media(min-width: 1025px) {
            .Project-featureContainer-NMJ {
                display: inline-flex;
                right: 0
            }
        }

        @keyframes Project-fadeIn-pDZ {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes Project-fadeOut-KUK {
            to {
                opacity: 0
            }
        }

        .Project-fadeIn-pDZ {
            animation-duration: .5s;
            animation-fill-mode: both;
            animation-name: Project-fadeIn-pDZ
        }

        .Project-fadeOut-KUK {
            animation-duration: .4s;
            animation-fill-mode: both;
            animation-name: Project-fadeOut-KUK
        }

        .Project-feature-qnS {
            margin-left: 10px
        }

        @media(min-width: 1025px) {
            .Project-admin-vBZ .Project-main-oWL #primary-project-content {
                border-radius: 3px 0 0
            }
        }

        .Project-main-oWL #primary-project-content {
            border-radius: 0
        }

        @media(min-width: 1025px) {
            .Project-main-oWL #primary-project-content {
                border-radius: 3px 3px 0 0
            }
        }

        .Project-main-oWL #primary-project-content.singleImageContent {
            padding-top: 0
        }

        @media(max-width: 1024px) {
            .Project-main-oWL #primary-project-content:not(.zero-top) {
                border-top: 1px solid #e8e8e8
            }
        }

        @media(max-width: 603px) {
            .Project-main-oWL #primary-project-content:not(.zero-top) {
                padding-top: 30px
            }

            .Project-main-oWL #primary-project-content:not(.zero-top).singleImageContent {
                padding-top: 0
            }
        }

        .Project-projectModuleContainer-BtF .spacer:last-child .divider {
            display: block
        }

        .Project-projectModules-yET {
            background: #fff
        }

        .Project-minSpacer-zVZ {
            min-height: 30px
        }

        .Project-floatingUserActionTablet-EUf {
            bottom: 0;
            display: none;
            float: right;
            position: sticky
        }

        @media(min-width: 604px)and (max-width: 1024px) {
            .Project-floatingUserActionTablet-EUf {
                bottom: 20px;
                display: block;
                margin-top: -70px;
                right: 20px
            }
        }

        @media(max-width: 603px) {
            .Project-floatingUserActionTablet-EUf {
                bottom: 15px;
                display: block;
                margin-top: -55px;
                right: 15px
            }
        }

        @media(min-width: 604px)and (max-width: 1024px) {
            .Project-floatingAeroTablet-SmC {
                right: 75px
            }
        }

        @media(max-width: 603px) {
            .Project-floatingAeroTablet-SmC {
                right: 70px
            }
        }

        .Project-appreciateWithPulsePoint-P5b,
        .Project-avatarWithPulsePoint-nsg {
            position: relative
        }

        .Project-sidebar-oAa .Project-appreciatePulsePoint-vIj,
        .Project-sidebar-oAa .Project-avatarPulsePoint-O11 {
            display: none
        }

        @media(min-width: 1025px) {

            .Project-sidebar-oAa .Project-appreciatePulsePoint-vIj,
            .Project-sidebar-oAa .Project-avatarPulsePoint-O11 {
                bottom: auto;
                display: flex;
                left: -15px;
                top: 30px;
                z-index: auto
            }
        }

        .Project-appreciateTopSidebar-cfm .Project-appreciateTopSidebarThumbSize-p77,
        .Project-appreciateMobile-jL3 .Project-appreciateMobileThumbSize-P8M {
            height: 15px;
            width: 16px
        }

        .Project-appreciateBottom-Wgy .Project-appreciateBottomThumbSize-UkL {
            height: 26px;
            width: 25px
        }

        .Project-appreciateBottom-Wgy .Project-appreciateBottomIcon-jmk {
            height: 75px;
            margin: 0 auto;
            width: 75px
        }

        .Project-loggedOutAppreciation-uEv {
            padding: 20px 30px 5px;
            width: 375px
        }

        @media(max-width: 603px) {
            .Project-loggedOutAppreciation-uEv {
                padding: 10px;
                width: 240px
            }
        }

        .Project-appreciateTopSidebar-cfm .Project-appreciateTopSidebarIcon-_E7,
        .Project-appreciateMobile-jL3 .Project-appreciateMobileIcon-WOd {
            height: 45px;
            width: 45px
        }

        @media(max-width: 1024px) {
            .Project-appreciateTopSidebarIcon-_E7 {
                display: none
            }
        }

        .Project-appreciateBottomContainer-dgs {
            display: none
        }

        @media(min-width: 1025px) {
            .Project-appreciateBottomContainer-dgs {
                background-color: #000;
                color: #fff;
                display: block;
                padding: 50px 0;
                text-align: center
            }
        }

        .Project-appreciateBottomSaveFollow-Pt8 {
            padding: 10px 0
        }

        .Project-appreciateFollow-VG2 {
            margin-top: 10px;
            width: 240px
        }

        .Project-appreciateFollow-VG2 .rf-button__container {
            width: 100%
        }

        .Project-projectInfoSection-x8B {
            padding-top: 18px
        }

        .Project-projectOverlay-OM0 {
            bottom: 30px;
            left: 50%;
            max-width: 90vw;
            position: fixed;
            transform: translateX(-50%);
            z-index: 6
        }

        .Project-admin-vBZ .Project-projectOverlay-OM0 {
            transform: translateX(calc(-50% - 135px))
        }

        .Project-fullPage-WM8 .Project-projectOverlay-OM0 {
            bottom: 63px
        }

        @media(max-width: 603px) {
            .Project-projectOverlay-OM0 {
                display: none
            }
        }

        .Project-sourceFilesProjectOverlay-Tas {
            width: 400px
        }

        .Project-projectName-n_3 {
            font-size: 24px;
            font-weight: bold;
            line-height: 1.2;
            margin: 0 auto 10px
        }

        .Project-projectStats-AU9 {
            align-items: center;
            display: flex;
            flex-flow: row nowrap;
            justify-content: center
        }

        .Project-projectStat-ZdT {
            color: #959595;
            display: flex;
            font-size: 14px;
            height: 17px;
            line-height: 1.2
        }

        .Project-projectStat-ZdT .Project-icon-qll {
            fill: #959595;
            margin-right: 2px
        }

        .Project-projectStat-ZdT:not(:last-child) {
            margin-right: 9px
        }

        .Project-projectStat-ZdT::before {
            margin-right: 2px
        }

        .Project-projectPublished-X5a {
            color: #959595;
            padding-top: 24px
        }

        .Project-adminNotices-wfa {
            cursor: default
        }

        @media(min-width: 1025px) {
            .Project-adminNotices-wfa {
                margin: 0 0 12px
            }
        }

        .Project-adminNotice-dTZ {
            background: #fef8f8;
            padding: 25px
        }

        .Project-adminNotice-dTZ .Project-adminDisagreeMsg-f9D {
            color: dimgray;
            font-size: 13px;
            line-height: 1.4
        }

        .Project-adminNotice-dTZ .Project-adminNoticeBody-tCO {
            color: dimgray;
            font-size: 13px;
            line-height: 1.4;
            margin: 10px 0
        }

        .Project-adminNotice-dTZ .Project-adminNoticeIcon-XuZ {
            position: relative;
            top: 1px;
            width: 12px
        }

        .Project-adminNotice-dTZ .Project-adminNoticeTitle-qrZ {
            color: #191919;
            font-size: 15px;
            margin-bottom: 11px
        }

        .Project-adminNotice-dTZ .Project-learnMore-e1r,
        .Project-adminNotice-dTZ .Project-submitProject-qtT {
            text-decoration: underline
        }

        .Project-adminNotice-dTZ:last-child {
            margin-bottom: 0
        }

        @media(min-width: 1025px) {
            .Project-adminNotice-dTZ {
                border-radius: 3px;
                margin-bottom: 5px;
                padding: 25px 40px
            }
        }

        .Project-followContainer-OPn,
        .Project-sidebarCollectionTrigger-V2q,
        .Project-sidebarEmbedTrigger-yfA,
        .Project-linkedAssetsSidebar-aeg.Project-linkedAssetsSidebar-aeg {
            align-items: center;
            background-color: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 50%;
            display: flex;
            height: 32px;
            justify-content: center;
            margin-left: 10px;
            overflow: hidden;
            position: relative;
            width: 32px
        }

        .Project-followContainer-OPn:hover,
        .Project-sidebarCollectionTrigger-V2q:hover,
        .Project-sidebarEmbedTrigger-yfA:hover,
        .Project-linkedAssetsSidebar-aeg.Project-linkedAssetsSidebar-aeg:hover {
            background-color: #f1f1f1
        }

        .Project-followContainer-OPn:active,
        .Project-sidebarCollectionTrigger-V2q:active,
        .Project-sidebarEmbedTrigger-yfA:active,
        .Project-linkedAssetsSidebar-aeg.Project-linkedAssetsSidebar-aeg:active {
            background-color: #e4e4e4
        }

        @media(min-width: 1025px) {

            .Project-followContainer-OPn,
            .Project-sidebarCollectionTrigger-V2q,
            .Project-sidebarEmbedTrigger-yfA,
            .Project-linkedAssetsSidebar-aeg.Project-linkedAssetsSidebar-aeg {
                height: 45px;
                margin-left: 0;
                width: 45px
            }
        }

        .Project-followContainer-OPn .Project-icon-qll,
        .Project-sidebarCollectionTrigger-V2q .Project-icon-qll,
        .Project-sidebarEmbedTrigger-yfA .Project-icon-qll,
        .Project-linkedAssetsSidebar-aeg.Project-linkedAssetsSidebar-aeg .Project-icon-qll {
            fill: #191919;
            height: 17px;
            width: 17px
        }

        @media(max-width: 1024px) {

            .Project-followContainer-OPn .Project-icon-qll,
            .Project-sidebarCollectionTrigger-V2q .Project-icon-qll,
            .Project-sidebarEmbedTrigger-yfA .Project-icon-qll,
            .Project-linkedAssetsSidebar-aeg.Project-linkedAssetsSidebar-aeg .Project-icon-qll {
                height: 12px;
                width: 12px
            }
        }

        .Project-assetCountCTA-PTc::after {
            animation: Project-slide-atr 3.3s infinite;
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, white 50%, rgba(255, 255, 255, 0) 99%, rgba(255, 255, 255, 0) 100%);
            content: "";
            height: 200%;
            left: -10px;
            max-width: 500px;
            position: absolute;
            top: -10px;
            transform: rotate(45deg);
            width: 50%
        }

        @keyframes Project-slide-atr {
            0% {
                opacity: 0;
                transform: translateX(-10%) rotate(45deg)
            }

            20% {
                opacity: 1
            }

            80% {
                opacity: 0;
                transform: translateX(160%) rotate(45deg)
            }

            100% {
                opacity: 0;
                transform: translateX(160%) rotate(45deg)
            }
        }

        .Project-linkedAssetDesktop-ld1.Project-linkedAssetDesktop-ld1 {
            display: none
        }

        @media(min-width: 1025px) {
            .Project-linkedAssetDesktop-ld1.Project-linkedAssetDesktop-ld1 {
                display: flex
            }
        }

        .Project-linkedAssetMobile-YYc.Project-linkedAssetMobile-YYc {
            display: none
        }

        @media(max-width: 1024px) {
            .Project-linkedAssetMobile-YYc.Project-linkedAssetMobile-YYc {
                cursor: pointer;
                display: flex
            }
        }

        @media(max-width: 1024px) {
            .Project-aeroSidebar-dIn {
                display: none
            }
        }

        .Project-tooltip-PUI.Project-collection-y5x {
            align-self: inherit;
            display: block
        }

        .Project-tooltipContent-PBm {
            font-size: 13px;
            font-weight: bold;
            white-space: nowrap
        }

        .Project-collectionButton-Zml {
            width: 240px
        }

        .Project-project-z8i .Project-collectionLeading-j1n {
            fill: #191919;
            height: 14px;
            width: 14px
        }

        @media(min-width: 1025px) {

            .Project-project-z8i .Project-collection-y5x,
            .Project-project-z8i .Project-appreciateTopSidebar-cfm,
            .Project-project-z8i .Project-aeroSidebar-dIn {
                margin: 12px 0 6px
            }
        }

        @media(min-width: 1025px) {
            .Project-project-z8i .Project-toolsAvatar-p2p {
                margin-bottom: 6px
            }

            .Project-project-z8i .Project-toolsAvatar-p2p.Project-ownerAvatar-HoS {
                margin-bottom: 25px
            }
        }

        .Project-followIconWrap-wvs.Project-followIconWrap-wvs {
            background: transparent
        }

        .Project-followIcon-h1X {
            height: 15px;
            position: relative;
            width: 15px
        }

        .Project-followIconCheck-ypY {
            right: -1px;
            top: 1px;
            width: 14px
        }

        .Project-chainIcon-dRB {
            height: 18px;
            width: 18px
        }

        .Project-iconMessageButton-UEh .Project-hireMeTooltip-mg4.Project-hireMeTooltip-mg4 {
            min-width: 310px;
            right: 120%;
            top: 22.5px;
            transform: translateY(-50%);
            width: 100%
        }

        .Project-sourceFileTooltip-xt_ {
            width: 380px
        }

        .Project-sourceFileTooltipContentContainer-B7b {
            padding: 20px
        }

        .Project-assetReportContainer-p1A {
            align-items: center;
            display: flex;
            margin-top: 10px
        }

        .Project-assetReportBtn-shJ {
            color: #707070;
            font-size: 11px
        }

        .Project-noBreak-_JR {
            white-space: nowrap
        }

        @keyframes Project-grow-shrink-oq0 {
            0% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.1)
            }

            100% {
                transform: scale(1)
            }
        }

        .Project-assetCountWrapper-Lim {
            align-items: end;
            background-color: #0057ff;
            border-radius: 50%;
            bottom: -2px;
            color: #fff;
            display: flex;
            height: 16px;
            justify-content: center;
            line-height: 17px;
            position: absolute;
            right: 0;
            width: 16px;
            z-index: 1
        }

        .Project-assetCountWrapperAnimation-WWA {
            animation: Project-grow-shrink-oq0 2s infinite
        }

        .Project-assetCount-rpd {
            font-size: 11px;
            font-weight: bold
        }

        .Project-subscriptionPlaceholder-axj {
            padding-bottom: 50px;
            text-align: center
        }

        .Project-spinnerContainer-OYj {
            align-items: center;
            display: flex;
            height: 60px;
            justify-content: center
        }

        .Project-spinnerContainer-OYj.Project-loadingNewProjectSpinner-VII {
            height: 800px
        }

        .Project-spinner-dL9 {
            height: 40px;
            width: 40px
        }

        .Project-seoFakeLink-Mun {
            display: none !important
        }

        .Error-error-XDG {
            align-items: center;
            background: #df0d0d;
            color: #fff;
            display: flex;
            font-weight: bold;
            justify-content: center;
            left: 0;
            line-height: 35px;
            position: fixed;
            text-align: center;
            top: 56px;
            width: 100%;
            z-index: 251
        }

        .Error-message-g_i {
            flex: 1
        }

        .Error-message-g_i a {
            color: inherit;
            text-decoration: underline
        }

        .rf-body--has-secondary-nav .Error-error-XDG {
            top: 120px
        }

        .rf-body--has-secondary-nav.has-message .Error-error-XDG {
            top: 150px
        }

        .has-message .Error-error-XDG {
            top: 90px
        }

        .global-nav-covered .Error-error-XDG {
            top: 0
        }

        .Error-icon-Pr8 {
            fill: #fff;
            height: 14px;
            margin: -2px 10px 0;
            width: 14px
        }

        @keyframes Error-slideDown-R_c {
            from {
                opacity: 0;
                transform: translate3d(0, -100%, 0)
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0)
            }
        }

        .Error-slideDown-R_c {
            animation-duration: .3s;
            animation-fill-mode: both;
            animation-name: Error-slideDown-R_c
        }

        .Error-slideUp-kzf {
            animation-direction: reverse;
            animation-duration: .3s;
            animation-fill-mode: both;
            animation-name: Error-slideDown-R_c
        }

        .Twitter-circle-iwP {
            fill: #50abf1
        }

        .Twitter-icon-o8D {
            fill: #fff
        }

        .Pinterest-circle-hEB {
            fill: #cd1d1f
        }

        .Pinterest-icon-qlR {
            fill: #fff
        }

        .FacebookSimplified-icon-qXb {
            fill: #1977f2
        }

        .FacebookSimplified-whiteIcon-rRM {
            fill: #fff
        }

        .LinkedIn-circle-fzp {
            fill: #0d85be
        }

        .LinkedIn-icon-bjP {
            fill: #fff
        }

        .Avatar-root-Ic4 {
            position: relative
        }

        .Avatar-root-Ic4 .Avatar-follow-Arf {
            bottom: 3px;
            position: absolute;
            right: 0;
            z-index: 3
        }

        .Avatar-root-Ic4 .Avatar-avatarTooltip-HWs {
            position: relative;
            z-index: 2
        }

        .Avatar-addMark-NjU {
            fill: #fff;
            height: 8px;
            width: 8px
        }

        .Avatar-checkMark-vu9 {
            display: block;
            fill: #191919;
            height: 6.22px;
            margin: 0 auto;
            position: relative;
            top: 30%;
            width: 8px
        }

        .Avatar-minusMark-Lmf {
            display: block;
            fill: #fff;
            margin: 0 auto;
            position: relative;
            top: 25%;
            width: 8px
        }

        .IconMessageButton-iconOnly-t3Q.IconMessageButton-iconOnly-t3Q {
            background-color: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 100%;
            height: 45px;
            width: 45px
        }

        @media(max-width: 1024px) {
            .IconMessageButton-iconOnly-t3Q.IconMessageButton-iconOnly-t3Q {
                height: 32px;
                width: 32px
            }
        }

        .IconMessageButton-iconOnly-t3Q.IconMessageButton-iconOnly-t3Q.IconMessageButton-iconOnly-t3Q:hover {
            background-color: #f1f1f1;
            border: 1px solid #e8e8e8
        }

        .IconMessageButton-iconOnly-t3Q.IconMessageButton-iconOnly-t3Q .IconMessageButton-icon-NkP {
            fill: #191919;
            height: 17px;
            margin: auto;
            width: 17px
        }

        @media(max-width: 1024px) {
            .IconMessageButton-iconOnly-t3Q.IconMessageButton-iconOnly-t3Q .IconMessageButton-icon-NkP {
                height: 12px;
                width: 12px
            }
        }

        .IconMessageButton-regularMessageText-PEu {
            margin-bottom: 25px
        }

        .IconMessageButton-iconWrapper-xuq.IconMessageButton-iconWrapper-xuq {
            height: 18px;
            padding: 0
        }

        .Tools-iconWrapper-V1F {
            align-items: center;
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            height: 45px;
            justify-content: center;
            width: 45px
        }

        .Tools-iconWrapper-V1F:hover {
            background: #f1f1f1
        }

        .Tools-genericToolsIcon-X3e {
            fill: #191919;
            height: 16px;
            width: 16px
        }

        .Tools-adobeToolIcon-xSn {
            height: 50%
        }

        .Tools-tooltipContent-a6L {
            width: 260px
        }

        .Tools-title-z7Y {
            color: #959595;
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase
        }

        .Tools-toolWithImage-BFR {
            display: inline-block;
            margin-right: 5px;
            margin-top: 19px
        }

        .Tools-pillShapedTool-hWy {
            display: block;
            margin-right: 0
        }

        .Tools-pillShapedTool-hWy:not(:first-child) {
            margin-top: 6px
        }

        .Tools-toolImage-ntJ {
            height: 31px;
            overflow: hidden;
            vertical-align: top;
            width: 31px
        }

        .Tools-toolsWithText-Qy_ {
            padding-top: 16px
        }

        .Tools-toolWithText-Xqm {
            display: inline
        }

        .Tools-toolWithText-Xqm:not(:last-child)::after {
            content: ", "
        }

        .Tools-toolLink-p9o {
            color: #191919;
            font-size: 16px;
            font-weight: bold
        }

        .Tools-toolIcon-tw4 {
            height: 25px;
            margin-right: 5px;
            width: 25px
        }

        .Tools-toolLabel-m6g {
            font-size: 15px;
            font-weight: 900;
            margin-bottom: auto;
            margin-left: 5px;
            margin-top: auto;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .Appreciate-wrapper-REw {
            align-items: center;
            background: #0057ff;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            height: 65px;
            justify-content: center;
            width: 65px
        }

        .Appreciate-wrapper-REw:hover {
            background: #0046cc;
            text-decoration: none
        }

        .Appreciate-floatAppreciate-pZQ {
            height: 45px;
            width: 45px
        }

        .Appreciate-appreciated-OT4 {
            background: #3c3c3c;
            color: #fff;
            flex-direction: column
        }

        .Appreciate-appreciated-OT4:hover {
            background: #232323;
            text-decoration: none
        }

        .Appreciate-count-pTK {
            font-size: 10px;
            font-weight: bold;
            margin-top: 3px
        }

        .Appreciate-disabled-Jui {
            pointer-events: none
        }

        .Appreciate-icon-jRA {
            fill: #fff;
            height: 22px;
            margin: -2px 0 0 3px;
            width: 22px
        }

        .Appreciate-appreciated-OT4 .Appreciate-icon-jRA {
            fill: #fff;
            width: 18px
        }

        .Appreciate-thumbSize-R8P {
            height: 22px;
            width: 22px
        }

        .Appreciate-appreciated-OT4 .Appreciate-thumbSize-R8P {
            width: 18px
        }

        @media(min-width: 604px)and (max-width: 1024px) {
            .Appreciate-thumbSize-R8P {
                height: 20px;
                width: 20px
            }

            .Appreciate-appreciated-OT4 .Appreciate-thumbSize-R8P {
                width: 15px
            }
        }

        @media(max-width: 603px) {
            .Appreciate-thumbSize-R8P {
                height: 16px;
                width: 16px
            }

            .Appreciate-appreciated-OT4 .Appreciate-thumbSize-R8P {
                width: 12px
            }
        }

        .Appreciate-tooltipContent-sJa {
            cursor: pointer;
            font-size: 13px;
            font-weight: bold;
            white-space: nowrap
        }

        .Appreciate-tooltip-IT8.Appreciate-tooltip-IT8 {
            cursor: pointer;
            margin-bottom: 0;
            padding-bottom: 0
        }

        .Appreciate-tooltipStyle-Ywy {
            padding: 10px 19px
        }

        .FollowButtonLegacy-legacyButton-mPH .rf-button__container--follow-link>.rf-button.rf-button--small {
            border: none;
            font-weight: normal;
            padding: 0
        }

        .FollowButtonLegacy-legacyButton-mPH :focus {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .FollowButtonMinimal-button-jX1 {
            align-items: center;
            background: #0057ff;
            border-radius: 50%;
            display: flex;
            height: 16px;
            justify-content: center;
            width: 16px
        }

        .FollowButtonMinimal-following-ehF {
            background: #fff
        }

        .FollowButtonMinimal-unfollow-OcM {
            background: #d00d00
        }

        .FollowButtonMinimal-followBtn-ylc {
            display: block;
            padding-bottom: 2px
        }

        .FollowButtonMinimal-tooltipContent-lbu {
            font-size: 13px;
            font-weight: bold;
            white-space: nowrap
        }

        .FollowButtonMinimal-tooltipStyle-b0n {
            padding: 10px 19px
        }

        .FollowButtonMinimal-followTooltip-B7Z {
            display: block
        }

        .following .FollowButtonMinimal-followTooltip-B7Z {
            display: none
        }

        .FollowButtonMinimal-unfollowTooltip-UYx {
            display: none
        }

        .following .FollowButtonMinimal-unfollowTooltip-UYx {
            display: block
        }

        .FollowButtonMinimal-tooltipContent-lbu {
            cursor: pointer
        }

        .Avatar-hovered-Iro {
            background: #fff;
            height: 100%;
            left: 0;
            opacity: .7;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 3
        }

        .Avatar-todos-pLk {
            list-style: none;
            margin: 0 0 5px;
            padding: 0
        }

        .Avatar-todo-u_I:last-child {
            border-bottom-color: transparent
        }

        .Avatar-hideForever-cWt {
            cursor: pointer;
            font-size: 11px;
            opacity: .8;
            text-decoration: underline
        }

        .Avatar-hideForever-cWt:hover {
            opacity: 1
        }

        .Avatar-lastItem-SUX.Avatar-lastItem-SUX {
            border-bottom-style: none
        }

        .Avatar-root-cxI {
            position: relative
        }

        .Avatar-avatar-G8t {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: #e8e8e8;
            border-radius: 50%;
            box-sizing: content-box !important;
            display: block;
            line-height: 0;
            overflow: hidden;
            position: relative
        }

        .Avatar-avatar-G8t:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t,
        .Avatar-verticalStack-m71 .Avatar-avatar-G8t {
            background-color: transparent;
            border-radius: 0;
            height: 100%;
            overflow: visible
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t {
            align-items: center;
            display: flex;
            height: 100%
        }

        .Avatar-creatorProBadge-Omv {
            bottom: 0;
            position: absolute;
            right: 0
        }

        .Avatar-disabled-KOS {
            cursor: default;
            pointer-events: none
        }

        .Avatar-hovered-Iro {
            background-color: #3c4e6e;
            display: block
        }

        .Avatar-avatarHover-z4f {
            position: relative;
            transition: filter .2s linear
        }

        .Avatar-avatarHover-z4f:hover {
            filter: brightness(80%)
        }

        .Avatar-avatarImage-VBb {
            border-radius: 50%;
            display: block;
            height: 100%;
            width: 100%
        }

        .Avatar-avatarImage-VBb[src=""] {
            opacity: 0
        }

        .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b {
            background-color: #fff;
            border-radius: 0;
            position: relative
        }

        .Avatar-pie-vQ0 .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b {
            float: left;
            width: 50%
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b,
        .Avatar-verticalStack-m71 .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b {
            border: 2px solid #fff;
            border-radius: 50%
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b:nth-child(n+3),
        .Avatar-verticalStack-m71 .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b:nth-child(n+3) {
            display: none
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b {
            height: 29px;
            width: 29px
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b:nth-child(n+2) {
            margin-left: -12.5px
        }

        .Avatar-verticalStack-m71 .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b {
            height: 85%;
            width: 85%
        }

        .Avatar-verticalStack-m71 .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b:first-child {
            bottom: 0;
            position: absolute;
            right: 0
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b.Avatar-avatarList-ggO {
            height: 44px;
            width: 44px
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b.Avatar-avatarList-ggO:nth-child(n+2) {
            margin-left: -20px
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t .Avatar-multipleAvatarImage-Q9b.Avatar-avatarList-ggO:nth-child(n+3) {
            display: block
        }

        .Avatar-extraCount-KlT {
            align-items: center;
            background: #dee8ff;
            border-radius: 50%;
            display: none;
            font-size: 10px;
            font-weight: bold;
            height: 25px;
            justify-content: center;
            width: 25px
        }

        .Avatar-verticalStack-m71 .Avatar-extraCount-KlT {
            background: #191919;
            bottom: 0;
            color: #fff;
            left: 0;
            position: absolute
        }

        .Avatar-verticalStack-m71 .Avatar-extraCount-KlT,
        .Avatar-horizontalStack-PWR .Avatar-extraCount-KlT {
            display: flex
        }

        .Avatar-horizontalGradient-PPt::before {
            background: linear-gradient(90deg, rgba(252, 252, 252, 0) 0%, white 100%);
            content: "";
            display: block;
            height: 100%;
            position: absolute;
            width: 100%;
            z-index: 7
        }

        .Avatar-horizontalStack-PWR .Avatar-avatar-G8t.Avatar-horizontalGradient-PPt .Avatar-multipleAvatarImage-Q9b:nth-child(n+3) {
            display: block
        }

        .Miniprofile-content-S7Y {
            padding: 0 0 5px
        }

        .Miniprofile-content-S7Y.Miniprofile-hide-nwT {
            visibility: hidden
        }

        .Miniprofile-activator-dDq {
            cursor: pointer
        }

        .Miniprofile-activator-dDq.Miniprofile-wait-EFY {
            cursor: wait
        }

        .Miniprofile-activator-dDq * {
            cursor: inherit
        }

        .Miniprofile-emptyBadgesRow-enT.Miniprofile-emptyBadgesRow-enT {
            margin-top: -35px
        }

        .Appreciations-icon-Z4i {
            fill: #fff
        }

        .ProjectExtras-disableUserActions-vFq .ProjectExtras-otherProjects-LbE,
        .ProjectExtras-disableUserActions-vFq .ProjectExtras-projectInfoComponent-bYQ {
            pointer-events: none
        }

        .MessageManager-availabilityTooltip-CIA {
            order: 1
        }

        @media(max-width: 603px) {
            .MessageManager-availabilityTooltip-CIA {
                margin-top: 0;
                max-width: 100%
            }
        }

        .MessageManager-iconWrapper-N8e.MessageManager-iconWrapper-N8e {
            height: 18px;
            padding: 0
        }

        .MessageManager-errorModal-j2d.MessageManager-errorModal-j2d {
            z-index: 250
        }

        .Collection-icon-mXx {
            fill: #fff
        }

        .Module-project-module-QeJ {
            padding: 0 7.1%
        }

        .Module-project-module-QeJ.Module-image-full-hY5,
        .Module-project-module-QeJ.Module-embed-full-pRi {
            padding-left: 0;
            padding-right: 0
        }

        .Module-project-module-QeJ.Module-placeholder-module-mjG {
            padding: 0
        }

        .Module-project-module-QeJ .Module-embed-dimensions-DnT {
            transition: all .09s linear
        }

        .Module-project-module-QeJ.Module-embed-full-pRi .Module-embed-dimensions-DnT {
            max-height: 100% !important;
            max-width: 100% !important
        }

        .Module-project-module-QeJ.Module-project-module-three-d-L8V {
            height: 700px;
            padding-left: 0;
            padding-right: 0;
            width: 100%
        }

        .Module-project-module-QeJ.Module-project-module-three-d-L8V .Module-module-content-three-d-aB1,
        .Module-project-module-QeJ.Module-project-module-three-d-L8V iframe {
            height: 100%;
            width: 100%
        }

        .Module-project-module-QeJ.Module-unsafe-dQw {
            background: #efefef;
            height: 0;
            margin-left: auto;
            margin-right: auto;
            padding: 55% 0 0;
            width: calc(100% - 14.2%)
        }

        .Module-project-module-QeJ object,
        .Module-project-module-QeJ iframe {
            margin: 0 auto
        }

        .Module-project-module-QeJ.Module-module-Bce.Module-text-lEN,
        .Module-project-module-QeJ.Module-module-Bce.Module-text-lEN span {
            line-height: 1.4em
        }

        .Module-v-4-z4Z .Module-project-module-QeJ,
        .Module-v-4-z4Z .Module-spacer-xuA,
        .Module-v-4-z4Z .Module-module-separator-Cil {
            padding-left: 8.56354%;
            padding-right: 8.56354%
        }

        .Module-spacer-xuA,
        .Module-module-separator-Cil {
            padding-left: 7.1%;
            padding-right: 7.1%
        }

        .Module-spacer-xuA:last-child .Module-divider-veu,
        .Module-module-separator-Cil:last-child .Module-divider-veu {
            display: none
        }

        .Module-project-module-image-inner-wrap-TNa {
            display: inline-block;
            max-width: 100%
        }

        .Module-project-module-image-MLs {
            text-align: center
        }

        .Module-project-module-image-MLs img {
            display: inline-block;
            max-width: 100%;
            vertical-align: middle
        }

        .Module-caption-container-lll,
        .Module-project-module-QeJ.Module-text-lEN {
            margin: 0 auto;
            max-width: calc(800px + 14.2%);
            word-wrap: break-word
        }

        .Module-caption-container-lll {
            margin-top: 15px
        }

        .Module-main-text-_Kx div,
        .Module-caption-text-wrap-zt0 div {
            height: auto !important;
            width: 100% !important
        }

        #Module-project-modules-ZrQ .Module-main-text-_Kx a:hover {
            text-decoration: underline
        }

        #Module-project-modules-ZrQ .Module-main-text-_Kx {
            font-feature-settings: initial
        }

        #Module-project-modules-ZrQ .Module-main-text-_Kx .Module-texteditor-inline-color-PZr a {
            color: inherit
        }

        #Module-project-modules-ZrQ .Module-main-text-_Kx .Module-texteditor-inline-fontfamily-muI a {
            font-family: inherit
        }

        #Module-project-modules-ZrQ .Module-main-text-_Kx .Module-texteditor-inline-fontsize-sp3 a {
            font-size: inherit
        }

        .Module-project-module__actions-kiY {
            align-items: start;
            cursor: default;
            display: flex;
            left: 10px;
            pointer-events: none;
            position: absolute;
            top: 10px;
            width: calc(100% - 20px);
            z-index: 3
        }

        .Module-project-module__actions-kiY>* {
            pointer-events: all
        }

        @media(max-width: 1024px) {
            .Module-project-module__actions-kiY {
                display: none
            }
        }

        .Module-project-module__actions-kiY .Module-module-cai-claim-action-Si8 {
            position: absolute;
            right: 15px;
            top: 0
        }

        .project-embed-overlay {
            width: calc(100% - 7.1% * 2)
        }

        .embed-full .project-embed-overlay {
            width: 100%
        }

        .Module-useAggressiveLazyLoad-Skd .project-module-image-inner-wrap {
            width: 100%
        }

        .Module-module-Bce {
            position: relative
        }

        .Module-module-Bce .project-module-image-inner-wrap {
            position: relative
        }

        .Module-module-Bce .project-module-image-full.grid--main {
            max-width: none;
            padding: 0;
            width: calc(100% )
        }

        .Module-module-Bce .embed-dimensions {
            z-index: 1
        }

        .Module-module-Bce .project-embed-overlay {
            align-items: center;
            background: rgba(25, 25, 25, .26);
            color: #fff;
            display: flex;
            font-size: 24px;
            font-weight: bold;
            height: 100%;
            justify-content: center;
            position: absolute;
            z-index: 2
        }

        .Module-module-Bce .project-embed-icon-container {
            align-items: center;
            background: #191919;
            border-radius: 10px;
            display: flex;
            flex-flow: column;
            height: 257px;
            justify-content: center;
            width: 442px
        }

        .Module-module-Bce .icon--embed-icon {
            fill: #fff;
            height: 62px;
            margin-bottom: 26px;
            width: 62px
        }

        .Module-module-Bce .project-embed-overlay-text {
            text-align: center;
            width: 234px
        }

        .Module-blockGridPointerEvents-BDb .grid__item-image {
            pointer-events: none
        }

        .Module-module-Bce:hover .project-module__actions,
        .Module-module-Bce:focus-within .project-module__actions {
            display: flex
        }

        .OtherProjects-scrollerMoreProject-DKh {
            background-color: #191919;
            height: auto;
            overflow: hidden;
            position: relative;
            white-space: nowrap;
            width: 100%
        }

        .OtherProjects-header-uof {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            left: 50px;
            line-height: 1;
            position: absolute;
            top: 50px;
            z-index: 1
        }

        .OtherProjects-userAvatar-_jt {
            float: left;
            margin-right: 10px
        }

        .OtherProjects-singleOwnerContainer-GMg {
            display: flex
        }

        .OtherProjects-userInfo-OJz {
            display: inline-block;
            padding-top: 1px
        }

        .OtherProjects-userName-X93 {
            color: #fff;
            -webkit-text-decoration-color: #fff;
            text-decoration-color: #fff
        }

        .OtherProjects-actionBtn-N_c {
            padding-top: 7px
        }

        .OtherProjects-actionBtn-N_c .rf-button {
            font-size: 12px;
            padding: 4px 15px
        }

        .OtherProjects-editBtn-NS2 .rf-button {
            padding: 3px 15px
        }

        .OtherProjects-editProjectBtn-b0Z {
            margin-top: 7px
        }

        .OtherProjects-editBtnClass-Nl2 {
            height: 25px
        }

        .OtherProjects-scrollerProjectWrapper-u4l {
            cursor: grab;
            -webkit-overflow-scrolling: touch;
            overflow-x: auto;
            overflow-y: hidden;
            padding: 120px 50px 50px;
            text-align: left;
            white-space: nowrap
        }

        .OtherProjects-scrollerProjectCover-hak {
            display: inline-block;
            height: 100%;
            white-space: normal;
            width: 100%
        }

        @media(max-width: 1024px) {
            .OtherProjects-scrollerMoreProject-DKh {
                height: auto
            }

            .OtherProjects-header-uof {
                left: 30px;
                top: 30px
            }

            .OtherProjects-scrollerProjectWrapper-u4l {
                margin-top: 101px;
                padding: 0 30px 30px
            }
        }

        @media(max-width: 603px) {
            .OtherProjects-scrollerMoreProject-DKh {
                height: auto
            }
        }

        .OtherProjects-editProjectBtn-b0Z .OtherProjects-editButtonLabel-oJx {
            padding: 3px 15px
        }

        .OtherProjects-editIcon-WJ4 {
            height: 12px;
            margin-left: -4px;
            margin-right: 4px;
            padding-top: 2px;
            width: 12px
        }

        .OtherProjects-creatorProBadge-kig {
            padding-left: 6px
        }

        .ProjectInfo-projectFooter-zf7 {
            background-color: #fafafa;
            border-radius: 0 0 3px 3px;
            box-sizing: border-box;
            display: inline-block;
            padding: 90px 100px;
            text-align: center;
            width: 100%
        }

        .ProjectInfo-projectFooter-zf7 .rf-button__container--follow.rf-button__container--follow-wide .rf-button--follow-wide {
            padding: 9px 18px
        }

        .ProjectInfo-sideBar-Nmz {
            display: inline-block;
            max-width: 385px;
            text-align: left
        }

        .ProjectInfo-fullWidthInfoBox-gM1 .ProjectInfo-sideBar-Nmz {
            display: block;
            max-width: none;
            width: 100%
        }

        .ProjectInfo-infoBlocks-jRx {
            background-color: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 3px;
            box-sizing: border-box;
            color: dimgray;
            display: inline-block;
            margin-bottom: 20px;
            padding: 30px;
            width: 100%
        }

        .ProjectInfo-profileInfo-T7a {
            font-size: 16px
        }

        .ProjectInfo-projectTags-c4w {
            padding-bottom: 23px
        }

        .ProjectInfo-projectName-JUj {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: #191919;
            font-size: 16px;
            font-weight: bold;
            line-height: 1.2;
            padding-bottom: 14px
        }

        .ProjectInfo-projectDescription-dNH {
            font-size: 14px;
            font-style: normal;
            font-weight: normal;
            line-height: inherit;
            margin-bottom: 22px;
            word-wrap: break-word
        }

        .ProjectInfo-projectStats-zi7 {
            display: flex;
            flex-flow: row nowrap;
            justify-content: flex-start
        }

        .ProjectInfo-projectStat-xLj {
            color: dimgray;
            display: flex;
            font-size: 14px;
            height: 17px;
            line-height: 17px;
            margin-right: 9px
        }

        .ProjectInfo-projectStat-xLj .ProjectInfo-icon-QID {
            fill: dimgray;
            margin-right: 2px
        }

        .ProjectInfo-projectPublished-Exm {
            color: #3c3c3c;
            font-size: 12px;
            margin-top: 25px
        }

        .ProjectInfo-moreToggle-knt {
            color: dimgray;
            display: inline-flex;
            font-size: 13px;
            font-weight: bold;
            margin: 7px 0;
            width: auto
        }

        .ProjectInfo-container-SBO {
            position: relative;
            z-index: 1
        }

        @media(min-width: 604px)and (max-width: 1400px) {
            .ProjectInfo-projectFooter-zf7 {
                padding: 34px 42px
            }

            .ProjectInfo-container-SBO {
                margin: 0 auto;
                max-width: 880px
            }

            .ProjectInfo-sideBar-Nmz {
                -moz-column-count: 2;
                column-count: 2;
                max-width: 100%
            }

            .ProjectInfo-infoBlocks-jRx {
                -moz-column-break-inside: avoid;
                break-inside: avoid
            }
        }

        @media(max-width: 603px) {
            .ProjectInfo-projectFooter-zf7 {
                padding: 16px 20px
            }

            .ProjectInfo-sideBar-Nmz {
                -moz-column-count: 1;
                column-count: 1;
                max-width: 100%
            }
        }

        .ProjectInfo-wideFollowButton-k6X {
            padding-top: 19px;
            width: 100%
        }

        .ProjectInfo-customContainerClass-uKf {
            width: 100%
        }

        .ProjectInfo-messageButton-hRw {
            margin-top: -6px
        }

        .ProjectInfo-messageButton-hRw .ProjectInfo-tooltipWidth-rfZ {
            min-width: 310px;
            width: 100%
        }

        .ProjectInfo-subscribeSidebar-afp {
            margin-top: 20px
        }

        .AvailabilityInfoTooltip-activator-nW3 {
            display: flex;
            max-width: 100%;
            white-space: nowrap
        }

        .AvailabilityInfoTooltip-borderTop-CzY {
            border-bottom: 1px solid transparent;
            border-top: 1px solid dimgray;
            margin-top: 12px;
            padding-top: 12px
        }

        .AvailabilityInfoTooltip-tooltipContainer-_Kq {
            border-radius: 8px;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            width: 100%
        }

        .AvailabilityInfoTooltip-tooltipContainer-_Kq.AvailabilityInfoTooltip-iconTooltipContainer-oi_ {
            padding-bottom: 0
        }

        .AvailabilityInfoTooltip-tooltipContainer-_Kq.AvailabilityInfoTooltip-iconTooltipContainer-oi_ .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ {
            color: #191919
        }

        .AvailabilityInfoTooltip-tooltipContainer-_Kq.AvailabilityInfoTooltip-iconTooltipContainer-oi_ .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-borderTop-CzY {
            border-top-color: #ececec
        }

        .AvailabilityInfoTooltip-tooltipContainer-_Kq.AvailabilityInfoTooltip-iconTooltipContainer-oi_ .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-icon-hr8 {
            fill: #191919
        }

        .AvailabilityInfoTooltip-tooltipContainer-_Kq.AvailabilityInfoTooltip-iconTooltipContainer-oi_ .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-listItemSubText-IfT {
            color: #707070
        }

        .AvailabilityInfoTooltip-tooltipContainer-_Kq.AvailabilityInfoTooltip-iconTooltipContainer-oi_ .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-uncheckedLabel-FEo {
            color: gray
        }

        .AvailabilityInfoTooltip-tooltipContainer-_Kq.AvailabilityInfoTooltip-iconTooltipContainer-oi_ .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-uncheckedLabel-FEo>.AvailabilityInfoTooltip-icon-hr8 {
            fill: gray
        }

        .AvailabilityInfoTooltip-uncheckedLabel-FEo {
            color: gray;
            margin-bottom: 5px
        }

        .AvailabilityInfoTooltip-uncheckedLabel-FEo>.AvailabilityInfoTooltip-icon-hr8 {
            fill: gray
        }

        .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ {
            align-items: flex-start;
            color: #fff;
            display: flex;
            flex-direction: column;
            font-size: 14px;
            font-weight: 600;
            max-width: 100%;
            padding: 10px 10px 8px;
            text-align: left
        }

        .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-tooltipWrapperListItem-AeZ {
            display: flex;
            flex-direction: row;
            width: 100%
        }

        .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-tooltipWrapperListItem-AeZ .AvailabilityInfoTooltip-listItemTextContainer-cqo {
            flex: 1
        }

        .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-tooltipWrapperListItem-AeZ .AvailabilityInfoTooltip-listItemText-xn6 {
            flex: 1 0 24px;
            line-height: 24px;
            padding-left: 10px
        }

        .AvailabilityInfoTooltip-tooltipTextWrapper-xCQ .AvailabilityInfoTooltip-tooltipWrapperListItem-AeZ .AvailabilityInfoTooltip-listItemSubText-IfT {
            font-size: 11px;
            font-weight: normal;
            padding-left: 10px
        }

        .AvailabilityInfoTooltip-editOption-pk6 {
            align-items: center;
            margin-top: 10px
        }

        .AvailabilityInfoTooltip-icon-hr8 {
            fill: #fff;
            margin-bottom: auto;
            vertical-align: middle;
            width: 22px
        }

        .AvailabilityInfoTooltip-cancel-ToP {
            fill: gray
        }

        .Image-root-d82 {
            position: relative
        }

        .Image-blockPointerEvents-RQ5 {
            pointer-events: none
        }

        .UserInfo-individualProfile-LPn {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            min-height: 40px;
            width: inherit
        }

        .UserInfo-creatorProBadge-HCD {
            flex-shrink: 0;
            line-height: 13px;
            padding-left: 6px
        }

        .UserInfo-nameContainer-YwX {
            align-items: center;
            display: flex
        }

        .UserInfo-individualProfile-LPn:not(:last-child) {
            margin-bottom: 15px
        }

        .UserInfo-userAvatar-sIR {
            align-self: center;
            float: left;
            margin-right: 10px
        }

        .UserInfo-userImage-al8 {
            border-radius: 50%;
            display: block;
            height: 40px;
            width: 40px
        }

        .UserInfo-userInfo-ZDt {
            display: inline-block;
            height: 100%;
            max-width: calc(100% - 165px + 20px);
            width: inherit
        }

        .UserInfo-userInfo-ZDt.UserInfo-userNameExtend-QVU {
            line-height: 15px;
            max-width: calc(100% - 50px)
        }

        .UserInfo-infoWithLink-ZXf {
            flex: 1;
            margin-right: 20px;
            min-width: 0
        }

        .UserInfo-userName-BoH {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: #191919;
            display: block;
            flex-shrink: 1;
            font-size: inherit;
            font-weight: 600;
            max-width: 100%;
            padding-bottom: 3px;
            text-align: left
        }

        .UserInfo-userName-BoH:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .UserInfo-userLocation-H36 {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: dimgray;
            display: block;
            font-size: 14px;
            line-height: 1.2;
            max-width: 100%;
            text-align: left;
            transition: color .2s
        }

        .UserInfo-userLocation-H36 .UserInfo-locationIcon-AJL {
            fill: #959595;
            margin-right: 2px;
            transition: fill .2s;
            width: 8px
        }

        .UserInfo-userLocation-H36 * {
            vertical-align: middle
        }

        .UserInfo-userLocation-H36:hover {
            color: #191919;
            text-decoration: none
        }

        .UserInfo-userLocation-H36:hover .UserInfo-locationIcon-AJL {
            fill: #191919
        }

        .UserInfo-userLocation-H36:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .UserInfo-userActions-Xuy {
            align-self: center;
            margin-left: auto
        }

        .UserInfo-header-jP0 {
            font-weight: bold;
            margin-bottom: 14px
        }

        .ProjectTags-projectTags-wWY:not(.ProjectTags-usePillShapedTags-O5E) {
            display: inline-block
        }

        .ProjectTags-projectTags-wWY.ProjectTags-usePillShapedTags-O5E {
            display: block
        }

        .ProjectTags-usePillShapedTags-O5E .ProjectTags-tag-MKN {
            border: 1px solid #e8e8e8;
            border-radius: 50px;
            display: inline-flex;
            font-size: 14px;
            font-weight: 600;
            margin: 0 8px 8px 0
        }

        .ProjectTags-usePillShapedTags-O5E .ProjectTags-tag-MKN .ProjectTags-tagLink-PxS {
            padding: 7px 20px
        }

        .ProjectTags-projectTags-wWY:not(.ProjectTags-usePillShapedTags-O5E) .ProjectTags-tag-MKN {
            border: 1px solid #ccc;
            border-radius: 3px;
            float: left;
            font-size: 10px;
            font-weight: bold;
            margin: 0 7px 7px 0;
            text-transform: uppercase
        }

        .ProjectTags-projectTags-wWY:not(.ProjectTags-usePillShapedTags-O5E) .ProjectTags-tag-MKN .ProjectTags-tagLink-PxS {
            padding: 6px 10px
        }

        .ProjectTags-tag-MKN {
            align-items: center;
            background: #fff;
            color: #191919;
            display: flex;
            max-width: 100%
        }

        .ProjectTags-tag-MKN:hover {
            background-color: #f0f0f0;
            text-decoration: none
        }

        .ProjectTags-tagLink-PxS {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            border-radius: 50px;
            color: #191919;
            display: block
        }

        .ProjectTags-tagLink-PxS:hover {
            background-color: #f0f0f0;
            text-decoration: none
        }

        .ProjectTags-tagLink-PxS:focus-visible {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .FocusedTooltip-activator-qut {
            cursor: pointer;
            display: inline-block;
            position: relative;
            z-index: 2
        }

        .FocusedTooltip-tooltipContainer-L3T {
            border-radius: 8px;
            display: inline-block;
            filter: drop-shadow(0 1px 2px rgba(0, 0, 0, 0.4));
            padding: 10px;
            position: absolute;
            width: 100%;
            z-index: 1
        }

        @media(max-width: 1024px) {
            .FocusedTooltip-tooltipContainer-L3T {
                display: none
            }
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-light-Z12 {
            background: #fff
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-dark-PUo {
            background: #191919;
            color: #fff
        }

        .FocusedTooltip-tooltipContainer-L3T ::after {
            border-style: solid;
            border-width: 5px;
            content: " ";
            position: absolute
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-right-y3e {
            left: 105%;
            top: 0
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-right-y3e ::after {
            margin-top: -5px;
            right: 100%;
            top: 50%
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-right-y3e.FocusedTooltip-light-Z12 ::after {
            border-color: transparent #fff transparent transparent
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-right-y3e.FocusedTooltip-dark-PUo ::after {
            border-color: transparent #191919 transparent transparent
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-left-Z1q {
            right: 105%;
            top: 0
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-left-Z1q ::after {
            left: 100%;
            margin-top: -5px;
            top: 50%
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-left-Z1q.FocusedTooltip-light-Z12 ::after {
            border-color: transparent transparent transparent #fff
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-left-Z1q.FocusedTooltip-dark-PUo ::after {
            border-color: transparent transparent transparent #191919
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-top-j9w {
            bottom: 100%;
            left: 50%;
            margin-left: -50%
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-top-j9w ::after {
            left: 50%;
            margin-left: -5px;
            top: 100%
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-top-j9w.FocusedTooltip-light-Z12 ::after {
            border-color: #fff transparent transparent transparent
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-top-j9w.FocusedTooltip-dark-PUo ::after {
            border-color: #191919 transparent transparent transparent
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-bottom-ou7 {
            left: 50%;
            margin-left: -50%;
            top: calc(100% + 7px)
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-bottom-ou7 ::after {
            bottom: 100%;
            left: 50%;
            margin-left: -5px
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-bottom-ou7.FocusedTooltip-light-Z12 ::after {
            border-color: transparent transparent #fff transparent
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-bottom-ou7.FocusedTooltip-dark-PUo ::after {
            border-color: transparent transparent #191919 transparent
        }

        .FocusedTooltip-tooltipContainer-L3T.FocusedTooltip-transitioning-_sM {
            pointer-events: none
        }

        .PillShapedInfoButton-overlay-C3h {
            align-items: center;
            background-color: rgba(0, 0, 0, .7);
            display: flex;
            justify-content: center;
            min-height: 47px;
            padding: 10px 30px 12px;
            position: relative;
            transition: background-color .15s linear
        }

        .PillShapedInfoButton-hasBackgroundColor-_4o .PillShapedInfoButton-background-_MN {
            mix-blend-mode: luminosity
        }

        .PillShapedInfoButton-hasBackgroundColor-_4o .PillShapedInfoButton-overlay-C3h {
            background-color: rgba(0, 0, 0, .7)
        }

        .PillShapedInfoButton-anchor-CiL,
        .PillShapedInfoButton-overlay-C3h,
        .PillShapedInfoButton-background-_MN {
            border-radius: 6px
        }

        .PillShapedInfoButton-background-_MN {
            bottom: 0;
            display: block;
            height: 100%;
            left: 0;
            -o-object-fit: cover;
            object-fit: cover;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%
        }

        .PillShapedInfoButton-anchor-CiL {
            background-color: #959595;
            color: #fff;
            display: block;
            position: relative;
            text-align: center
        }

        .PillShapedInfoButton-anchor-CiL:hover {
            text-decoration: none
        }

        .PillShapedInfoButton-anchor-CiL:hover .PillShapedInfoButton-overlay-C3h {
            background-color: rgba(0, 0, 0, .6)
        }

        .PillShapedInfoButton-anchor-CiL::before {
            border: 1px solid #0057ff;
            border-radius: 14px;
            bottom: -4px;
            content: "";
            left: -4px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            right: -4px;
            top: -4px;
            transform: scale(0.8);
            transition: opacity .15s ease, transform .15s ease;
            z-index: 0
        }

        .PillShapedInfoButton-anchor-CiL:focus-visible {
            outline: none
        }

        .PillShapedInfoButton-anchor-CiL:focus-visible::before {
            opacity: 1;
            transform: scale(1)
        }

        .ImageElement-root-kir {
            position: relative
        }

        .ImageElement-blockPointerEvents-Rkg {
            pointer-events: none
        }

        .ImageElement-placeholder-Cz6 {
            background-color: rgba(25, 25, 25, .03);
            height: 0;
            max-width: 100%;
            padding: 0;
            z-index: 1
        }

        .ImageElement-useAggressiveLazyLoad-WRO .ImageElement-image-SRv {
            height: auto;
            width: 100%
        }

        .ImageElement-lazyWrap-QTY {
            display: block;
            overflow: hidden
        }

        .ImageElement-lazyWrap-QTY .ImageElement-image-SRv {
            transition: filter .15s linear
        }

        .ImageElement-useAggressiveLazyLoad-WRO:not(.ImageElement-wasAggressivelyLoaded-PxT) .ImageElement-image-SRv {
            filter: blur(2px)
        }

        .ImageElement-image-SRv {
            display: block;
            left: 0;
            max-height: 100%;
            max-width: 100%;
            position: absolute;
            top: 0;
            z-index: 2
        }

        .ImageElement-loaded-icR .ImageElement-image-SRv {
            left: auto;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            top: auto;
            z-index: inherit
        }

        .ImageElement-safari164fix-gbd {
            aspect-ratio: auto;
            -o-object-fit: contain;
            object-fit: contain;
            width: 100%
        }

        .SignUpContent-callToAction-N8m,
        .SignUpContent-signUpTitle-fSQ,
        .SignUpContent-signUpMessage-S10 {
            margin-bottom: 20px;
            text-align: center;
            width: 100%
        }

        .SignUpContent-signUpTitle-fSQ {
            margin-bottom: 10px
        }

        .SignUpContent-callToAction-N8m {
            display: flex;
            flex-direction: row;
            justify-content: center
        }

        .SignUpContent-signUpTitle-fSQ {
            font-size: 27px;
            font-weight: 900;
            line-height: 1
        }

        .SignUpContent-signUpMessage-S10 {
            font-size: 20px;
            font-weight: 600;
            line-height: 1.15
        }

        .SignUpContent-signUpActions-nTp {
            color: #191919;
            text-decoration: underline
        }

        .SectionHeader-root-Qes {
            color: #707070;
            font-size: 11px;
            font-weight: bold;
            line-height: 1;
            text-transform: uppercase
        }

        .ProjectTools-section-k_L+.ProjectTools-section-k_L {
            margin-top: 30px
        }

        .ProjectTools-toolWithImage-nFq {
            display: inline-block;
            margin-right: 5px
        }

        .ProjectTools-sectionHeader-TFk {
            margin-bottom: 15px
        }

        .ProjectTools-toolImage-bSt {
            height: 31px;
            overflow: hidden;
            vertical-align: top;
            width: 31px
        }

        .ProjectTools-toolWithText-EsT {
            display: inline-block;
            margin-top: 5px
        }

        .ProjectTools-divider-gqr:first-child+.ProjectTools-toolWithText-EsT {
            margin-top: 0
        }

        .ProjectTools-toolWithText-EsT:not(:last-child)::after {
            content: ", ";
            font-weight: bold;
            margin-right: 2px
        }

        .ProjectTools-projectFieldLink-qL6,
        .ProjectTools-toolLink-zyj {
            color: #191919;
            font-size: 14px;
            font-weight: bold
        }

        .ProjectTools-creativeField-ZaI {
            display: block
        }

        .ProjectTools-pillShapedTool-uYx .ProjectTools-toolTooltipWrap-Fve {
            display: flex
        }

        .ProjectTools-creativeField-ZaI,
        .ProjectTools-pillShapedTool-uYx {
            margin-bottom: 8px
        }

        .ProjectTools-pillShapedTool-uYx+.ProjectTools-toolWithText-EsT {
            margin-top: 4px
        }

        .ProjectTools-toolWithImage-nFq+.ProjectTools-toolsWithText-bew {
            margin-top: 10px
        }

        .ProjectTools-pillShapedTool-uYx .ProjectTools-toolIcon-Sdh {
            height: 25px;
            margin-right: 5px;
            width: 25px
        }

        @media(max-width: 921px) {

            .ProjectTools-usePillShapedTools-TGg .ProjectTools-pillShapedTool-uYx,
            .ProjectTools-usePillShapedTools-TGg .ProjectTools-creativeField-ZaI {
                display: inline-block;
                margin-right: 8px
            }
        }

        .ProjectTools-alwaysUseInlineStyle-DTS .ProjectTools-pillShapedTool-uYx,
        .ProjectTools-alwaysUseInlineStyle-DTS .ProjectTools-creativeField-ZaI {
            display: inline-block;
            margin-right: 8px
        }

        .ProjectTools-fieldLabel-LpV,
        .ProjectTools-toolLabel-gjE {
            font-size: 15px;
            font-weight: 900;
            margin-bottom: auto;
            margin-left: 5px;
            margin-top: auto;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .ProjectTools-projectField-l9n {
            display: inline-block;
            margin-right: 4px
        }

        .ProjectTools-projectField-l9n:last-child .ProjectTools-fieldComma-Jp0 {
            display: none
        }

        .ProjectTools-adobeLogo-Z_D {
            height: 12px;
            width: 12px
        }

        .ProjectTools-buyNowButton-zg6,
        .ProjectTools-searchProjectsButton-gpd {
            display: block;
            min-width: 200px
        }

        .ProjectTools-buyNowButton-zg6 {
            margin-bottom: 10px
        }

        .ProjectTools-searchIcon-Byz {
            fill: #191919;
            height: 14px;
            margin-right: -2px;
            width: 14px
        }

        .Copyright-root-HQt {
            color: #707070
        }

        .Copyright-imageContainter-z7r {
            display: inline-block
        }

        .Copyright-copyrightIcon-sRr {
            height: 25px;
            opacity: .39;
            padding-right: 3px;
            width: 25px
        }

        .Copyright-darkBackgroundGrey-knH {
            filter: invert(1);
            opacity: .8
        }

        .Copyright-tooltipContent-XFM {
            padding: 5px 0;
            text-align: left;
            width: 200px
        }

        .Copyright-title-VRg {
            color: #191919;
            font-size: 11px;
            font-weight: bold;
            margin: 0 10px;
            text-transform: uppercase
        }

        .Copyright-text-VBt {
            color: dimgray;
            font-size: 13px;
            line-height: 16px;
            margin: 9px 10px 0;
            text-align: left
        }

        .Copyright-link-_3P {
            display: block;
            font-size: 12px;
            margin: 10px 10px 0;
            white-space: nowrap
        }

        .Copyright-link-_3P .beicons,
        .Copyright-link-_3P .beicons-pre::before {
            height: 0
        }

        .Copyright-label-bc5 {
            color: #3c3c3c;
            display: block;
            margin-top: 5px
        }

        .Copyright-projectSpamBlock-udl {
            float: right;
            margin-top: 5px
        }

        .Copyright-spamActions-oUN {
            color: inherit
        }

        .Copyright-tooltipContent-XFM .beicons-pre-promote::before {
            font-size: 12px;
            margin-left: 5px
        }

        .AvatarImage-avatarImage-PUL {
            aspect-ratio: 1;
            border-radius: inherit;
            display: block;
            width: 100%
        }

        .SignUpButtons-container-Uh3 {
            align-items: center;
            display: flex
        }

        .SignUpButtons-container-Uh3 .SignUpButtons-phone-yP2 {
            display: none
        }

        @media(max-width: 603px) {
            .SignUpButtons-container-Uh3 .SignUpButtons-phone-yP2 {
                display: block
            }
        }

        .SignUpButtons-largeCTAs-go5 {
            height: 40px
        }

        .SignUpButtons-desktop-bS2 {
            cursor: pointer
        }

        @media(max-width: 603px) {
            .SignUpButtons-desktop-bS2 {
                display: none
            }
        }

        .SignUpButtons-desktop-bS2.SignUpButtons-largeCTAs-go5 {
            font-size: 16px
        }

        .SignUpButtons-signup-O9S,
        .SignUpButtons-or-u_o,
        .SignUpButtons-fbIcon-zWz,
        .SignUpButtons-appleIcon-jke {
            margin-right: 10px
        }

        .SignUpButtons-signup-O9S {
            margin-right: 12px
        }

        .SignUpButtons-signin-oaC {
            color: dimgray;
            font-size: 14px;
            font-weight: bold
        }

        .SignUpButtons-or-u_o {
            color: #959595;
            font-weight: bold
        }

        .SignUpButtons-fbIcon-zWz.SignUpButtons-fbIcon-zWz,
        .SignUpButtons-googleIcon-fVg,
        .SignUpButtons-appleIcon-jke {
            transition-duration: .2s;
            transition-property: filter;
            width: 32px
        }

        .SignUpButtons-fbIcon-zWz.SignUpButtons-fbIcon-zWz.SignUpButtons-largeIcon-azq,
        .SignUpButtons-googleIcon-fVg.SignUpButtons-largeIcon-azq,
        .SignUpButtons-appleIcon-jke.SignUpButtons-largeIcon-azq {
            width: 40px
        }

        .SignUpButtons-fbIcon-zWz.SignUpButtons-fbIcon-zWz .SignUpButtons-largeCTAs-go5,
        .SignUpButtons-googleIcon-fVg .SignUpButtons-largeCTAs-go5,
        .SignUpButtons-appleIcon-jke .SignUpButtons-largeCTAs-go5 {
            height: 40px;
            width: 40px
        }

        .SignUpButtons-fbIcon-zWz.SignUpButtons-fbIcon-zWz:hover,
        .SignUpButtons-googleIcon-fVg:hover,
        .SignUpButtons-appleIcon-jke:hover {
            filter: brightness(90%)
        }

        .ReportButton-link-Ji8:focus-visible .ReportButton-reportWrapper-Buf {
            outline: 1px solid #0057ff;
            outline-offset: 3px
        }

        .ReportButton-reportWrapper-Buf {
            align-items: center;
            color: #3c3c3c;
            display: flex;
            flex-direction: row;
            justify-content: flex-start
        }

        .ReportButton-icon-zJL {
            fill: #707070;
            margin-right: 5px
        }

        .Facebook-circle-Hk3 {
            fill: #4861a3
        }

        .Facebook-icon-Qqf {
            fill: #fff
        }

        .MessageButton-interactionButton-O6g {
            flex: 1;
            width: 100%
        }

        .MessageButton-interactionButton-O6g .MessageButton-buttonLabel-j2x {
            align-items: initial;
            flex: auto;
            font-weight: bold;
            min-height: 38px;
            padding: 9px 18px
        }

        .MessageButton-interactionButton-O6g .rf-button__container {
            display: block
        }

        .MessageButton-interactionButton-O6g .rf-button__container .rf-button {
            line-height: 1.2;
            padding-bottom: 8px;
            padding-top: 8px
        }

        .MessageButton-icon-Gi8 {
            fill: #0057ff;
            width: 18px
        }

        .FadeDown-enterActive-eLw {
            animation: FadeDown-fadeDown-DmA .25s;
            animation-timing-function: cubic-bezier(0.19, 1, 0.22, 1)
        }

        .FadeDown-leaveActive-R4a {
            animation: FadeDown-fadeDown-DmA .25s reverse;
            animation-timing-function: cubic-bezier(0.78, 0, 0.81, 0)
        }

        @keyframes FadeDown-fadeDown-DmA {
            0% {
                opacity: 0;
                transform: translateY(-10px)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>
    <script type="application/json" id="global-config-json">
        {
            "CBSTR": "cb=264615658",
            "ASSETSURL": "https:\/\/a5.behance.net\/427bc08356755dde99f62f76e1e0ffdd7bcce70f\/"
        }
    </script>

    <script type="text/javascript" nonce="">
        ! function() {
            "use strict";

            function n(n) {
                return void 0 !== n
            }

            function t(n) {
                return "[object Event]" === String(n) ? "Event#target.src=" + (n.target && n.target.src) : n
            }

            function e(n) {
                return n.replace(/(access_?token)=[a-zA-Z0-9=+\/.\-_]+/gi, "$1=XXX")
            }

            function r(r, o, i, c, u) {
                var s = {};
                return r && (r = String("object" == typeof r ? t(r) : r), r = e(r)), o && (s.file = String(o).replace(/#.+$/, "")), n(i) && (s.line = Number(i)), n(c) && (s.column = Number(c)), u && u.stack && (s.stack = e(String(u.stack))), {
                    level: "ERROR",
                    channel: "js_errors",
                    message: r,
                    context: s
                }
            }

            function o(n) {
                for (var t = [], e = 0; e < n.length; e++) t[e] = "logs[]=" + encodeURIComponent(JSON.stringify(n[e]));
                return t.join("&")
            }

            function i(n) {
                var t = new XMLHttpRequest;
                t.open("POST", "/log"), t.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), t.send(o(n))
            }! function(n, t, e) {
                function r(n) {
                    i.push(n), c || (c = !0, setTimeout(function() {
                        e(i), c = !1, i = []
                    }, 0))
                }
                var o = {},
                    i = [],
                    c = !1,
                    u = n.onerror;
                n.onerror = function() {
                    var n = t.apply(null, arguments),
                        e = JSON.stringify(n);
                    o[e] || (o[e] = !0, r(n)), u && u.apply(this, arguments)
                }
            }(window, r, i)
        }();
        window.NREUM && window.NREUM.setErrorHandler((function() {
            return /(?:MS|\()(IE) ([\w\.]+)|(Trident.+rv[: ]([\w\.]{1,9})\b.+like Gecko)/.test(navigator.userAgent)
        }));
    </script>
</head>

<body class="logged-out en_US networki responsive be-network">
    <div id="app">
        <div class="App-app-AxT">
            <div class="Accessibility-accessibility-T1N"><!--[-->
                <div><!--[--><!----><!----><!----><!--[-->
                    <nav tabindex="0" aria-label="Site Wide" class="PrimaryNav-root-GKW PrimaryNav-useTransparencyForAllWidth-gRQ js-primary-navigation">
                        <div class="PrimaryNav-fixed-IXr">
                            <div id="18639dc0-8485-4b6c-bb55-87c7c2e86d54" class="PrimaryNav-hamburgerMenu-iBG" tabindex="-1">
                                <div class="PrimaryNav-loginOrCreate-MZx"><!--[--><button class="Btn-button-CqT Btn-base-L7P Btn-normal-If5 js-adobeid-signin adobeid-signin" href type="button" target="_self" role="button" aria-label="Log In" data-signin-from="updated_2020_navigation_login_hamburger">
                                        <div class="Btn-labelWrapper-_Re"><!---->
                                            <div class="Btn-label-QJi e2e-Btn-label"><!--[-->Log In<!--]--></div><!---->
                                        </div>
                                    </button><!--]--></div>
                                <div class="PrimaryNav-navWrapper-QBz">
                                    <ul class="PrimaryNav-coreNavigation-iAB"><!--[-->
                                        <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA" href="/galleries?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9">Discover <!----></span></a></li>
                                        <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA" href="/assets?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9">Assets <!----></span></a></li>
                                        <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA" href="/joblist?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9">Jobs <!----></span></a></li>
                                        <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA" href="/pro?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9">Behance <div class="PrimaryNav-coreNavigationCustomComponent-KLu">
                                                        <div class="CreatorProBadge-popover-BYU">
                                                            <div class="Popover-activator-M8N CreatorProBadge-activator-oU4"><!--[-->
                                                                <div class="CreatorProBadge-pill-lJL CreatorProBadge-disablePointerEvents-iIs"><!----> Pro</div><!--]-->
                                                            </div><!---->
                                                        </div>
                                                    </div></span></a></li>
                                        <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA" href="/hire?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9">Hire Freelancers <!----></span></a></li><!--]-->
                                    </ul><!---->
                                    <ul class="PrimaryNav-appLinks-vve">
                                        <li class="PrimaryNav-appLinkItem-f6g PrimaryNav-ios-d_K"><a target="_blank" href="https://itunes.apple.com/us/app/behance/id489667151" class="PrimaryNav-appLink-r57" rel="noopener noreferrer">Download on the App Store</a></li>
                                        <li class="PrimaryNav-appLinkItem-f6g PrimaryNav-android-jXm"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.behance.behance" class="PrimaryNav-appLink-r57" rel="noopener noreferrer">Get it on Google Play</a></li>
                                    </ul>
                                    <div class="PrimaryNav-languageSelector-ppl"><select class="PrimaryNav-languageSelectEl-aQj" aria-label="View Behance in your language of choice"><!--[-->
                                            <option value="en_US" selected>English</option>
                                            <option value="cs_CZ">Čeština</option>
                                            <option value="da_DK">Dansk</option>
                                            <option value="de_DE">Deutsch</option>
                                            <option value="es_ES">Español</option>
                                            <option value="fr_FR">Français</option>
                                            <option value="it_IT">Italiano</option>
                                            <option value="nl_NL">Nederlands</option>
                                            <option value="nb_NO">Norsk</option>
                                            <option value="pl_PL">Polski</option>
                                            <option value="pt_BR">Português</option>
                                            <option value="ru_RU">Pусский</option>
                                            <option value="fi_FI">Suomi</option>
                                            <option value="sv_SE">Svenska</option>
                                            <option value="tr_TR">Türkçe</option>
                                            <option value="ja_JP">日本語</option>
                                            <option value="ko_KR">한국어</option>
                                            <option value="zh_CN">中文(简体)</option>
                                            <option value="zh_TW">中文(繁體)</option><!--]-->
                                        </select><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 125.8 291.6" class="PrimaryNav-triangle-b8q">
                                            <path d="M88.6 145.8l-70-81.1v162.2z"></path>
                                        </svg></div>
                                    <div class="PrimaryNav-hamburgerMenuLinkContainer-iPa"><a class="PrimaryNav-hamburgerMenuLink-o8P" href="/about">About</a></div>
                                    <div class="PrimaryNav-hamburgerMenuLinkContainer-iPa"><a class="PrimaryNav-hamburgerMenuLink-o8P" href="/blog">Blog</a></div><!--[-->
                                    <div class="PrimaryNav-hamburgerMenuLinkContainer-iPa"><a class="PrimaryNav-hamburgerMenuLink-o8P" href="http://www.adobe.com/legal/terms.html" target="_blank">TOU</a></div>
                                    <div class="PrimaryNav-hamburgerMenuLinkContainer-iPa"><a class="PrimaryNav-hamburgerMenuLink-o8P" href="http://www.adobe.com/privacy.html" target="_blank">Privacy</a></div>
                                    <div class="PrimaryNav-hamburgerMenuLinkContainer-iPa"><a class="PrimaryNav-hamburgerMenuLink-o8P" href="/misc/community" target="_blank">Community</a></div>
                                    <div class="PrimaryNav-hamburgerMenuLinkContainer-iPa"><a class="PrimaryNav-hamburgerMenuLink-o8P" href="https://help.behance.net/" target="_blank">Help</a></div>
                                    <div class="PrimaryNav-hamburgerMenuLinkContainer-iPa"><a class="PrimaryNav-hamburgerMenuLink-o8P" href="https://www.adobe.com/privacy/us-rights.html" target="_blank">Do not sell or share my personal information</a></div><!--]-->
                                    <div class="PrimaryNav-signUp-QZM"><button class="Btn-button-CqT Btn-primary-wt8 Btn-normal-If5 js-adobeid-signup" type="button" target="_self" role="button" data-signup-from="updated_2020_navigation_signup">
                                            <div class="Btn-labelWrapper-_Re"><!---->
                                                <div class="Btn-label-QJi e2e-Btn-label"><!--[-->Sign Up<!--]--></div><!---->
                                            </div>
                                        </button></div>
                                </div>
                            </div>
                            <div class="PrimaryNav-strip-Xyi js-nav-primary e2e-PrimaryNav" style="">
                                <div class="PrimaryNav-transparentStripBackground-U3f"></div><a href="javascript:void(0)" class="PrimaryNav-skipContent-y_5">Skip to Main Content</a><a href="javascript:void(0)" class="PrimaryNav-skipFooter-TAI">Skip to Footer</a>
                                <div class="PrimaryNav-hamburgerMenuButtonWrapper-Cz7"><button aria-label="Mobile Primary Navigation Menu" aria-expanded="false" aria-controls="18639dc0-8485-4b6c-bb55-87c7c2e86d54" class="PrimaryNav-hamburgerButton-AQr">
                                        <div class="PrimaryNav-hamburger-rSm">
                                            <div class="PrimaryNav-hamburgerLine-jwi"></div>
                                            <div class="PrimaryNav-hamburgerLine-jwi"></div>
                                            <div class="PrimaryNav-hamburgerLine-jwi"></div>
                                        </div>
                                    </button></div>
                                <ul class="PrimaryNav-coreNavigation-iAB">
                                    <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-home-PBH"><a class="PrimaryNav-coreNavigationLink-GpA" href="/">
                                            <div class="PrimaryNav-logoWrap-gf0"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 152.5 28.2" aria-labelledby="IconBase-title-f6b2cbdb-5156-4e41-ad8e-fcf7334ba6b1 IconBase-description-f6b2cbdb-5156-4e41-ad8e-fcf7334ba6b1" role="graphics-symbol img" width="100%" height="100%" class="PrimaryNav-behanceLogo-jbj PrimaryNav-full-qXI" aria-hidden="true">
                                                    <title id="IconBase-title-f6b2cbdb-5156-4e41-ad8e-fcf7334ba6b1">Behance</title>
                                                    <desc id="IconBase-description-f6b2cbdb-5156-4e41-ad8e-fcf7334ba6b1"></desc>
                                                    <g><!--[-->
                                                        <path d="M13.1 0c1.3 0 2.5.1 3.6.4 1.1.2 2 .6 2.8 1.1.8.5 1.4 1.2 1.8 2.1.4.9.6 2 .6 3.2 0 1.4-.3 2.6-1 3.5-.6.9-1.6 1.7-2.8 2.3 1.7.5 3 1.4 3.8 2.6.8 1.2 1.3 2.7 1.3 4.4 0 1.4-.3 2.6-.8 3.6s-1.3 1.9-2.2 2.5c-.9.6-2 1.1-3.2 1.4-1.2.3-2.4.5-3.6.5H0V0h13.1zm-.8 11.2c1.1 0 2-.3 2.7-.8.7-.5 1-1.4 1-2.5 0-.6-.1-1.2-.3-1.6-.2-.4-.5-.7-.9-1-.4-.2-.8-.4-1.3-.5-.5-.1-1-.1-1.6-.1H6.1v6.5h6.2zm.3 11.8c.6 0 1.2-.1 1.7-.2s1-.3 1.4-.6c.4-.3.7-.6 1-1.1.2-.5.4-1.1.4-1.8 0-1.4-.4-2.4-1.2-3.1-.8-.6-1.9-.9-3.2-.9H6.1V23h6.5zm19.3-.1c.8.8 2 1.2 3.6 1.2 1.1 0 2.1-.3 2.9-.8.8-.6 1.3-1.2 1.5-1.8h4.9c-.8 2.4-2 4.1-3.6 5.2-1.6 1-3.5 1.6-5.8 1.6-1.6 0-3-.3-4.3-.8-1.3-.5-2.3-1.2-3.2-2.2-.9-.9-1.6-2-2-3.3-.5-1.3-.7-2.7-.7-4.3 0-1.5.2-2.9.7-4.2.5-1.3 1.2-2.4 2.1-3.4.9-.9 2-1.7 3.2-2.2 1.3-.5 2.6-.8 4.2-.8 1.7 0 3.2.3 4.5 1 1.3.7 2.3 1.5 3.1 2.7.8 1.1 1.4 2.4 1.8 3.8.2 1.4.3 2.8.2 4.4H30.5c0 1.6.6 3.1 1.4 3.9zm6.3-10.5c-.7-.7-1.8-1.1-3.1-1.1-.9 0-1.6.2-2.2.5-.6.3-1 .7-1.4 1.1-.4.4-.6.9-.7 1.4-.1.5-.2.9-.2 1.3h9c-.2-1.5-.7-2.5-1.4-3.2zM52.8 0v10.4h.1c.7-1.2 1.6-2 2.7-2.5s2.1-.8 3.2-.8c1.5 0 2.7.2 3.6.6.9.4 1.7 1 2.2 1.7.5.7.9 1.6 1.1 2.6.2 1 .3 2.1.3 3.4v12.3h-5.5V16.4c0-1.7-.3-2.9-.8-3.7-.5-.8-1.4-1.2-2.7-1.2-1.5 0-2.6.5-3.2 1.3-.7.9-1 2.4-1 4.4v10.5h-5.5V0h5.5zM70 10.6c.6-.9 1.3-1.5 2.2-2.1.9-.5 1.9-.9 3-1.1 1.1-.2 2.2-.3 3.3-.3 1 0 2 .1 3.1.2 1 .1 2 .4 2.8.8.9.4 1.5 1 2.1 1.7.5.7.8 1.7.8 2.9v10.5c0 .9.1 1.8.2 2.6s.4 1.5.7 1.9h-5.6c-.2-.2-.3-.6-.4-.9-.1-.3-.1-.7-.1-1-.9.9-1.9 1.5-3.1 1.9-1.2.4-2.4.5-3.6.5-1 0-1.8-.1-2.7-.4-.8-.2-1.5-.6-2.2-1.1-.6-.5-1.1-1.1-1.5-1.9-.3-.8-.5-1.6-.5-2.7s.2-2.1.6-2.8c.4-.7.9-1.3 1.5-1.8.6-.4 1.4-.8 2.2-1 .8-.2 1.6-.4 2.5-.5l2.4-.3c.8-.1 1.5-.2 2.1-.3.6-.2 1.1-.4 1.5-.7.4-.3.5-.7.5-1.3 0-.6-.1-1.1-.3-1.4-.2-.3-.5-.6-.8-.8-.3-.2-.7-.3-1.1-.4-.4-.1-.9-.1-1.4-.1-1.1 0-1.9.2-2.5.7-.6.5-1 1.3-1.1 2.3h-5.5c0-1.2.4-2.3.9-3.1zm10.9 7.8c-.3.1-.7.2-1.1.3-.4.1-.8.1-1.3.2-.4.1-.9.1-1.3.2l-1.2.3c-.4.1-.8.3-1 .5-.3.2-.5.5-.7.8-.3.4-.3.8-.3 1.3s.1.9.3 1.2c.2.3.4.6.7.8.3.2.7.3 1.1.4.4.1.8.1 1.3.1 1.1 0 1.9-.2 2.5-.5.6-.4 1-.8 1.3-1.3.3-.5.5-1 .5-1.5.1-.5.1-.9.1-1.2v-2.1c-.3.2-.6.4-.9.5zM95.6 7.6v2.8h.1c.7-1.2 1.6-2 2.7-2.5s2.3-.8 3.4-.8c1.5 0 2.7.2 3.6.6 1 .4 1.7 1 2.2 1.7.5.7.9 1.6 1.2 2.6.2 1 .3 2.1.3 3.4v12.3h-5.5V16.4c0-1.7-.3-2.9-.8-3.7-.5-.8-1.4-1.3-2.8-1.3-1.5 0-2.6.6-3.3 1.5-.7.9-1 2.4-1 4.4v10.5h-5.5V7.6h5.4zm25.8 3.6c-.9 0-1.6.2-2.2.6-.6.4-1.1.9-1.5 1.6-.4.6-.6 1.3-.8 2.1-.2.8-.2 1.5-.2 2.3 0 .7.1 1.5.2 2.2.2.8.4 1.4.8 2 .4.6.8 1.1 1.4 1.5.6.4 1.3.6 2.2.6 1.3 0 2.3-.4 3.1-1.1.7-.7 1.2-1.7 1.3-3h5.3c-.4 2.7-1.4 4.7-3.1 6.1-1.7 1.4-3.9 2.1-6.6 2.1-1.5 0-2.9-.3-4.1-.8-1.3-.5-2.3-1.2-3.2-2.1-.9-.9-1.6-2-2.1-3.2-.5-1.3-.7-2.6-.7-4.1 0-1.6.2-3 .7-4.3.5-1.3 1.1-2.5 2-3.5.9-1 2-1.7 3.2-2.3 1.3-.5 2.7-.8 4.3-.8 1.2 0 2.3.2 3.4.5s2.1.8 2.9 1.4c.9.6 1.6 1.4 2.1 2.4.5.9.8 2.1.9 3.4h-5.4c-.2-2.4-1.5-3.6-3.9-3.6zm-92-9.3h11.2v2.7H29.4zm109.9 21c.8.8 2.1 1.2 3.6 1.2 1.1 0 2.1-.3 2.9-.8.8-.6 1.3-1.2 1.5-1.8h4.8c-.8 2.4-2 4.1-3.6 5.2-1.6 1-3.5 1.6-5.8 1.6-1.6 0-3-.3-4.3-.8-1.3-.5-2.3-1.2-3.2-2.2-.9-.9-1.6-2-2-3.3-.5-1.3-.7-2.7-.7-4.3 0-1.5.2-2.9.7-4.2.5-1.3 1.2-2.4 2.1-3.4.9-.9 2-1.7 3.2-2.2 1.3-.5 2.7-.8 4.2-.8 1.7 0 3.2.3 4.4 1 1.3.7 2.3 1.5 3.1 2.7.8 1.1 1.4 2.4 1.8 3.8.4 1.4.5 2.9.4 4.5h-14.5c0 1.5.6 3 1.4 3.8zm6.4-10.5c-.7-.7-1.8-1.1-3.1-1.1-.9 0-1.6.2-2.2.5-.6.3-1.1.7-1.4 1.1-.3.4-.6.9-.7 1.4-.1.5-.2.9-.2 1.3h9c-.3-1.5-.8-2.5-1.4-3.2z"></path><!--]-->
                                                    </g>
                                                </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24.247 15.985" aria-labelledby="IconBase-title-fbd33127-6f99-403b-94e4-e0dcaf44d471 IconBase-description-fbd33127-6f99-403b-94e4-e0dcaf44d471" role="graphics-symbol img" width="100%" height="100%" class="PrimaryNav-behanceLogo-jbj PrimaryNav-truncated-C4c" title="Behance" aria-hidden="true">
                                                    <title id="IconBase-title-fbd33127-6f99-403b-94e4-e0dcaf44d471">Behance</title>
                                                    <desc id="IconBase-description-fbd33127-6f99-403b-94e4-e0dcaf44d471"></desc>
                                                    <g><!--[-->
                                                        <g transform="translate(-55 -103)">
                                                            <path d="M7.017,0A8.12,8.12,0,0,1,8.965.2,4.348,4.348,0,0,1,10.47.844a2.97,2.97,0,0,1,.967,1.194,4.51,4.51,0,0,1,.345,1.849,3.548,3.548,0,0,1-.511,1.98,3.76,3.76,0,0,1-1.519,1.3A3.627,3.627,0,0,1,11.8,8.619a4.516,4.516,0,0,1,.677,2.519,4.652,4.652,0,0,1-.428,2.053,4,4,0,0,1-1.174,1.427,5.18,5.18,0,0,1-1.7.815,7.238,7.238,0,0,1-1.948.262H0V0ZM6.6,6.348a2.275,2.275,0,0,0,1.437-.437,1.709,1.709,0,0,0,.566-1.427,1.928,1.928,0,0,0-.18-.9,1.306,1.306,0,0,0-.5-.539,1.875,1.875,0,0,0-.718-.277,4.038,4.038,0,0,0-.843-.073H3.274V6.362H6.6Zm.18,6.682a3.847,3.847,0,0,0,.925-.1,2.22,2.22,0,0,0,.774-.335,1.663,1.663,0,0,0,.539-.626,2.218,2.218,0,0,0,.193-1.019,2.1,2.1,0,0,0-.649-1.732,2.639,2.639,0,0,0-1.713-.51H3.274V13.03Z" transform="translate(55 103)"></path>
                                                            <path d="M101,36.468a2.585,2.585,0,0,0,1.92.684,2.528,2.528,0,0,0,1.547-.48,1.978,1.978,0,0,0,.787-1h2.611a5.142,5.142,0,0,1-1.92,2.926,5.339,5.339,0,0,1-3.122.888,5.9,5.9,0,0,1-2.307-.437,4.927,4.927,0,0,1-1.74-1.223,5.705,5.705,0,0,1-1.091-1.893,7.123,7.123,0,0,1-.387-2.417,6.989,6.989,0,0,1,.4-2.373,5.354,5.354,0,0,1,5.139-3.64,4.921,4.921,0,0,1,2.4.568,5.038,5.038,0,0,1,1.685,1.5,6.262,6.262,0,0,1,.953,2.155,8.491,8.491,0,0,1,.207,2.533h-7.777A3.094,3.094,0,0,0,101,36.468Zm3.412-5.969a2.154,2.154,0,0,0-1.671-.626,2.36,2.36,0,0,0-1.174.262,2.514,2.514,0,0,0-.746.626,2.409,2.409,0,0,0-.4.8,3.316,3.316,0,0,0-.138.742H105.1A3.267,3.267,0,0,0,104.414,30.5Z" transform="translate(-28.86 79.504)"></path>
                                                            <rect width="6.036" height="1.543" transform="translate(70.802 104.048)"></rect>
                                                        </g><!--]-->
                                                    </g>
                                                </svg></div><span class="PrimaryNav-screenReaderOnly-Yh2">Navigate to behance.net</span>
                                        </a></li><!--[-->
                                    <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv">
                                        <div class="PrimaryNav-coreNavigationItemNestedLinkContainer-Tiz PrimaryNav-coreNavigationLink-GpA">
                                            <div aria-haspopup="true" class="PrimaryNav-coreNavigationNestedLinks-Sy6">
                                                <div aria-describedby="74ede117-63ff-4ac6-a290-4b03a6bb8b45" class="Popover-activator-M8N PrimaryNav-coreNavigationNestedLinksActivator-AMC"><!--[--><a class="PrimaryNav-coreNavigationLabel-eg9 PrimaryNav-coreNavigationLabelDesktop-wIZ" href="/search/projects">Explore <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 4.687 7.875" class="PrimaryNav-caret-UUZ">
                                                            <path d="M635.621,375.374a0.7,0.7,0,0,0-.147.017,1.31,1.31,0,0,0-.14.041,0.625,0.625,0,0,0-.129.065,0.7,0.7,0,0,0-.123.1l-3.176,3.176a0.932,0.932,0,0,0-.164.252,0.7,0.7,0,0,0-.059.281,0.737,0.737,0,0,0,.059.287,0.767,0.767,0,0,0,.164.247l3.176,3.175a0.734,0.734,0,0,0,.252.17,0.763,0.763,0,0,0,.281.053,0.819,0.819,0,0,0,.287-0.053,0.617,0.617,0,0,0,.246-0.17,0.752,0.752,0,0,0,.164-0.246,0.7,0.7,0,0,0,0-.562,0.752,0.752,0,0,0-.164-0.246l-2.648-2.649,2.648-2.66a0.752,0.752,0,0,0,.164-0.246,0.7,0.7,0,0,0,0-.563,0.774,0.774,0,0,0-.164-0.246,0.855,0.855,0,0,0-.117-0.1,0.488,0.488,0,0,0-.129-0.065c-0.047-.015-0.094-0.029-0.141-0.041a0.609,0.609,0,0,0-.14-0.017h0Z" transform="translate(-631.688 -375.375)"></path>
                                                        </svg></a><!--]--></div><!---->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA e2e-Nav-assets" href="/assets?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9 PrimaryNav-coreNavigationLabelDesktop-wIZ">Assets <!----></span></a></li>
                                    <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA e2e-Nav-jobs" href="/joblist?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9 PrimaryNav-coreNavigationLabelDesktop-wIZ">Jobs <!----></span></a></li>
                                    <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA e2e-Nav-pro" href="/pro?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9 PrimaryNav-coreNavigationLabelDesktop-wIZ">Behance <div class="PrimaryNav-coreNavigationCustomComponent-KLu">
                                                    <div class="CreatorProBadge-popover-BYU">
                                                        <div class="Popover-activator-M8N CreatorProBadge-activator-oU4"><!--[-->
                                                            <div class="CreatorProBadge-pill-lJL CreatorProBadge-disablePointerEvents-iIs"><!----> Pro</div><!--]-->
                                                        </div><!---->
                                                    </div>
                                                </div></span></a></li>
                                    <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv">
                                        <div class="PrimaryNav-coreNavigationDivider-_Y7"></div>
                                    </li>
                                    <li class="PrimaryNav-coreNavigationItem-N4p PrimaryNav-text-zNv"><a class="PrimaryNav-coreNavigationLink-GpA e2e-Nav-hire" href="/hire?tracking_source=nav20"><span class="PrimaryNav-coreNavigationLabel-eg9 PrimaryNav-coreNavigationLabelDesktop-wIZ">Hire Freelancers <!----></span></a></li><!--]-->
                                </ul>
                                <div class="PrimaryNav-siteSearch-yuO">
                                    <div class="SearchTypeahead-searchContainer-Owv SearchTypeahead-isTypeaheadEnabled-xOv" tabindex="-1">
                                        <div class="SearchTypeahead-searchInputWrap-_8H">
                                            <div class="SearchTypeahead-searchIcon-SB6"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12 12" aria-labelledby="IconBase-title-155937c8-e4cb-4b86-b363-89576fc71046 IconBase-description-155937c8-e4cb-4b86-b363-89576fc71046" role="graphics-symbol img" width="100%" height="100%" class="SearchTypeahead-icon-FI6" aria-hidden="true">
                                                    <title id="IconBase-title-155937c8-e4cb-4b86-b363-89576fc71046">search</title>
                                                    <desc id="IconBase-description-155937c8-e4cb-4b86-b363-89576fc71046">magnifying glass</desc>
                                                    <g><!--[-->
                                                        <path d="M11.407,10.421,8.818,7.832a4.276,4.276,0,1,0-.985.985l2.589,2.589a.7.7,0,0,0,.985-.985ZM2.355,5.352a3,3,0,1,1,3,3,3,3,0,0,1-3-3Z"></path><!--]-->
                                                    </g>
                                                </svg></div>
                                            <form class="SearchTypeahead-searchForm-Qsy" action="/search/projects"><label for="search" class=""><!----><input type="search" name="search" autocomplete="off" autocapitalize="off" class="SearchTypeahead-searchInput-BMV e2e-SearchInput-input" placeholder="Search…" tabindex="0" aria-label="Search Behance" aria-controls="32dc6a9c-2e6d-48d7-8f97-ea24de635298" aria-expanded="false" role="combobox" maxlength="100"></label><input type="hidden" name="tracking_source" value="typeahead_nav_direct"><!----><!----></form>
                                            <div class="SearchTypeahead-suggestions-r5x" id="32dc6a9c-2e6d-48d7-8f97-ea24de635298" aria-busy="false">
                                                <div class="SearchTypeahead-suggestionsInner-XR4" role="region" aria-live="polite"><!---->
                                                    <ul class=""><!----></ul>
                                                    <div class="SearchTypeahead-contentTypeShortcutWrapper-uBi"><!--[--><span class="SearchResultTypeHeading-heading-wSt SearchContentTypeSelector-headingDefault-z9K"><!--[-->Sort &amp; filter all:<!--]--></span>
                                                        <ul class="SearchContentTypeSelector-wrapper-_Lw SearchContentTypeSelector-wrapperNav-Pr7 SearchContentTypeSelector-wrapperSearchWithAssets-jxn"><!--[-->
                                                            <li><a class="Btn-button-CqT Btn-base-L7P Btn-normal-If5 SearchContentTypeButton-btn-fXK" href="/search/projects?tracking_source=typeahead_nav_suggestion_filter" type="button" target="_self" role="link" aria-label="View the most recommended projects across Behance from both our users and curators." tabindex="-1">
                                                                    <div class="Btn-labelWrapper-_Re">
                                                                        <div class="Btn-icon-BDP Btn-leading-gb0 SearchContentTypeButton-btnIcon-YBA"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" aria-hidden="true">
                                                                                <defs></defs>
                                                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25">
                                                                                    <path d="M18.858 12.392L12.5 18.75l-3.125.625L10 16.25l6.358-6.358a1.762 1.762 0 012.493 0l.007.007a1.762 1.762 0 010 2.493z"></path>
                                                                                    <path d="M6.875 16.875h-5a1.25 1.25 0 01-1.25-1.25V1.875a1.25 1.25 0 011.25-1.25h8.857a1.25 1.25 0 01.883.366l2.394 2.394a1.25 1.25 0 01.366.883v2.607"></path>
                                                                                    <path d="M4.375 4.687A.312.312 0 114.062 5a.312.312 0 01.312-.312"></path>
                                                                                    <path d="M10.833 9.2L9.375 6.875a.624.624 0 00-1.032-.012L6.677 9.239 5.65 8.417a.625.625 0 00-.911.141l-1.614 3.317h5"></path>
                                                                                </g>
                                                                            </svg><!--]--></div>
                                                                        <div class="Btn-label-QJi SearchContentTypeButton-btnLabel-quG e2e-Btn-label"><!--[--> Projects <!--]--></div>
                                                                        <div class="Btn-icon-BDP Btn-trailing-Lem"><!--[--><svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.42" viewbox="0 0 8 13.42" class="SearchContentTypeButton-btnArrow-lFf" aria-hidden="true">
                                                                                <path d="M1.28,0a1.07,1.07,0,0,1,.25,0L1.77.1A.91.91,0,0,1,2,.21,1.2,1.2,0,0,1,2.2.38L7.62,5.8a1.52,1.52,0,0,1,.28.43,1.15,1.15,0,0,1,.1.48,1.16,1.16,0,0,1-.1.49,1.34,1.34,0,0,1-.28.42L2.2,13a1.42,1.42,0,0,1-.43.29,1.32,1.32,0,0,1-.48.09,1.37,1.37,0,0,1-.49-.09A1.1,1.1,0,0,1,.38,13a1.34,1.34,0,0,1-.28-.42,1.23,1.23,0,0,1,0-1,1.34,1.34,0,0,1,.28-.42L4.9,6.72.38,2.18A1.34,1.34,0,0,1,.1,1.76a1.23,1.23,0,0,1,0-1A1.34,1.34,0,0,1,.38.38L.58.21A.65.65,0,0,1,.8.1L1,0a1,1,0,0,1,.24,0Z"></path>
                                                                            </svg><!--]--></div>
                                                                    </div>
                                                                </a></li>
                                                            <li><a class="Btn-button-CqT Btn-base-L7P Btn-normal-If5 SearchContentTypeButton-btn-fXK" href="/search/images?tracking_source=typeahead_nav_suggestion_filter" type="button" target="_self" role="link" aria-label="Search the latest images from the best projects on Behance, all in one place." tabindex="-1">
                                                                    <div class="Btn-labelWrapper-_Re">
                                                                        <div class="Btn-icon-BDP Btn-leading-gb0 SearchContentTypeButton-btnIcon-YBA"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 25 25" aria-hidden="true">
                                                                                <g transform="translate(0, 2)">
                                                                                    <path d="M7.37 9.22c-.73 0-1.42-.28-1.93-.8a2.7 2.7 0 0 1-.8-1.93c0-1.51 1.23-2.74 2.73-2.74s2.73 1.23 2.73 2.73c0 .73-.28 1.42-.8 1.93s-1.2.8-1.93.8ZM5.42 6.49h.78c0 .31.12.61.34.83a1.171 1.171 0 0 0 2-.83c0-.65-.53-1.17-1.17-1.17S6.2 5.85 6.2 6.49h-.78Z"></path>
                                                                                    <path d="M6.98 16.1c-.15 0-.3-.04-.43-.13a.777.777 0 0 1-.22-1.08l2.99-4.48s.08-.11.09-.13c.27-.34.66-.55 1.1-.6.44-.05.87.08 1.22.35l.8.64 1.86-2.66a1.669 1.669 0 0 1 1.69-.68c.44.09.81.34 1.06.71l4.55 6.83c.24.36.14.84-.22 1.08-.36.24-.84.14-1.08-.22L15.84 8.9l-.13-.03-2.36 3.37c-.12.18-.32.3-.53.33a.81.81 0 0 1-.6-.16l-1.45-1.17s-.14.02-.14.03l-2.98 4.48c-.15.23-.4.35-.65.35Z"></path>
                                                                                    <path d="M22.66 20.27H2.34C1.05 20.27 0 19.21 0 17.92V2.34C0 1.05 1.05 0 2.34 0h17.31c.63 0 1.24.26 1.68.71l3 3.08c.43.44.67 1.02.67 1.63v12.5c0 1.29-1.05 2.34-2.34 2.34ZM2.34 1.56c-.43 0-.78.35-.78.78v15.58c0 .43.35.78.78.78h20.31c.43 0 .78-.35.78-.78V5.42c0-.2-.08-.4-.22-.54l-3-3.08a.787.787 0 0 0-.56-.23H2.34Z"></path>
                                                                                </g>
                                                                            </svg><!--]--></div>
                                                                        <div class="Btn-label-QJi SearchContentTypeButton-btnLabel-quG e2e-Btn-label"><!--[--> Images <!--]--></div>
                                                                        <div class="Btn-icon-BDP Btn-trailing-Lem"><!--[--><svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.42" viewbox="0 0 8 13.42" class="SearchContentTypeButton-btnArrow-lFf" aria-hidden="true">
                                                                                <path d="M1.28,0a1.07,1.07,0,0,1,.25,0L1.77.1A.91.91,0,0,1,2,.21,1.2,1.2,0,0,1,2.2.38L7.62,5.8a1.52,1.52,0,0,1,.28.43,1.15,1.15,0,0,1,.1.48,1.16,1.16,0,0,1-.1.49,1.34,1.34,0,0,1-.28.42L2.2,13a1.42,1.42,0,0,1-.43.29,1.32,1.32,0,0,1-.48.09,1.37,1.37,0,0,1-.49-.09A1.1,1.1,0,0,1,.38,13a1.34,1.34,0,0,1-.28-.42,1.23,1.23,0,0,1,0-1,1.34,1.34,0,0,1,.28-.42L4.9,6.72.38,2.18A1.34,1.34,0,0,1,.1,1.76a1.23,1.23,0,0,1,0-1A1.34,1.34,0,0,1,.38.38L.58.21A.65.65,0,0,1,.8.1L1,0a1,1,0,0,1,.24,0Z"></path>
                                                                            </svg><!--]--></div>
                                                                    </div>
                                                                </a></li>
                                                            <li><a class="Btn-button-CqT Btn-base-L7P Btn-normal-If5 SearchContentTypeButton-btn-fXK" href="/search/users?tracking_source=typeahead_nav_suggestion_filter" type="button" target="_self" role="link" aria-label="Discover the creatives behind the top work on Behance." tabindex="-1">
                                                                    <div class="Btn-labelWrapper-_Re">
                                                                        <div class="Btn-icon-BDP Btn-leading-gb0 SearchContentTypeButton-btnIcon-YBA"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 25 18.76" aria-hidden="true">
                                                                                <path d="M7.82 10.16c2.8 0 5.08-2.28 5.08-5.08S10.62 0 7.82 0 2.73 2.28 2.73 5.08s2.28 5.08 5.07 5.08c-4.3 0-7.8 3.51-7.8 7.82a.781.781 0 0 0 1.56 0c0-3.45 2.8-6.25 6.25-6.25s6.25 2.8 6.25 6.25a.781.781 0 0 0 1.56 0c0-4.31-3.5-7.81-7.8-7.81ZM4.3 5.08c0-1.94 1.58-3.52 3.52-3.52s3.52 1.58 3.52 3.52S9.76 8.6 7.82 8.6 4.3 7.02 4.3 5.08ZM24.6 15.72a6.548 6.548 0 0 0-4.99-4.17c1.81-.5 3.16-2.15 3.16-4.12 0-2.37-1.93-4.3-4.3-4.3s-4.3 1.93-4.3 4.3c0 1.97 1.34 3.62 3.15 4.12-.37.07-.75.16-1.12.3-.4.15-.61.6-.46 1 .15.4.6.61 1 .46a4.98 4.98 0 0 1 6.7 4.67.781.781 0 0 0 1.56 0c0-.77-.14-1.53-.4-2.26Zm-8.87-8.29c0-1.51 1.23-2.73 2.73-2.73s2.73 1.23 2.73 2.73-1.23 2.73-2.73 2.73-2.73-1.23-2.73-2.73Z"></path>
                                                                            </svg><!--]--></div>
                                                                        <div class="Btn-label-QJi SearchContentTypeButton-btnLabel-quG e2e-Btn-label"><!--[--> People <!--]--></div>
                                                                        <div class="Btn-icon-BDP Btn-trailing-Lem"><!--[--><svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.42" viewbox="0 0 8 13.42" class="SearchContentTypeButton-btnArrow-lFf" aria-hidden="true">
                                                                                <path d="M1.28,0a1.07,1.07,0,0,1,.25,0L1.77.1A.91.91,0,0,1,2,.21,1.2,1.2,0,0,1,2.2.38L7.62,5.8a1.52,1.52,0,0,1,.28.43,1.15,1.15,0,0,1,.1.48,1.16,1.16,0,0,1-.1.49,1.34,1.34,0,0,1-.28.42L2.2,13a1.42,1.42,0,0,1-.43.29,1.32,1.32,0,0,1-.48.09,1.37,1.37,0,0,1-.49-.09A1.1,1.1,0,0,1,.38,13a1.34,1.34,0,0,1-.28-.42,1.23,1.23,0,0,1,0-1,1.34,1.34,0,0,1,.28-.42L4.9,6.72.38,2.18A1.34,1.34,0,0,1,.1,1.76a1.23,1.23,0,0,1,0-1A1.34,1.34,0,0,1,.38.38L.58.21A.65.65,0,0,1,.8.1L1,0a1,1,0,0,1,.24,0Z"></path>
                                                                            </svg><!--]--></div>
                                                                    </div>
                                                                </a></li>
                                                            <li><a class="Btn-button-CqT Btn-base-L7P Btn-normal-If5 SearchContentTypeButton-btn-fXK" href="/search/assets?tracking_source=typeahead_nav_suggestion_filter" type="button" target="_self" role="link" aria-label="Find free and paid downloadable resources you can use in your own projects." tabindex="-1">
                                                                    <div class="Btn-labelWrapper-_Re">
                                                                        <div class="Btn-icon-BDP Btn-leading-gb0 SearchContentTypeButton-btnIcon-YBA"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" aria-hidden="true">
                                                                                <path d="M17.25 24c-3.72 0-6.75-3.03-6.75-6.75s3.03-6.75 6.75-6.75S24 13.53 24 17.25 20.97 24 17.25 24Zm0-12a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 1 0 0-10.5Z"></path>
                                                                                <path d="M20.03 17.47a.754.754 0 0 0-1.06 0l-.97.97v-4.19c0-.41-.34-.75-.75-.75s-.75.34-.75.75v4.19l-.97-.97c-.29-.29-.77-.29-1.06 0s-.29.77 0 1.06l2.25 2.25a.776.776 0 0 0 .53.22.753.753 0 0 0 .53-.22l2.25-2.25c.29-.29.29-.77 0-1.06Z"></path>
                                                                                <path d="M8.25 21h-6C1.01 21 0 19.99 0 18.75V2.25C0 1.01 1.01 0 2.25 0h10.63c.6 0 1.16.23 1.59.66l2.87 2.87c.42.43.66.99.66 1.59v3.13c0 .41-.34.75-.75.75s-.75-.34-.75-.75V5.12c0-.2-.08-.39-.22-.53l-2.87-2.87a.75.75 0 0 0-.53-.22H2.25c-.41 0-.75.34-.75.75v16.5c0 .41.34.75.75.75h6c.41 0 .75.34.75.75s-.34.75-.75.75Z"></path>
                                                                            </svg><!--]--></div>
                                                                        <div class="Btn-label-QJi SearchContentTypeButton-btnLabel-quG e2e-Btn-label"><!--[--> Assets <!--]--></div>
                                                                        <div class="Btn-icon-BDP Btn-trailing-Lem"><!--[--><svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.42" viewbox="0 0 8 13.42" class="SearchContentTypeButton-btnArrow-lFf" aria-hidden="true">
                                                                                <path d="M1.28,0a1.07,1.07,0,0,1,.25,0L1.77.1A.91.91,0,0,1,2,.21,1.2,1.2,0,0,1,2.2.38L7.62,5.8a1.52,1.52,0,0,1,.28.43,1.15,1.15,0,0,1,.1.48,1.16,1.16,0,0,1-.1.49,1.34,1.34,0,0,1-.28.42L2.2,13a1.42,1.42,0,0,1-.43.29,1.32,1.32,0,0,1-.48.09,1.37,1.37,0,0,1-.49-.09A1.1,1.1,0,0,1,.38,13a1.34,1.34,0,0,1-.28-.42,1.23,1.23,0,0,1,0-1,1.34,1.34,0,0,1,.28-.42L4.9,6.72.38,2.18A1.34,1.34,0,0,1,.1,1.76a1.23,1.23,0,0,1,0-1A1.34,1.34,0,0,1,.38.38L.58.21A.65.65,0,0,1,.8.1L1,0a1,1,0,0,1,.24,0Z"></path>
                                                                            </svg><!--]--></div>
                                                                    </div>
                                                                </a></li>
                                                            <li><a class="Btn-button-CqT Btn-base-L7P Btn-normal-If5 SearchContentTypeButton-btn-fXK" href="/hire?tracking_source=typeahead_nav_suggestion_filter" type="button" target="_self" role="link" aria-label="Find the perfect freelancer for your next project" tabindex="-1">
                                                                    <div class="Btn-labelWrapper-_Re">
                                                                        <div class="Btn-icon-BDP Btn-leading-gb0 SearchContentTypeButton-btnIcon-YBA"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" aria-hidden="true">
                                                                                <path d="M23.14 24h-.07a.75.75 0 0 1-.68-.81l.1-1.12c.1-1.12-.65-2.16-1.75-2.4l-3.65-.81a.758.758 0 0 1-.59-.73v-5.74c0-.3-.12-.58-.33-.8-.21-.21-.5-.33-.8-.33-.35 0-.62.11-.81.3-.2.2-.31.46-.31.74v9.29c0 .28-.16.54-.41.67-.25.13-.56.1-.79-.07l-1.48-1.11a.77.77 0 0 0-1.09.16.78.78 0 0 0 0 .94l.47.63a.75.75 0 0 1-1.2.9l-.47-.63c-.6-.8-.6-1.93 0-2.73a2.272 2.272 0 0 1 3.19-.46l.28.21v-7.8a2.544 2.544 0 0 1 2.54-2.53h.02c.76 0 1.42.27 1.92.77S18 11.7 18 12.4v5.14l3.06.68c1.84.41 3.09 2.13 2.92 4l-.1 1.12c-.03.39-.36.68-.75.68Z"></path>
                                                                                <path d="M6.75 20.07h-4.5C1.01 20.07 0 19.06 0 17.82V2.25C0 1.01 1.01 0 2.25 0h13.5C16.99 0 18 1.01 18 2.25V7.5c0 .41-.34.75-.75.75s-.75-.34-.75-.75V2.25c0-.41-.34-.75-.75-.75H2.25c-.41 0-.75.34-.75.75v15.57c0 .41.34.75.75.75h4.5c.41 0 .75.34.75.75s-.34.75-.75.75Z"></path>
                                                                                <path d="M11.35 9.55c-.21-.1-.43-.19-.66-.27 1-.59 1.69-1.66 1.69-2.9C12.38 4.52 10.87 3 9 3S5.62 4.51 5.62 6.38c0 1.25.69 2.33 1.7 2.91a5.23 5.23 0 0 0-3.55 4.86c0 .03-.02.07-.02.1 0 .41.34.75.75.75h6c.41 0 .75-.34.75-.75s-.34-.75-.75-.75H5.35c.04-.17.07-.34.13-.5A3.74 3.74 0 0 1 9 10.5c.58 0 1.16.13 1.68.39.37.18.82.03 1-.34s.03-.82-.34-1ZM9 4.51c1.03 0 1.88.84 1.88 1.88S10.04 8.27 9 8.27s-1.88-.84-1.88-1.88S7.96 4.51 9 4.51Z"></path>
                                                                            </svg><!--]--></div>
                                                                        <div class="Btn-label-QJi SearchContentTypeButton-btnLabel-quG e2e-Btn-label"><!--[--> People to Hire <!--]--></div>
                                                                        <div class="Btn-icon-BDP Btn-trailing-Lem"><!--[--><svg xmlns="http://www.w3.org/2000/svg" width="8" height="13.42" viewbox="0 0 8 13.42" class="SearchContentTypeButton-btnArrow-lFf" aria-hidden="true">
                                                                                <path d="M1.28,0a1.07,1.07,0,0,1,.25,0L1.77.1A.91.91,0,0,1,2,.21,1.2,1.2,0,0,1,2.2.38L7.62,5.8a1.52,1.52,0,0,1,.28.43,1.15,1.15,0,0,1,.1.48,1.16,1.16,0,0,1-.1.49,1.34,1.34,0,0,1-.28.42L2.2,13a1.42,1.42,0,0,1-.43.29,1.32,1.32,0,0,1-.48.09,1.37,1.37,0,0,1-.49-.09A1.1,1.1,0,0,1,.38,13a1.34,1.34,0,0,1-.28-.42,1.23,1.23,0,0,1,0-1,1.34,1.34,0,0,1,.28-.42L4.9,6.72.38,2.18A1.34,1.34,0,0,1,.1,1.76a1.23,1.23,0,0,1,0-1A1.34,1.34,0,0,1,.38.38L.58.21A.65.65,0,0,1,.8.1L1,0a1,1,0,0,1,.24,0Z"></path>
                                                                            </svg><!--]--></div>
                                                                    </div>
                                                                </a></li><!--]-->
                                                        </ul><!--]-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div><button class="Btn-button-CqT Btn-ghost-aaK Btn-small-lgf SearchTypeahead-mobileCloseButton-kpv" type="button" target="_self" role="button" tabindex="-1">
                                            <div class="Btn-labelWrapper-_Re"><!---->
                                                <div class="Btn-label-QJi e2e-Btn-label"><!--[-->Cancel<!--]--></div><!---->
                                            </div>
                                        </button>
                                        <div class="SearchTypeahead-overlay-p2d"></div>
                                    </div>
                                </div>
                                <div class="PrimaryNav-searchLink-xVd PrimaryNav-searchLinkCompact-par PrimaryNav-noRightPadding-HYK"><a class="PrimaryNav-link-hxX e2e-PrimaryNav-search" href="/search/projects?tracking_source=nav20"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12 12" aria-labelledby="IconBase-title-859ba6db-02ef-4311-a5e9-005c8e862217 IconBase-description-859ba6db-02ef-4311-a5e9-005c8e862217" role="graphics-symbol img" width="100%" height="100%" class="PrimaryNav-searchIcon-qWb">
                                            <title id="IconBase-title-859ba6db-02ef-4311-a5e9-005c8e862217">search</title>
                                            <desc id="IconBase-description-859ba6db-02ef-4311-a5e9-005c8e862217">magnifying glass</desc>
                                            <g><!--[-->
                                                <path d="M11.407,10.421,8.818,7.832a4.276,4.276,0,1,0-.985.985l2.589,2.589a.7.7,0,0,0,.985-.985ZM2.355,5.352a3,3,0,1,1,3,3,3,3,0,0,1-3-3Z"></path><!--]-->
                                            </g>
                                        </svg></a></div>
                                <div class="NotificationsMenu-root-YjN">
                                    <div aria-haspopup="true" fadecomponent="FadeDown" class="NotificationsMenu-notificationsDesktop-vbh">
                                        <div aria-describedby="acaffb62-ea35-4be4-878e-6507b89f236a" class="Popover-activator-M8N"><!--[--><!--[-->
                                            <div class="PrimaryNav-userControl-LdV PrimaryNav-announcementsActivator-qFI PrimaryNav-notifications-DqR e2e-NotificationBadge--announcement"><button class="PrimaryNav-link-hxX PrimaryNav-userControlLink-JRN" aria-label="Notifications"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewbox="5641 835.999 14 17.001" title="Notifications" class="PrimaryNav-icon-r_P">
                                                        <g>
                                                            <desc>View your notifications within Behance.</desc>
                                                            <path d="M5648 853a2.2 2.2 0 0 0 2-2h-4a2.2 2.2 0 0 0 2 2z"></path>
                                                            <path d="M5652.57 840.692c0-1.72-1.6-2.445-3.57-2.634V836.5a.54.54 0 0 0-.572-.5h-.857a.54.54 0 0 0-.57.5v1.558c-1.97.188-3.57.916-3.57 2.634 0 7.71-2.43 7.363-2.43 8.385V850h14v-.922c0-1.077-2.43-.677-2.43-8.386z"></path>
                                                            <path d="M5648 853a2.2 2.2 0 0 0 2-2h-4a2.2 2.2 0 0 0 2 2z"></path>
                                                            <path d="M5652.57 840.692c0-1.72-1.6-2.445-3.57-2.634V836.5a.54.54 0 0 0-.572-.5h-.857a.54.54 0 0 0-.57.5v1.558c-1.97.188-3.57.916-3.57 2.634 0 7.71-2.43 7.363-2.43 8.385V850h14v-.922c0-1.077-2.43-.677-2.43-8.386z"></path>
                                                        </g>
                                                    </svg></button><!----></div><!--]--><!--]-->
                                        </div><!---->
                                    </div>
                                    <div class="NotificationsMenu-notificationsMobile-kcE"><!--[-->
                                        <div class="PrimaryNav-userControl-LdV PrimaryNav-announcementsActivator-qFI PrimaryNav-notifications-DqR e2e-NotificationBadge--announcement"><button class="PrimaryNav-link-hxX PrimaryNav-userControlLink-JRN" aria-label="Notifications"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewbox="5641 835.999 14 17.001" title="Notifications" class="PrimaryNav-icon-r_P">
                                                    <g>
                                                        <desc>View your notifications within Behance.</desc>
                                                        <path d="M5648 853a2.2 2.2 0 0 0 2-2h-4a2.2 2.2 0 0 0 2 2z"></path>
                                                        <path d="M5652.57 840.692c0-1.72-1.6-2.445-3.57-2.634V836.5a.54.54 0 0 0-.572-.5h-.857a.54.54 0 0 0-.57.5v1.558c-1.97.188-3.57.916-3.57 2.634 0 7.71-2.43 7.363-2.43 8.385V850h14v-.922c0-1.077-2.43-.677-2.43-8.386z"></path>
                                                        <path d="M5648 853a2.2 2.2 0 0 0 2-2h-4a2.2 2.2 0 0 0 2 2z"></path>
                                                        <path d="M5652.57 840.692c0-1.72-1.6-2.445-3.57-2.634V836.5a.54.54 0 0 0-.572-.5h-.857a.54.54 0 0 0-.57.5v1.558c-1.97.188-3.57.916-3.57 2.634 0 7.71-2.43 7.363-2.43 8.385V850h14v-.922c0-1.077-2.43-.677-2.43-8.386z"></path>
                                                    </g>
                                                </svg></button><!----></div><!--]--><!---->
                                    </div>
                                </div>
                                <div class="PrimaryNav-signup-XIt"><!----><!---->
                                    <ul class="PrimaryNav-loggedOutOptions-ZwH">
                                        <li class="PrimaryNav-loggedOutOption-OP6 PrimaryNav-logIn-td1"><button class="Btn-button-CqT Btn-tertiary-Z8Q Btn-normal-If5 js-adobeid-signin e2e-PrimaryNav-Signin" type="button" target="_self" role="button" data-signin-from="HeaderWithLoginPrompt">
                                                <div class="Btn-labelWrapper-_Re"><!---->
                                                    <div class="Btn-label-QJi e2e-Btn-label"><!--[-->Log In<!--]--></div><!---->
                                                </div>
                                            </button></li>
                                        <li class="PrimaryNav-loggedOutOption-OP6"><button class="Btn-button-CqT Btn-primary-wt8 Btn-normal-If5 js-adobeid-signup e2e-PrimaryNav-signup" type="button" target="_self" role="button" data-signup-from="HeaderWithLoginPrompt">
                                                <div class="Btn-labelWrapper-_Re"><!---->
                                                    <div class="Btn-label-QJi e2e-Btn-label"><!--[-->Sign Up<!--]--></div><!---->
                                                </div>
                                            </button></li><!---->
                                    </ul>
                                </div><!---->
                                <div class="PrimaryNav-searchLink-xVd"><a class="PrimaryNav-link-hxX e2e-PrimaryNav-search" href="/search/projects?tracking_source=nav20"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12 12" aria-labelledby="IconBase-title-3d705a09-8e12-4042-989b-8b26a167828a IconBase-description-3d705a09-8e12-4042-989b-8b26a167828a" role="graphics-symbol img" width="100%" height="100%">
                                            <title id="IconBase-title-3d705a09-8e12-4042-989b-8b26a167828a">search</title>
                                            <desc id="IconBase-description-3d705a09-8e12-4042-989b-8b26a167828a">magnifying glass</desc>
                                            <g><!--[-->
                                                <path d="M11.407,10.421,8.818,7.832a4.276,4.276,0,1,0-.985.985l2.589,2.589a.7.7,0,0,0,.985-.985ZM2.355,5.352a3,3,0,1,1,3,3,3,3,0,0,1-3-3Z"></path><!--]-->
                                            </g>
                                        </svg></a></div><!--[--><!----><!--]-->
                                <div class="PrimaryNav-adobeLogo-VeZ">
                                    <div aria-haspopup="true">
                                        <div aria-describedby="6e47514f-0b79-4937-9915-ca5807a62c2c" class="Popover-activator-M8N"><!--[--><a href="https://www.adobe.com?promoid=RTQCN3LX" class="PrimaryNav-adobeCreativeCloudLink-m4O" target="_blank" aria-expanded="false" role="button" aria-controls="37705796-37ff-4e51-b4b3-debc87597877"><span class="PrimaryNav-iconWrap-RHt"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 60 15.619" aria-labelledby="IconBase-title-38585f7a-e3c2-4e9b-9a01-c1e81795ac31 IconBase-description-38585f7a-e3c2-4e9b-9a01-c1e81795ac31" role="graphics-symbol img" width="100%" height="100%" class="PrimaryNav-icon-r_P PrimaryNav-fullAdobeLogo-qFK" aria-hidden="true">
                                                        <title id="IconBase-title-38585f7a-e3c2-4e9b-9a01-c1e81795ac31">Adobe, Inc.</title>
                                                        <desc id="IconBase-description-38585f7a-e3c2-4e9b-9a01-c1e81795ac31"></desc>
                                                        <g><!--[-->
                                                            <path d="M179.682,34.616l-.647,2a.145.145,0,0,1-.148.107h-1.564c-.094,0-.122-.053-.107-.132l2.7-7.78a2.513,2.513,0,0,0,.132-.823.089.089,0,0,1,.081-.094h2.157c.067,0,.094.013.108.081l3.06,8.629c.026.067.013.12-.067.12h-1.75a.132.132,0,0,1-.149-.094l-.688-2.009ZM182.3,32.93c-.264-.89-.808-2.522-1.058-3.479h-.013c-.216.9-.7,2.38-1.058,3.479Z" transform="translate(-153.778 -24.202)"></path>
                                                            <path d="M241.14,28.636a3.573,3.573,0,0,1,3.91-3.541c.107,0,.242.015.444.028V22.46a.085.085,0,0,1,.094-.094h1.7c.067,0,.081.026.081.081v7.969a7.51,7.51,0,0,0,.054.984c0,.067-.013.094-.094.122a6.793,6.793,0,0,1-2.657.538A3.226,3.226,0,0,1,241.14,28.636Zm4.355-1.915a1.389,1.389,0,0,0-.5-.067,1.8,1.8,0,0,0-1.928,1.887,1.687,1.687,0,0,0,1.793,1.915,1.9,1.9,0,0,0,.633-.081Z" transform="translate(-209.252 -19.408)"></path>
                                                            <path d="M303.016,46.411a3.328,3.328,0,1,1-6.646.041,3.3,3.3,0,0,1,3.356-3.492A3.212,3.212,0,0,1,303.016,46.411Zm-4.746.015c0,1.19.553,1.941,1.455,1.941.783,0,1.375-.674,1.375-1.915,0-1.058-.431-1.928-1.455-1.928C298.864,44.524,298.27,45.225,298.27,46.426Z" transform="translate(-257.179 -37.279)"></path>
                                                            <path d="M356.658,22.37c.108,0,.132.013.132.108v2.764a4.3,4.3,0,0,1,1.135-.144,3.086,3.086,0,0,1,3.236,3.209,3.743,3.743,0,0,1-4.044,3.761A7.063,7.063,0,0,1,355,31.759a.156.156,0,0,1-.081-.132V22.464c0-.067.026-.094.094-.094Zm.926,4.314a2.71,2.71,0,0,0-.793.108v3.654a2.064,2.064,0,0,0,.5.054,1.856,1.856,0,0,0,1.954-2.023,1.58,1.58,0,0,0-1.656-1.792Z" transform="translate(-307.986 -19.412)"></path>
                                                            <path d="M409.443,46.941c.067.768.607,1.4,1.928,1.4a4.176,4.176,0,0,0,1.658-.309c.041-.028.081-.013.081.067v1.28c0,.1-.026.132-.094.163a4.53,4.53,0,0,1-2.063.4,3.161,3.161,0,0,1-3.424-3.41,3.286,3.286,0,0,1,3.262-3.56,2.748,2.748,0,0,1,2.844,2.909,4.281,4.281,0,0,1-.067.9.114.114,0,0,1-.107.107,12.3,12.3,0,0,1-1.39.054Zm1.753-1.308a4.486,4.486,0,0,0,.674-.026v-.1a1.1,1.1,0,0,0-1.147-1.058,1.278,1.278,0,0,0-1.295,1.19Z" transform="translate(-353.639 -37.288)"></path>
                                                            <path d="M84.13,0h6.523V15.619Z" transform="translate(-73.005)"></path>
                                                            <path d="M6.529,0H0V15.619Z"></path>
                                                            <path d="M48.032,43.53l4.156,9.862H49.465l-1.243-3.141H45.18Z" transform="translate(-39.205 -37.774)"></path><!--]-->
                                                        </g>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 207.5 183.6" aria-labelledby="IconBase-title-37159d5f-2c52-4c51-a08b-2823e5ceb1d2 IconBase-description-37159d5f-2c52-4c51-a08b-2823e5ceb1d2" role="graphics-symbol img" width="100%" height="100%" class="PrimaryNav-icon-r_P PrimaryNav-compactAdobeLogo-EdF" aria-hidden="true">
                                                        <title id="IconBase-title-37159d5f-2c52-4c51-a08b-2823e5ceb1d2">Adobe, Inc.</title>
                                                        <desc id="IconBase-description-37159d5f-2c52-4c51-a08b-2823e5ceb1d2"></desc>
                                                        <g><!--[-->
                                                            <polygon points="130.8,0 207.5,0 207.5,183.6 "></polygon>
                                                            <polygon points="76.7,0 0,0 0,183.6 "></polygon>
                                                            <polygon points="103.8,67.7 152.6,183.6 120.6,183.6 106,146.7 70.2,146.7 "></polygon><!--]-->
                                                        </g>
                                                    </svg></span><span class="PrimaryNav-screenReaderOnly-Yh2">Navigate to adobe.com</span></a><!--]--></div><!---->
                                    </div>
                                </div><!---->
                            </div>
                        </div><!----><!----><!----><!---->
                    </nav><!----><!----><!----><!--]--><!---->
                    <div id="top-panel" class="slide-panel js-top-panel" aria-busy="true">
                        <main>
                            <div tabindex="0" id="site-content" class="js-site-content site-content e2e-site-content">
                                <div data-id="126991995" class="">
                                    <div class="Project-project-z8i Project-horizontalPadding-f14 Project-fullPage-WM8 Project-accessibilityOutlines-K0R e2e-Project" isappreciated="false">
                                        <div class="Project-wrapper-G8w">
                                            <div class="Project-sidebar-oAa">
                                                <div class="Project-userActions-XFE Project-userActionsWithTools-sdb Project-fullPageUserActions-XW6 qa-project-user-actions">
                                                    <div class="Project-avatarWithPulsePoint-nsg"><!---->
                                                        <div class="Avatar-root-Ic4 Project-toolsAvatar-p2p">
                                                            <div aria-haspopup="true" class="">
                                                                <div aria-describedby="15c1271f-5b2f-4c26-b594-3b3243b0185a" class="Popover-activator-M8N Miniprofile-activator-dDq"><!--[--><span><!--[-->
                                                                        <div class="Avatar-pie-vQ0 Avatar-root-cxI e2e-project-avatar"><a target="_blank" href="https://www.behance.net/sohaguixd" data-followee="330325461" data-entity="user" data-following="false" data-source="avatar" class="Avatar-avatar-G8t Avatar-avatarHover-z4f" style="height:45px;width:45px;min-height:45px;min-width:45px;"><!--[--><img class="AvatarImage-avatarImage-PUL Avatar-avatarImage-VBb" src="https://mir-s3-cdn-cf.behance.net/user/100/f1d666330325461.62760c6bc2f98.png" alt="MD Sohag Rana&#39;s profile" srcset="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png 50w, https://mir-s3-cdn-cf.behance.net/user/100/f1d666330325461.62760c6bc2f98.png 100w" loading="lazy" sizes="45px" draggable="false" style="" data-id="330325461"><!--]--><!----></a><!----></div><!--]-->
                                                                    </span><!--]--></div><!---->
                                                            </div>
                                                            <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl FollowButtonMinimal-followBtn-ylc Avatar-follow-Arf" style="cursor:pointer;"><span class="Tooltip-trigger-eZ_"><!--[-->
                                                                    <div class="js-action-follow rf-button__container--follow follow-button-container" data-followee="330325461" data-entity="user" data-following="false" data-source="projectSidebar"><a role="button" class="FollowButtonMinimal-button-jX1 rf-button--follow" tabindex="0" aria-label="Follow"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 533.333 533.333" class="Avatar-addMark-NjU">
                                                                                <path d="M516.7,200H333.3V16.7c0-9.2-7.5-16.7-16.7-16.7h-100C207.5,0,200,7.5,200,16.7V200H16.7C7.5,200,0,207.5,0,216.7v100
	c0,9.2,7.5,16.7,16.7,16.7H200v183.3c0,9.2,7.5,16.7,16.7,16.7h100c9.2,0,16.7-7.5,16.7-16.7V333.3h183.3c9.2,0,16.7-7.5,16.7-16.7
	v-100C533.3,207.5,525.9,200,516.7,200z"></path>
                                                                            </svg><!--]--></a><a role="button" class="FollowButtonMinimal-button-jX1 FollowButtonMinimal-following-ehF rf-button--following" tabindex="0" aria-label="Unfollow"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="960.186 616.276 170 144" class="Avatar-checkMark-vu9">
                                                                                <path d="M1102.077 616.276l-87.46 87.786-26.3-26.322-28.131 28.107 54.695 54.429 115.305-115.613z"></path>
                                                                            </svg><!--]--></a><a role="button" class="FollowButtonMinimal-button-jX1 FollowButtonMinimal-unfollow-OcM rf-button--unfollow" tabindex="0" aria-label="Unfollow"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="Avatar-minusMark-Lmf">
                                                                                <path d="M0 10h24v4h-24z"></path>
                                                                            </svg><!--]--></a></div><!--]-->
                                                                </span>
                                                                <div class="" style="height: calc(100% + 10px + 0px)"></div>
                                                                <div style="display:none;cursor:initial;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;top:calc(100% + 10px + 0px);right:0px;" class="Tooltip-container-DIF Tooltip-position-bottom-CSC Tooltip-right-pvm">
                                                                    <div class="Tooltip-triangleContainer-r5D" style="right:0px;">
                                                                        <div class="Tooltip-triangle-Qw9"></div>
                                                                        <div class="Tooltip-mask-mwQ"></div>
                                                                    </div><!--[-->
                                                                    <div class="js-action-follow FollowButtonMinimal-tooltipStyle-b0n" data-followee="330325461" data-entity="user" data-following="false" data-source="projectSidebar"><label class="FollowButtonMinimal-tooltipContent-lbu FollowButtonMinimal-followTooltip-B7Z">Follow</label><label class="FollowButtonMinimal-tooltipContent-lbu FollowButtonMinimal-unfollowTooltip-UYx">Unfollow</label></div><!--]--><!---->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Project-actionName-DD5 Project-avatarTitle-QfZ js-action-follow Project-actionNameFullPage-Nwt" data-followee="330325461" data-entity="user" data-following="false" data-source="sidebar"><span class="Project-followTitle-VkM">Follow</span><span class="Project-followingTitle-J3w">Following</span></div>
                                                    </div>
                                                    <div class="Project-iconMessageButton-UEh" pagemodaltarget="project-content-action-modal">
                                                        <div class="MessageManager-availabilityTooltip-CIA e2e-messagemanager-hire-me-button">
                                                            <div class="FocusedTooltip-activator-qut AvailabilityInfoTooltip-tooltipContainer-_Kq AvailabilityInfoTooltip-iconTooltipContainer-oi_" aria-describedby="tooltipContent">
                                                                <div><!--[-->
                                                                    <div class="AvailabilityInfoTooltip-activator-nW3"><!--[--><!--[-->
                                                                        <div><button class="Btn-button-CqT Btn-secondary-Ine Btn-small-lgf Btn-forceIconOnly-IeA IconMessageButton-iconOnly-t3Q" type="button" target="_self" role="button" aria-label="Hire" data-id="hire">
                                                                                <div class="Btn-labelWrapper-_Re IconMessageButton-iconWrapper-xuq">
                                                                                    <div class="Btn-icon-BDP Btn-leading-gb0"><!--[--><svg viewbox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="IconMessageButton-icon-NkP">
                                                                                            <path d="M9,10.094l9-6.7615v-.75A.5735.5735,0,0,0,17.4375,2H.5625A.57351.57351,0,0,0,0,2.5835V3.318Z"></path>
                                                                                            <polygon points="12.389 8.981 18 13.184 18 6.667 18 4.771"></polygon>
                                                                                            <path d="M11.433,9.7,9.645,11.047a1.086,1.086,0,0,1-1.29,0L6.541,9.6875,0,14.534v.883A.573.573,0,0,0,.5625,16h16.875A.573.573,0,0,0,18,15.417v-.795Z"></path>
                                                                                            <polygon points="5.582 8.969 0 4.756 0 6.667 0 13.097"></polygon>
                                                                                        </svg><!--]--></div>
                                                                                    <div class="Btn-label-QJi e2e-Btn-label"><!--[--><!--]--></div><!---->
                                                                                </div>
                                                                            </button><span class="Project-actionName-DD5 Project-actionNameFullPage-Nwt">Hire</span></div><!--]--><!--]-->
                                                                    </div><!--]-->
                                                                </div>
                                                                <div style="display:none;" class="FocusedTooltip-tooltipContainer-L3T Project-hireMeTooltip-mg4 FocusedTooltip-light-Z12 FocusedTooltip-left-Z1q"><!--[-->
                                                                    <div class="AvailabilityInfoTooltip-tooltipTextWrapper-xCQ">
                                                                        <div class="AvailabilityInfoTooltip-tooltipWrapperListItem-AeZ"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19.997 20" class="AvailabilityInfoTooltip-icon-hr8">
                                                                                <g transform="translate(-778.375 0.625)">
                                                                                    <g transform="translate(779 0)">
                                                                                        <path d="M9.014,9.869a2.535,2.535,0,0,1,1.722.672q.019.017.036.036a2.542,2.542,0,0,1-.1,3.544c-.833.827-3.71,1.418-4.279,1.528a.625.625,0,0,1-.732-.733c.111-.569.7-3.443,1.528-4.277A2.521,2.521,0,0,1,9.014,9.869Zm.856,1.574a1.292,1.292,0,0,0-1.784.069l-.007.007a8.39,8.39,0,0,0-.984,2.7,8.361,8.361,0,0,0,2.7-.983l.008-.008A1.284,1.284,0,0,0,9.87,11.443Z" transform="translate(-0.625 -0.623)"></path>
                                                                                        <path d="M10.608,5.265A.625.625,0,0,1,10.166,4.2L13.2,1.166a1.85,1.85,0,0,1,2.616,0l.867.867a.625.625,0,0,1-.884.884l-.867-.867a.6.6,0,0,0-.849,0L11.05,5.082A.623.623,0,0,1,10.608,5.265Z" transform="translate(-0.625 -0.623)"></path>
                                                                                        <path d="M11.907,12.629a.623.623,0,0,1-.442-.183l-2.6-2.6a.625.625,0,0,1,0-.884L15.8,2.032a2.463,2.463,0,0,1,3.484,3.482l-6.933,6.932A.623.623,0,0,1,11.907,12.629ZM10.192,9.4l1.715,1.715L18.4,4.631a1.222,1.222,0,0,0,0-1.717,1.218,1.218,0,0,0-1.715,0Z" transform="translate(-0.625 -0.623)"></path>
                                                                                        <path d="M16.24,8.3a.623.623,0,0,1-.442-.183l-2.6-2.6a.625.625,0,0,1,.884-.884l2.6,2.6A.625.625,0,0,1,16.24,8.3Z" transform="translate(-0.625 -0.623)"></path>
                                                                                        <path d="M15.054,20H.937a.937.937,0,0,1-.663-1.6l.5-.5c1.368-1.368,1.36-2.269,1.308-8.134-.011-1.305-.024-2.785-.024-4.569A6.329,6.329,0,0,1,4.506.4c.1-.087.179-.163.235-.218A.625.625,0,0,1,5.183,0H8.89a.625.625,0,1,1,0,1.25H5.431l-.086.078A5.14,5.14,0,0,0,3.308,5.195c0,1.779.013,3.255.024,4.558.053,6,.064,7.274-1.641,9H14.925l.851-.85c1.362-1.362,1.339-2.736,1.3-5.23-.007-.449-.015-.913-.015-1.418a.625.625,0,0,1,1.25,0c0,.495.008.953.015,1.4.043,2.554.073,4.4-1.663,6.135l-.944.943A.937.937,0,0,1,15.054,20Z" transform="translate(-0.625 -0.623)"></path>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                            <div class="AvailabilityInfoTooltip-listItemText-xn6">Full Time Job</div><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" class="AvailabilityInfoTooltip-icon-hr8">
                                                                                <g transform="translate(0.625 0.625)">
                                                                                    <path d="M7.768,14.929H7.723a1.5,1.5,0,0,1-1.2-.657L4.489,11.379a.625.625,0,0,1,1.022-.72l2.042,2.9.008.012a.249.249,0,0,0,.405.012l.007-.009L14.51,5.3a.625.625,0,1,1,.981.775L8.958,14.342A1.5,1.5,0,0,1,7.768,14.929Z" transform="translate(-0.625 -0.624)"></path>
                                                                                    <path d="M10,0A10,10,0,1,1,0,10,10.011,10.011,0,0,1,10,0Zm0,18.75A8.75,8.75,0,1,0,1.25,10,8.76,8.76,0,0,0,10,18.749Z" transform="translate(-0.625 -0.624)"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="AvailabilityInfoTooltip-tooltipWrapperListItem-AeZ AvailabilityInfoTooltip-borderTop-CzY"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" class="AvailabilityInfoTooltip-icon-hr8">
                                                                                <g transform="translate(0.625 0.625)">
                                                                                    <g transform="translate(0 0)">
                                                                                        <path d="M14.375,8.759A5.625,5.625,0,1,1,8.75,14.384,5.631,5.631,0,0,1,14.375,8.759Zm0,10A4.375,4.375,0,1,0,10,14.384,4.38,4.38,0,0,0,14.375,18.759Z" transform="translate(-0.625 -0.634)"></path>
                                                                                        <path d="M16.585,15.009h-2.21a.625.625,0,0,1-.625-.625v-2.21a.625.625,0,0,1,1.25,0v1.585h1.585a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                        <path d="M8.75,9.384H4.375a.625.625,0,0,1,0-1.25H8.75a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                        <path d="M6.875,12.509h-2.5a.625.625,0,0,1,0-1.25h2.5a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                        <path d="M6.875,15.634h-2.5a.625.625,0,0,1,0-1.25h2.5a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                        <path d="M8.125,20.009H1.875A1.875,1.875,0,0,1,0,18.134V5.009A1.877,1.877,0,0,1,1.875,3.134H4.427a3.751,3.751,0,0,1,7.4,0h2.552A1.877,1.877,0,0,1,16.25,5.009V6.884a.625.625,0,1,1-1.25,0V5.009a.626.626,0,0,0-.625-.625H11.25a.625.625,0,0,1-.625-.625,2.5,2.5,0,0,0-5,0A.625.625,0,0,1,5,4.384H1.875a.626.626,0,0,0-.625.625V18.134a.625.625,0,0,0,.625.625h6.25a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                        <path d="M8.125,4.384a.937.937,0,1,1,.938-.937A.939.939,0,0,1,8.125,4.384Z" transform="translate(-0.625 -0.634)"></path>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                            <div class="AvailabilityInfoTooltip-listItemTextContainer-cqo">
                                                                                <div class="AvailabilityInfoTooltip-listItemText-xn6">Freelance/Project</div><!---->
                                                                            </div><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" class="AvailabilityInfoTooltip-icon-hr8">
                                                                                <g transform="translate(0.625 0.625)">
                                                                                    <path d="M7.768,14.929H7.723a1.5,1.5,0,0,1-1.2-.657L4.489,11.379a.625.625,0,0,1,1.022-.72l2.042,2.9.008.012a.249.249,0,0,0,.405.012l.007-.009L14.51,5.3a.625.625,0,1,1,.981.775L8.958,14.342A1.5,1.5,0,0,1,7.768,14.929Z" transform="translate(-0.625 -0.624)"></path>
                                                                                    <path d="M10,0A10,10,0,1,1,0,10,10.011,10.011,0,0,1,10,0Zm0,18.75A8.75,8.75,0,1,0,1.25,10,8.76,8.76,0,0,0,10,18.749Z" transform="translate(-0.625 -0.624)"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                    </div><!--]-->
                                                                </div>
                                                            </div>
                                                        </div><!----><!---->
                                                    </div><!---->
                                                    <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl Project-sidebarTools-WFJ" style="cursor:pointer;" aria-label="Tools"><span class="Tooltip-trigger-eZ_"><!--[--><a href="/search?tools=596340077" target="_blank" class="Tools-iconWrapper-V1F .qa-adobeTools" aria-label="Tools"><img class="Tools-adobeToolIcon-xSn" src="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/img/project/tools/1x/xd.png" alt="Adobe XD"></a><!--]--></span>
                                                        <div class="" style="height: calc(100% + 10px + 0px)"></div>
                                                        <div style="display:none;cursor:initial;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;" class="Tooltip-container-DIF Tooltip-position-center-CBA Tooltip-right-pvm">
                                                            <div class="Tooltip-triangleContainer-r5D" style="right:0px;">
                                                                <div class="Tooltip-triangle-Qw9"></div>
                                                                <div class="Tooltip-mask-mwQ"></div>
                                                            </div><!--[-->
                                                            <div class="Tools-tooltipContent-a6L">
                                                                <div class="Tools-title-z7Y">Tools</div>
                                                                <div><!--[-->
                                                                    <div class="Tools-toolWithImage-BFR Tools-pillShapedTool-hWy"><!--[--><a href="/search?tools=596340077" class="PillShapedInfoButton-anchor-CiL PillShapedInfoButton-hasBackgroundColor-_4o" style="background-color:#470137;" target="_blank"><img class="PillShapedInfoButton-background-_MN" src="https://mir-s3-cdn-cf.behance.net/projects/original/32c180191973409.Y3JvcCwxNjE2LDEyNjQsMCww.jpg" loading="lazy" alt="">
                                                                            <div class="PillShapedInfoButton-overlay-C3h"><!--[--><img class="Tools-toolIcon-tw4" src="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/img/project/tools/1x/xd.png" alt="">
                                                                                <p class="Tools-toolLabel-m6g"> XD</p><!--]-->
                                                                            </div>
                                                                        </a><!--]--></div><!--]-->
                                                                </div><!---->
                                                            </div><!--]--><!---->
                                                        </div>
                                                    </div><span class="Project-actionName-DD5 Project-actionNameFullPage-Nwt">Tools</span><!--[-->
                                                    <div class="Tooltip-wrapper-Uzv Project-tooltip-PUI Project-collection-y5x" style="cursor:pointer;"><span class="Tooltip-trigger-eZ_"><!--[--><button class="Project-resetButton-Bcw Project-sidebarCollectionTrigger-V2q e2e-Project-collection-trigger" aria-labelledby="save-476a8522-cbbc-4ecb-8ad0-9c73613acef3"><svg class="Collection-icon-mXx Project-icon-qll" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewbox="0 0 17 17">
                                                                    <path d="M5.69,3.395,7.97,5.487h6.217V7.579H2.858V3.743a.351.351,0,0,1,.354-.349ZM5.69,2H3.212a1.757,1.757,0,0,0-1.77,1.743V7.579h-1a.356.356,0,0,0-.27.123A.345.345,0,0,0,.1,7.985L1.336,14.68a.705.705,0,0,0,.7.572H15.012a.705.705,0,0,0,.7-.572L16.95,7.985a.345.345,0,0,0-.079-.283.356.356,0,0,0-.27-.123h-1V4.789a.7.7,0,0,0-.708-.7H8.523L6.859,2.514A1.657,1.657,0,0,0,5.69,2Z" transform="translate(-0.023 -0.5)"></path>
                                                                </svg></button><!--]--></span>
                                                        <div class="" style="height: calc(100% + 10px + 0px)"></div>
                                                        <div style="display:none;cursor:initial;padding-top:10px;padding-bottom:10px;padding-right:19px;padding-left:19px;" class="Tooltip-container-DIF Tooltip-position-center-CBA Tooltip-right-pvm">
                                                            <div class="Tooltip-triangleContainer-r5D" style="right:0px;">
                                                                <div class="Tooltip-triangle-Qw9"></div>
                                                                <div class="Tooltip-mask-mwQ"></div>
                                                            </div><!--[-->
                                                            <div class="Project-tooltipContent-PBm">Add to Moodboard</div><!--]--><!---->
                                                        </div>
                                                    </div><label id="save-476a8522-cbbc-4ecb-8ad0-9c73613acef3" class="Project-actionName-DD5 Project-moodboardTitle-PRv Project-actionNameFullPage-Nwt">Save</label><!--]-->
                                                    <div class="Tooltip-wrapper-Uzv Project-tooltip-PUI Project-shareAndEmbed-Kf7" style="cursor:pointer;"><span class="Tooltip-trigger-eZ_"><!--[--><button class="Project-resetButton-Bcw Project-sidebarEmbedTrigger-yfA e2e-Project-embedTrigger" aria-labelledby="embed-3fdf03b3-e31c-4608-8af3-340d7981ec36"><svg xmlns="http://www.w3.org/2000/svg" viewbox="-4334 -10720 14 13.363" class="Project-icon-qll">
                                                                    <g transform="translate(-2057 -6445)">
                                                                        <path d="M14.682 6h-2.068a.159.159 0 0 0-.159.159v.955a.159.159 0 0 0 .159.159h1.114v7H2.273v-7h1.113a.159.159 0 0 0 .159-.159v-.955A.159.159 0 0 0 3.386 6H1.318A.318.318 0 0 0 1 6.318v8.909a.318.318 0 0 0 .318.318h13.364a.318.318 0 0 0 .318-.318V6.318A.318.318 0 0 0 14.682 6z" transform="translate(-2278 -4277.182)"></path>
                                                                        <path d="M13.282 3.287L10.188 0 7.1 3.287a.318.318 0 0 0 .237.531h1.579v4.3a.159.159 0 0 0 .159.159H11.3a.159.159 0 0 0 .159-.159v-4.3h1.584a.318.318 0 0 0 .237-.531z" transform="translate(-2280.188 -4275)"></path>
                                                                    </g>
                                                                </svg></button><!--]--></span>
                                                        <div class="" style="height: calc(100% + 10px + 0px)"></div>
                                                        <div style="display:none;cursor:initial;padding-top:10px;padding-bottom:10px;padding-right:19px;padding-left:19px;" class="Tooltip-container-DIF Tooltip-position-center-CBA Tooltip-right-pvm">
                                                            <div class="Tooltip-triangleContainer-r5D" style="right:0px;">
                                                                <div class="Tooltip-triangle-Qw9"></div>
                                                                <div class="Tooltip-mask-mwQ"></div>
                                                            </div><!--[-->
                                                            <div class="Project-tooltipContent-PBm">Share &amp; Embed This Project</div><!--]--><!---->
                                                        </div>
                                                    </div><label id="embed-3fdf03b3-e31c-4608-8af3-340d7981ec36" class="Project-actionName-DD5 Project-actionNameFullPage-Nwt">Share</label><!----><!---->
                                                    <div class="Project-appreciateWithPulsePoint-P5b"><!---->
                                                        <div class="e2e-Appreciate-appreciate-button Project-appreciate-yq7 Project-appreciateTopSidebar-cfm" source="projectContentSidebar">
                                                            <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl Appreciate-tooltip-IT8 js-adobe-analytics" style="cursor:pointer;" data-adobe-analytics="AppreciateClick"><span class="Tooltip-trigger-eZ_"><!--[-->
                                                                    <div role="button" class="Appreciate-wrapper-REw Project-appreciateTopSidebarIcon-_E7" tabindex="0" aria-label="Appreciate"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0.5 0.5 16 16" class="Appreciations-icon-Z4i Appreciate-icon-jRA Project-appreciateTopSidebarThumbSize-p77">
                                                                            <path fill="none" d="M.5.5h16v16H.5z"></path>
                                                                            <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z"></path>
                                                                        </svg><!----></div><!--]-->
                                                                </span>
                                                                <div class="" style="height: calc(100% + 7px + 0px)"></div>
                                                                <div style="display:none;cursor:initial;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;" class="Tooltip-container-DIF Tooltip-position-center-CBA Tooltip-right-pvm">
                                                                    <div class="Tooltip-triangleContainer-r5D" style="right:0px;">
                                                                        <div class="Tooltip-triangle-Qw9"></div>
                                                                        <div class="Tooltip-mask-mwQ"></div>
                                                                    </div><!--[-->
                                                                    <div class="Appreciate-tooltipStyle-Ywy"><!--[-->
                                                                        <div role="button" aria-labelledby="appreciate-a4ec5307-90a4-49a1-9719-2a9dae17df18" tabindex="-1"><span id="appreciate-a4ec5307-90a4-49a1-9719-2a9dae17df18" class="Appreciate-tooltipContent-sJa">Appreciate</span></div><!--]-->
                                                                    </div><!--]--><!---->
                                                                </div>
                                                            </div>
                                                        </div><span class="Project-actionName-DD5 Project-actionNameFullPage-Nwt">Appreciate</span>
                                                    </div><!--[-->
                                                    <div class="FollowButtonLegacy-legacyButton-mPH Project-userActionTablet-f2f e2e-Project-user-action-tablet-follow">
                                                        <div class="user-follow js-action-follow  qa-follow-button-container e2e-follow-button-container form-button-wrap rf-button__container rf-button__container--follow follow-button-container" data-followee="330325461" data-entity="user" data-source="projectTabletFollow" data-project-id="">
                                                            <a tabindex="0" role="button" class="js-form-button-follow e2e-form-button-follow  rf-button rf-button--follow"><span class="rf-button__label">Follow</span></a>
                                                            <a tabindex="0" role="button" class="qa-form-button-following e2e-form-button-following  rf-button rf-button--secondary rf-button--following"><span class="rf-button__label">Following</span></a>
                                                            <a tabindex="0" role="button" class="js-form-button-unfollow e2e-form-button-unfollow  rf-button rf-button--danger rf-button--unfollow"><span class="rf-button__label">Unfollow</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl FollowButtonMinimal-followBtn-ylc Project-userActionPhone-meh" style="cursor:pointer;" type="user"><span class="Tooltip-trigger-eZ_"><!--[-->
                                                            <div class="js-action-follow rf-button__container--follow follow-button-container Project-followContainer-OPn" data-followee="330325461" data-entity="user" data-following="false" data-display-name="MD Sohag Rana" data-source="projectPhoneHeader"><a role="button" class="FollowButtonMinimal-button-jX1 Project-followIconWrap-wvs rf-button--follow" tabindex="0" aria-label="Follow"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 533.333 533.333" class="Project-followIcon-h1X">
                                                                        <path d="M516.7,200H333.3V16.7c0-9.2-7.5-16.7-16.7-16.7h-100C207.5,0,200,7.5,200,16.7V200H16.7C7.5,200,0,207.5,0,216.7v100
	c0,9.2,7.5,16.7,16.7,16.7H200v183.3c0,9.2,7.5,16.7,16.7,16.7h100c9.2,0,16.7-7.5,16.7-16.7V333.3h183.3c9.2,0,16.7-7.5,16.7-16.7
	v-100C533.3,207.5,525.9,200,516.7,200z"></path>
                                                                    </svg><!--]--></a><a role="button" class="FollowButtonMinimal-button-jX1 Project-followIconWrap-wvs FollowButtonMinimal-following-ehF rf-button--following" tabindex="0" aria-label="Unfollow"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="960.186 616.276 170 144" class="Project-followIcon-h1X Project-followIconCheck-ypY">
                                                                        <path d="M1102.077 616.276l-87.46 87.786-26.3-26.322-28.131 28.107 54.695 54.429 115.305-115.613z"></path>
                                                                    </svg><!--]--></a><a role="button" class="FollowButtonMinimal-button-jX1 Project-followIconWrap-wvs FollowButtonMinimal-unfollow-OcM rf-button--unfollow" tabindex="0" aria-label="Unfollow"><!--[--><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="Project-followIcon-h1X">
                                                                        <path d="M0 10h24v4h-24z"></path>
                                                                    </svg><!--]--></a></div><!--]-->
                                                        </span>
                                                        <div class="" style="height: calc(100% + 10px + 0px)"></div>
                                                        <div style="display:none;cursor:initial;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;top:calc(100% + 10px + 0px);right:0px;" class="Tooltip-container-DIF Tooltip-position-bottom-CSC Tooltip-right-pvm">
                                                            <div class="Tooltip-triangleContainer-r5D" style="right:0px;">
                                                                <div class="Tooltip-triangle-Qw9"></div>
                                                                <div class="Tooltip-mask-mwQ"></div>
                                                            </div><!--[-->
                                                            <div class="js-action-follow FollowButtonMinimal-tooltipStyle-b0n" data-followee="330325461" data-entity="user" data-following="false" data-display-name="MD Sohag Rana" data-source="projectPhoneHeader"><label class="FollowButtonMinimal-tooltipContent-lbu FollowButtonMinimal-followTooltip-B7Z">Follow</label><label class="FollowButtonMinimal-tooltipContent-lbu FollowButtonMinimal-unfollowTooltip-UYx">Unfollow</label></div><!--]--><!---->
                                                        </div>
                                                    </div><!--]-->
                                                </div>
                                            </div><!---->
                                            <div class="Project-main-oWL">
                                                <div class="Project-topElement-P3R qa-project-owners e2e-Project-owners Project-fullPageOwner-gxM">
                                                    <div class="Avatar-pie-vQ0 Avatar-root-cxI e2e-topElement-Avatar">
                                                        <div>
                                                            <div aria-haspopup="true" class="">
                                                                <div aria-describedby="0fab568a-a4ce-40cb-b522-c253cd2d06ac" class="Popover-activator-M8N Miniprofile-activator-dDq"><!--[--><span><!--[--><a target="_blank" href="https://www.behance.net/sohaguixd" data-entity="user" data-following="false" data-source="avatar" class="Avatar-avatar-G8t Avatar-avatarHover-z4f" style="height:40px;width:40px;min-height:40px;min-width:40px;"><!---->
                                                                            <div style="height:40px;width:40px;min-height:40px;min-width:40px;"><img class="AvatarImage-avatarImage-PUL Avatar-avatarImage-VBb e2e-Miniprofile-Avatar" src="https://mir-s3-cdn-cf.behance.net/user/100/f1d666330325461.62760c6bc2f98.png" alt="MD Sohag Rana&#39;s profile" srcset="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png 50w, https://mir-s3-cdn-cf.behance.net/user/100/f1d666330325461.62760c6bc2f98.png 100w" loading="lazy" sizes="40px" draggable="false" data-id="330325461"></div>
                                                                        </a><!--]--></span><!--]--></div><!---->
                                                            </div>
                                                        </div><!---->
                                                    </div>
                                                    <figcaption class="Project-caption-ayk">
                                                        <div class="Project-titleRow-QSo">
                                                            <h1 class="Project-title-Q6Q">E-commerce Fashion Shop Web UI design</h1><!---->
                                                        </div>
                                                        <div class="Project-ownerItems-qza"><a class="Project-ownerName-A8O" data-id="330325461" href="https://www.behance.net/sohaguixd" target="_blank">
                                                                <div aria-haspopup="true" class="e2e-topElement-displayName">
                                                                    <div aria-describedby="fdac1ed1-0b45-4eab-a204-14a9e4fcec03" class="Popover-activator-M8N Miniprofile-activator-dDq"><!--[--><span><!--[-->MD Sohag Rana<!--]--></span><!--]--></div><!---->
                                                                </div>
                                                            </a><!----><span class="Project-separator-j9H">•</span>
                                                            <div class="FollowButtonLegacy-legacyButton-mPH Project-captionFollow-fY4">
                                                                <div class="js-action-follow  form-button-wrap rf-button__container rf-button__container--follow follow-button-container rf-button__container--follow-link" data-followee="330325461" data-entity="user" data-following="false" data-display-name="MD Sohag Rana" data-source="projectHeader" data-project-id="">
                                                                    <a class="js-form-button-follow e2e-form-button-follow rf-button--small rf-button rf-button--follow"><span class="rf-button__label">Follow</span></a>
                                                                    <a class="e2e-form-button-following rf-button--small rf-button rf-button--secondary rf-button--following"><span class="rf-button__label">Following</span></a>
                                                                    <a class="js-form-button-unfollow e2e-form-button-unfollow rf-button--small rf-button rf-button--danger rf-button--unfollow"><span class="rf-button__label">Unfollow</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                    <div class="Project-featureContainer-NMJ qa-project-feature-container"><!--[--><!--]--></div>
                                                </div><!---->
                                                <div class="project-content-wrap">
                                                    <div id="primary-project-content" class="project-styles Project-projectModules-yET zero-top">
                                                        <div id="project-canvas"><!---->
                                                            <div id="project-modules"><!---->
                                                                <div><!--[-->
                                                                    <section class="Project-projectModuleContainer-BtF Preview__project--topMargin e2e-Project-module-container project-module-container" aria-label="Project Module 0">
                                                                        <div class="Module-module-Bce root module-container-reference">
                                                                            <div class="js-project-module js-project-module--image project-module module image e2e-Project-modules-image project-module-image image-full project-module-image-full Image-root-d82">
                                                                                <div class="js-project-lightbox-link e2e-Project-modules-image-lightbox-link project-module-image-inner-wrap js-module-container-reference" tabindex="0"><!---->
                                                                                    <div>
                                                                                        <script type="text/html" class="js-lightbox-slide-content" data-ut="lightbox-script">
                                                                                            <div class="project-lightbox-image-container image-is-tall e2e-Project-lightbox-container">
                                                                                                <img data-ut="lightbox-image" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_3840/cc0e82126991995.6138c3f6cec43.jpg" srcset="https://mir-s3-cdn-cf.behance.net/project_modules/disp/cc0e82126991995.6138c3f6cec43.jpg 600w,https://mir-s3-cdn-cf.behance.net/project_modules/fs/cc0e82126991995.6138c3f6cec43.jpg 1920w,https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/cc0e82126991995.6138c3f6cec43.jpg 1200w,https://mir-s3-cdn-cf.behance.net/project_modules/1400/cc0e82126991995.6138c3f6cec43.jpg 1400w,https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/cc0e82126991995.6138c3f6cec43.jpg 1400w,https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/cc0e82126991995.6138c3f6cec43.jpg 2800w,https://mir-s3-cdn-cf.behance.net/project_modules/max_3840/cc0e82126991995.6138c3f6cec43.jpg 2880w," sizes="(max-width: 2880px) 100vw, 2880px">
                                                                                                <div class="project-item-lightbox__actions centered qa-lightbox-actions lightbox-extra">
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-add-to-collection" data-id="720544201"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-similar-images" data-id="720544201"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-trigger" data-id="720544201"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-permalink" data-id="720544201"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-cai" data-id="720544201"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-cai-claim lightbox-cai-claim-action" data-id="720544201"></div>
                                                                                                </div>
                                                                                                <div class="project-item-lightbox__action js-module-lightbox-source-files js-grid-item-lightbox-source-files project-module-lightbox__source-files" data-id="720544201"></div>
                                                                                            </div>
                                                                                            <div class="project-item-lightbox__caption js-lightbox-caption qa-lightbox-caption" data-id="720544201"></div>
                                                                                        </script>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="project-module__actions">
                                                                                            <div class="project-module__actions-container">
                                                                                                <div class="project-module__action js-module-similar-images" data-id="720544201"></div>
                                                                                                <div class="project-module__action js-module-add-to-collection" data-id="720544201"></div>
                                                                                                <div class="project-module__action js-module-trigger" data-id="720544201"></div>
                                                                                                <div class="project-module__action js-module-permalink" data-id="720544201"></div>
                                                                                                <div class="project-module__action js-module-takedown-admin" data-id="720544201"></div>
                                                                                                <div class="project-module__action js-module-cai" data-id="720544201"></div>
                                                                                                <div class="project-module__action js-module-cai-claim module-cai-claim-action" data-id="720544201"></div>
                                                                                            </div>
                                                                                            <div class="project-module__action js-module-source-files project-module__action-source-files" data-id="720544201"></div>

                                                                                        </div>
                                                                                    </div><!--[-->
                                                                                    <div class="ImageElement-root-kir"><!--[--><img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/cc0e82126991995.6138c3f6cec43.jpg" srcset="https://mir-s3-cdn-cf.behance.net/project_modules/disp/cc0e82126991995.6138c3f6cec43.jpg 600w, https://mir-s3-cdn-cf.behance.net/project_modules/fs/cc0e82126991995.6138c3f6cec43.jpg 1920w, https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/cc0e82126991995.6138c3f6cec43.jpg 1200w, https://mir-s3-cdn-cf.behance.net/project_modules/1400/cc0e82126991995.6138c3f6cec43.jpg 1400w, https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/cc0e82126991995.6138c3f6cec43.jpg 1400w, https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/cc0e82126991995.6138c3f6cec43.jpg 2800w, https://mir-s3-cdn-cf.behance.net/project_modules/max_3840/cc0e82126991995.6138c3f6cec43.jpg 2880w" sizes="(max-width: 1400px) 100vw, 1400px" class="ImageElement-image-SRv ImageElement-blockPointerEvents-Rkg" alt="Clothing e-commerce Ecommerce Fashion  landing page online store ui design UI/UX Web Design  Woocommerce" loading="eager" fetchpriority="high">
                                                                                        <div class="ImageElement-placeholder-Cz6" style="width:1400px;padding-bottom:388.92857142857144%;"></div><!--]-->
                                                                                    </div><!--]-->
                                                                                </div><!---->
                                                                            </div>
                                                                        </div>
                                                                        <div class="spacer module-separator">
                                                                            <div class="divider"></div>
                                                                        </div>
                                                                    </section>
                                                                    <section class="Project-projectModuleContainer-BtF Preview__project--topMargin e2e-Project-module-container project-module-container" aria-label="Project Module 1">
                                                                        <div class="Module-module-Bce root module-container-reference">
                                                                            <div class="js-project-module js-project-module--image project-module module image e2e-Project-modules-image project-module-image image-full project-module-image-full Image-root-d82">
                                                                                <div class="js-project-lightbox-link e2e-Project-modules-image-lightbox-link project-module-image-inner-wrap js-module-container-reference" tabindex="0"><!---->
                                                                                    <div>
                                                                                        <script type="text/html" class="js-lightbox-slide-content" data-ut="lightbox-script">
                                                                                            <div class="project-lightbox-image-container  e2e-Project-lightbox-container">
                                                                                                <img data-ut="lightbox-image" src="https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/32542d126991995.6138c53faa05c.gif" srcset="https://mir-s3-cdn-cf.behance.net/project_modules/disp/32542d126991995.6138c53faa05c.gif 600w,https://mir-s3-cdn-cf.behance.net/project_modules/fs/32542d126991995.6138c53faa05c.gif 1400w,https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/32542d126991995.6138c53faa05c.gif 1200w,https://mir-s3-cdn-cf.behance.net/project_modules/1400/32542d126991995.6138c53faa05c.gif 1400w,https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/32542d126991995.6138c53faa05c.gif 1400w," sizes="(max-width: 1400px) 100vw, 1400px">
                                                                                                <div class="project-item-lightbox__actions  qa-lightbox-actions lightbox-extra">
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-add-to-collection" data-id="720545953"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-similar-images" data-id="720545953"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-trigger" data-id="720545953"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-permalink" data-id="720545953"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-cai" data-id="720545953"></div>
                                                                                                    <div class="project-item-lightbox__action js-module-lightbox-cai-claim lightbox-cai-claim-action" data-id="720545953"></div>
                                                                                                </div>
                                                                                                <div class="project-item-lightbox__action js-module-lightbox-source-files js-grid-item-lightbox-source-files project-module-lightbox__source-files" data-id="720545953"></div>
                                                                                            </div>
                                                                                            <div class="project-item-lightbox__caption js-lightbox-caption qa-lightbox-caption" data-id="720545953"></div>
                                                                                        </script>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="project-module__actions">
                                                                                            <div class="project-module__actions-container">
                                                                                                <div class="project-module__action js-module-similar-images" data-id="720545953"></div>
                                                                                                <div class="project-module__action js-module-add-to-collection" data-id="720545953"></div>
                                                                                                <div class="project-module__action js-module-trigger" data-id="720545953"></div>
                                                                                                <div class="project-module__action js-module-permalink" data-id="720545953"></div>
                                                                                                <div class="project-module__action js-module-takedown-admin" data-id="720545953"></div>
                                                                                                <div class="project-module__action js-module-cai" data-id="720545953"></div>
                                                                                                <div class="project-module__action js-module-cai-claim module-cai-claim-action" data-id="720545953"></div>
                                                                                            </div>
                                                                                            <div class="project-module__action js-module-source-files project-module__action-source-files" data-id="720545953"></div>

                                                                                        </div>
                                                                                    </div><!--[-->
                                                                                    <div class="ImageElement-root-kir"><!--[--><img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/32542d126991995.6138c53faa05c.gif" srcset="https://mir-s3-cdn-cf.behance.net/project_modules/disp/32542d126991995.6138c53faa05c.gif 600w, https://mir-s3-cdn-cf.behance.net/project_modules/fs/32542d126991995.6138c53faa05c.gif 1400w, https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/32542d126991995.6138c53faa05c.gif 1200w, https://mir-s3-cdn-cf.behance.net/project_modules/1400/32542d126991995.6138c53faa05c.gif 1400w, https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/32542d126991995.6138c53faa05c.gif 1400w" sizes="(max-width: 1400px) 100vw, 1400px" class="ImageElement-image-SRv ImageElement-blockPointerEvents-Rkg" alt="Clothing e-commerce Ecommerce Fashion  landing page online store ui design UI/UX Web Design  Woocommerce" loading="lazy" fetchpriority="auto">
                                                                                        <div class="ImageElement-placeholder-Cz6" style="width:1400px;padding-bottom:28.57142857142857%;"></div><!--]-->
                                                                                    </div><!--]-->
                                                                                </div><!---->
                                                                            </div>
                                                                        </div>
                                                                        <div class="spacer module-separator">
                                                                            <div class="divider"></div>
                                                                        </div>
                                                                    </section>
                                                                    <section class="Project-projectModuleContainer-BtF Preview__project--topMargin e2e-Project-module-container project-module-container" aria-label="Project Module 2">
                                                                        <div class="Module-module-Bce root module-container-reference"><!--[--><!---->
                                                                            <div class="">
                                                                                <div class="project-module js-project-module--text module project-module-text text align-center module-content-text">
                                                                                    <div class="main-text">
                                                                                        <div style="text-align:center;"><br></div>
                                                                                        <div style="text-align:center;"><a href="https://www.uplabs.com/posts/e-commerce-fashion-shop-web-ui-design" target="_blank" rel="nofollow"><span class="texteditor-inline-color" style="color:#38CE2A;"><span class="texteditor-inline-fontsize" style="font-size:32px;"><span class="bold">Download</span></span></span></a><br></div>
                                                                                        <div style="text-align:center;"><br></div>
                                                                                        <div style="text-align:center;"><span class="texteditor-inline-color" style="color:#3d3d3f;">Looking for UX/UI Designer for Project?</span></div>
                                                                                        <div style="text-align:center;"><span class="texteditor-inline-color" style="color:#3d3d3f;">Send me message: isohag450@gmail.com</span></div>
                                                                                        <div style="text-align:center;"><span class="texteditor-inline-color" style="color:#3d3d3f;"><br></span></div>
                                                                                        <div style="text-align:center;"><span class="texteditor-inline-color" style="color:#3d3d3f;">Follow me on</span><br><a href="https://www.uplabs.com/sohaguixd" target="_blank" rel="nofollow">Uplabs</a> | <a href="https://dribbble.com/sohaguixd" target="_blank" rel="nofollow">Dribbble</a> | <a href="https://www.instagram.com/sohaguixd/" target="_blank" rel="nofollow">Instagram</a><a href="https://www.instagram.com/mhmanik02" rel="nofollow"> </a>| <a href="https://www.linkedin.com/in/sohaguix/" target="_blank" rel="nofollow">Linkedin</a> |<a href="https://www.fiverr.com/users/creative_sohag" target="_blank" rel="nofollow"> </a><a href="http://www.facebook.com/sohaguixd" target="_blank" rel="nofollow">Facebook</a> | <a href="https://medium.com/sohaguixd" target="_blank" rel="nofollow">Medium</a> | <a href="https://www.fiverr.com/creative_sohag/modern-ui-ux-photoshop-psd-web-mockup-template-xd-figma-web-design" target="_blank" rel="nofollow">Fiverr</a></div>
                                                                                        <div style="text-align:center;"><br></div>
                                                                                        <div style="text-align:center;"><span class="texteditor-inline-color" style="color:#3d3d3f;">Thanks For Watching​​​​​​​ </span>💙</div>
                                                                                        <div style="text-align:center;"><br></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!----><!--]-->
                                                                        </div>
                                                                        <div class="spacer module-separator Project-minSpacer-zVZ"><!----></div>
                                                                    </section><!--]-->
                                                                </div>
                                                                <div>
                                                                    <script type="text/html" class="js-lightbox-overlay-slide">
                                                                        <div class="lightbox-overlay-slide">
                                                                            <div class="js-last-slide last-slide"></div>
                                                                            <div class="other-projects">
                                                                                <div class="owners">
                                                                                    <span class="owners__by">Other projects by</span>
                                                                                    <div class="owners__name rf-tooltip--container">
                                                                                        <a class="owners-link" data-id="330325461" href="https://www.behance.net/sohaguixd">MD Sohag Rana</a>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="project-covers">
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="129190183" data-slug="Task-Manager-Mobile-App-UI-UX-Design-Case-Study" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg 2x" alt="Task Manager Mobile App UI UX Design Case Study" title="Task Manager Mobile App UI UX Design Case Study" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Task Manager Mobile App UI UX Design Case Study</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list rf-tooltip--container">
                                                                                                    Multiple Owners
                                                                                                    <div class="rf-tooltip--main ">
                                                                                                        <div class="rf-multiple-owners-container">
                                                                                                            <div class="rf-owners__owner">
                                                                                                                <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                                    <span class="rf-owners__owner-image-container">
                                                                                                                        <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                                    </span>

                                                                                                                    <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                        <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="rf-owners__owner">
                                                                                                                <a class="rf-owners__owner-link" href="https://www.behance.net/gravity-ltd">
                                                                                                                    <span class="rf-owners__owner-image-container">
                                                                                                                        <img class="rf-owners__owner-image" data-id="1353740217" src="https://mir-s3-cdn-cf.behance.net/user/50/134d801353740217.644be65dbd7b8.png" />
                                                                                                                    </span>

                                                                                                                    <span class="rf-owners__owner-name" data-id="1353740217">
                                                                                                                        <span class="rf-owners__owner-name-by">by:</span> Gravity ™
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">114</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">3023</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="124763303" data-slug="Business-Consultant-Landing-Page-Web-design" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg 2x" alt="Business Consultant Landing Page Web design" title="Business Consultant Landing Page Web design" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Business Consultant Landing Page Web design</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list ">

                                                                                                    <div class="rf-owners__owner">
                                                                                                        <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                            <span class="rf-owners__owner-image-container">
                                                                                                                <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                            </span>

                                                                                                            <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">78</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">1178</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="125376063" data-slug="Digital-Agency-Landing-page-Web-design" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg 2x" alt="Digital Agency Landing page Web design" title="Digital Agency Landing page Web design" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Digital Agency Landing page Web design</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list rf-tooltip--container">
                                                                                                    Multiple Owners
                                                                                                    <div class="rf-tooltip--main ">
                                                                                                        <div class="rf-multiple-owners-container">
                                                                                                            <div class="rf-owners__owner">
                                                                                                                <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                                    <span class="rf-owners__owner-image-container">
                                                                                                                        <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                                    </span>

                                                                                                                    <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                        <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="rf-owners__owner">
                                                                                                                <a class="rf-owners__owner-link" href="https://www.behance.net/gravity-ltd">
                                                                                                                    <span class="rf-owners__owner-image-container">
                                                                                                                        <img class="rf-owners__owner-image" data-id="1353740217" src="https://mir-s3-cdn-cf.behance.net/user/50/134d801353740217.644be65dbd7b8.png" />
                                                                                                                    </span>

                                                                                                                    <span class="rf-owners__owner-name" data-id="1353740217">
                                                                                                                        <span class="rf-owners__owner-name-by">by:</span> Gravity ™
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">97</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">2551</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="126085903" data-slug="E-commerce-Furniture-Store-Shopify-Landing-page" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg 2x" alt="E-commerce Furniture Store Shopify Landing page" title="E-commerce Furniture Store Shopify Landing page" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">E-commerce Furniture Store Shopify Landing page</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list rf-tooltip--container">
                                                                                                    Multiple Owners
                                                                                                    <div class="rf-tooltip--main ">
                                                                                                        <div class="rf-multiple-owners-container">
                                                                                                            <div class="rf-owners__owner">
                                                                                                                <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                                    <span class="rf-owners__owner-image-container">
                                                                                                                        <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                                    </span>

                                                                                                                    <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                        <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="rf-owners__owner">
                                                                                                                <a class="rf-owners__owner-link" href="https://www.behance.net/gravity-ltd">
                                                                                                                    <span class="rf-owners__owner-image-container">
                                                                                                                        <img class="rf-owners__owner-image" data-id="1353740217" src="https://mir-s3-cdn-cf.behance.net/user/50/134d801353740217.644be65dbd7b8.png" />
                                                                                                                    </span>

                                                                                                                    <span class="rf-owners__owner-name" data-id="1353740217">
                                                                                                                        <span class="rf-owners__owner-name-by">by:</span> Gravity ™
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">258</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">4684</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="124608545" data-slug="eFood-Delivery-Landing-Page-Web-Design" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg 2x" alt="eFood - Delivery Landing Page Web Design" title="eFood - Delivery Landing Page Web Design" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">eFood - Delivery Landing Page Web Design</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list ">

                                                                                                    <div class="rf-owners__owner">
                                                                                                        <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                            <span class="rf-owners__owner-image-container">
                                                                                                                <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                            </span>

                                                                                                            <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">74</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">1327</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="140920423" data-slug="Food-Restaurant-Landing-Page-Web-Design" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg 2x" alt="Food Restaurant Landing Page Web Design" title="Food Restaurant Landing Page Web Design" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Food Restaurant Landing Page Web Design</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list ">

                                                                                                    <div class="rf-owners__owner">
                                                                                                        <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                            <span class="rf-owners__owner-image-container">
                                                                                                                <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                            </span>

                                                                                                            <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">25</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">345</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="123215189" data-slug="Online-Learning-Educational-Web-Design" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg 2x" alt="Online Learning- Educational Web Design" title="Online Learning- Educational Web Design" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Online Learning- Educational Web Design</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list rf-tooltip--container">
                                                                                                    Multiple Owners
                                                                                                    <div class="rf-tooltip--main ">
                                                                                                        <div class="rf-multiple-owners-container">
                                                                                                            <div class="rf-owners__owner">
                                                                                                                <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                                    <span class="rf-owners__owner-image-container">
                                                                                                                        <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                                    </span>

                                                                                                                    <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                        <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="rf-owners__owner">
                                                                                                                <a class="rf-owners__owner-link" href="https://www.behance.net/gravity-ltd">
                                                                                                                    <span class="rf-owners__owner-image-container">
                                                                                                                        <img class="rf-owners__owner-image" data-id="1353740217" src="https://mir-s3-cdn-cf.behance.net/user/50/134d801353740217.644be65dbd7b8.png" />
                                                                                                                    </span>

                                                                                                                    <span class="rf-owners__owner-name" data-id="1353740217">
                                                                                                                        <span class="rf-owners__owner-name-by">by:</span> Gravity ™
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">132</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">4270</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="124065245" data-slug="Ejob-Job-Finder-Landing-page-Web-Design" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg 2x" alt="Ejob - Job Finder Landing page Web Design" title="Ejob - Job Finder Landing page Web Design" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Ejob - Job Finder Landing page Web Design</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list ">

                                                                                                    <div class="rf-owners__owner">
                                                                                                        <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                            <span class="rf-owners__owner-image-container">
                                                                                                                <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                            </span>

                                                                                                            <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">68</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">2139</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="122713367" data-slug="Healthcare-Doctor-Appointment-Website-UI-Design-" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg 2x" alt="Healthcare - Doctor Appointment Website UI Design ⚕️" title="Healthcare - Doctor Appointment Website UI Design ⚕️" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Healthcare - Doctor Appointment Website UI Design ⚕️</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list ">

                                                                                                    <div class="rf-owners__owner">
                                                                                                        <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                            <span class="rf-owners__owner-image-container">
                                                                                                                <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                            </span>

                                                                                                            <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">28</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">1076</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="125256565" data-slug="Landing-Page-Web-UI-Design" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg 2x" alt="Landing Page Web UI Design" title="Landing Page Web UI Design" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Landing Page Web UI Design</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list ">

                                                                                                    <div class="rf-owners__owner">
                                                                                                        <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                            <span class="rf-owners__owner-image-container">
                                                                                                                <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                            </span>

                                                                                                            <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">24</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">514</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rf-project-cover rf-project-cover--project js-item js-project-cover e2e-ProjectCoverNeue editable " data-id="114119229" data-slug="Ukilbabu-Lawyer-Consultant-iOS-Mobile-App-UX-Case-Study" data-from="lightbox">




                                                                                        <a target="_blank" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__image-container js-project-cover-image-link js-project-link">
                                                                                            <img class="rf-project-cover__image js-cover-image" src="https://mir-s3-cdn-cf.behance.net/projects/202/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg" srcset="https://mir-s3-cdn-cf.behance.net/projects/202/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg, https://mir-s3-cdn-cf.behance.net/projects/404/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg 2x" alt="Ukilbabu Lawyer Consultant iOS Mobile App UX Case Study" title="Ukilbabu Lawyer Consultant iOS Mobile App UX Case Study" />
                                                                                        </a>


                                                                                        <div class="rf-project-cover__details">
                                                                                            <span class="rf-project-cover__title-wrap">
                                                                                                <a class="rf-project-cover__title js-project-cover-title-link" href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design">Ukilbabu Lawyer Consultant iOS Mobile App UX Case Study</a>
                                                                                            </span>

                                                                                            <div class="rf-owners ">
                                                                                                <span class="rf-owners__list ">

                                                                                                    <div class="rf-owners__owner">
                                                                                                        <a class="rf-owners__owner-link" href="https://www.behance.net/sohaguixd">
                                                                                                            <span class="rf-owners__owner-image-container">
                                                                                                                <img class="rf-owners__owner-image" data-id="330325461" src="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png" />
                                                                                                            </span>

                                                                                                            <span class="rf-owners__owner-name" data-id="330325461">
                                                                                                                <span class="rf-owners__owner-name-by">by:</span> MD Sohag Rana
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>

                                                                                            <div class="rf-project-cover__fields">
                                                                                                <ul class="rf-project-cover__fields-list">
                                                                                                    <li class="rf-project-cover__field">
                                                                                                        <a href="" title="" class="rf-project-cover__field-link"></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="rf-project-cover__curation-stats cover-stat-wrap"></div>
                                                                                            </div>
                                                                                            <div class="rf-project-cover__stats">
                                                                                                <div class="rf-project-cover__curation-marks js-project-cover-curation-marks"></div>

                                                                                                <div class="rf-project-cover__stat-container">
                                                                                                    <a href="https://www.behance.net/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design" class="rf-project-cover__stat-link js-project-cover-stats-link" tabindex="-1">
                                                                                                        <span class="rf-project-cover__stat">
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--appreciate" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.5 0.5 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">31</span>
                                                                                                            </span>
                                                                                                            <span class="rf-project-cover__stat">
                                                                                                                <svg class="rf-icon rf-icon--views" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                                                                                    <path fill="none" d="M.5.5h16v16H.5z" />
                                                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z" />
                                                                                                                </svg>
                                                                                                                <span class="rf-project-cover__stat-number">1000</span>
                                                                                                            </span>
                                                                                                        </span>

                                                                                                    </a>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </script>
                                                                </div><!----><!---->
                                                            </div>
                                                        </div>
                                                        <div class="e2e-Appreciate-appreciate-button Project-floatingUserActionTablet-EUf Project-appreciateMobile-jL3" source="mobile">
                                                            <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl Appreciate-tooltip-IT8 js-adobe-analytics" style="cursor:pointer;" data-adobe-analytics="AppreciateClick"><span class="Tooltip-trigger-eZ_"><!--[-->
                                                                    <div role="button" class="Appreciate-wrapper-REw Project-appreciateMobileIcon-WOd" tabindex="0" aria-label="Appreciate"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0.5 0.5 16 16" class="Appreciations-icon-Z4i Appreciate-icon-jRA Project-appreciateMobileThumbSize-P8M">
                                                                            <path fill="none" d="M.5.5h16v16H.5z"></path>
                                                                            <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z"></path>
                                                                        </svg><!----></div><!--]-->
                                                                </span>
                                                                <div class="Tooltip-topPositionHitBox-Q8Z" style="height: calc(100% + 7px + 6px)"></div>
                                                                <div style="display:none;cursor:initial;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;bottom:calc(100% + 7px + 6px);right:0px;" class="Tooltip-container-DIF Tooltip-position-top-FZF Tooltip-right-pvm">
                                                                    <div class="Tooltip-triangleContainer-r5D" style="right:10px;">
                                                                        <div class="Tooltip-triangle-Qw9"></div>
                                                                        <div class="Tooltip-mask-mwQ"></div>
                                                                    </div><!--[-->
                                                                    <div class="Appreciate-tooltipStyle-Ywy"><!--[-->
                                                                        <div class="Project-loggedOutAppreciation-uEv">
                                                                            <div>
                                                                                <div class="SignUpContent-signUpTitle-fSQ">Join Behance</div>
                                                                                <div class="SignUpContent-signUpMessage-S10"><a data-signup-from="context" class="SignUpContent-signUpActions-nTp js-adobeid-signup">Sign up</a> or <a data-signin-from="context" class="SignUpContent-signUpActions-nTp js-adobeid-signin">Sign in</a> <span>to view personalized recommendations, follow creatives, and more.</span></div>
                                                                                <div class="SignUpContent-callToAction-N8m">
                                                                                    <div class="SignUpButtons-container-Uh3"><button class="Btn-button-CqT Btn-primary-wt8 Btn-normal-If5 SignUpButtons-signup-O9S js-adobeid-signup" type="button" target="_self" role="button" data-signup-from="Project_appreciate_mobile_sign_up_content" data-entity="user" data-following="false">
                                                                                            <div class="Btn-labelWrapper-_Re"><!---->
                                                                                                <div class="Btn-label-QJi e2e-Btn-label"><!--[--><label class="SignUpButtons-desktop-bS2">Sign Up With Email</label><label class="SignUpButtons-phone-yP2">Sign Up</label><!--]--></div><!---->
                                                                                            </div>
                                                                                        </button><!--[--><span class="SignUpButtons-or-u_o SignUpButtons-desktop-bS2">or</span><a class="SignUpButtons-appleIcon-jke js-adobeid-signin" data-signin-from="Project_appreciate_mobile_sign_up_content" data-adobeid-social-provider="apple"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 34 34" usecolor="true" class="">
                                                                                                <defs></defs>
                                                                                                <g>
                                                                                                    <g fill="#fff" stroke="#e8e8e8" transform="translate(1 1)">
                                                                                                        <circle cx="16" cy="16" r="16" stroke="none"></circle>
                                                                                                        <circle cx="16" cy="16" r="16.5" fill="none"></circle>
                                                                                                    </g>
                                                                                                    <path d="M22.748 20.099a7.745 7.745 0 01-.766 1.377A7 7 0 0121 22.671a1.914 1.914 0 01-1.268.558 3.178 3.178 0 01-1.171-.28 3.361 3.361 0 00-1.261-.278 3.475 3.475 0 00-1.3.279 3.489 3.489 0 01-1.121.295 1.8 1.8 0 01-1.3-.573 7.347 7.347 0 01-1.029-1.235 8.539 8.539 0 01-1.092-2.168A7.937 7.937 0 0111 16.686a4.718 4.718 0 01.62-2.469 3.634 3.634 0 011.3-1.312 3.49 3.49 0 011.754-.5 4.13 4.13 0 011.357.316 4.362 4.362 0 001.069.321 6.44 6.44 0 001.2-.373 3.944 3.944 0 011.62-.288 3.444 3.444 0 012.7 1.42 3 3 0 00-1.592 2.726 3.008 3.008 0 00.985 2.272 3.245 3.245 0 00.987.647q-.119.344-.252.66zM20 9.285a3.039 3.039 0 01-.78 1.993 2.654 2.654 0 01-2.2 1.088 2.218 2.218 0 01-.02-.267 3.123 3.123 0 01.827-2.014 3.182 3.182 0 011.006-.759 3 3 0 011.152-.327 2.587 2.587 0 01.015.286z"></path>
                                                                                                </g>
                                                                                            </svg></a><a class="SignUpButtons-fbIcon-zWz js-adobeid-signin" data-signin-from="Project_appreciate_mobile_sign_up_content" data-adobeid-social-provider="facebook"><svg viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="">
                                                                                                <g transform="translate(-1654 -928)">
                                                                                                    <circle class="Facebook-circle-Hk3" transform="translate(1654 928)" cx="16" cy="16" r="16"></circle>
                                                                                                    <path class="Facebook-icon-Qqf" d="M1671.395 953v-7.3h2.45l.367-2.846h-2.817v-1.815c0-.826.226-1.384 1.412-1.384h1.5v-2.542a19.964 19.964 0 0 0-2.192-.113 3.425 3.425 0 0 0-3.658 3.756v2.1H1666v2.844h2.457v7.3z"></path>
                                                                                                </g>
                                                                                            </svg></a><a class="SignUpButtons-googleIcon-fVg js-adobeid-signin" data-signin-from="Project_appreciate_mobile_sign_up_content" data-adobeid-social-provider="google"><svg viewbox="0 0 34 34" xmlns="http://www.w3.org/2000/svg" class="">
                                                                                                <g transform="translate(-1693 -927)">
                                                                                                    <circle transform="translate(1694 928)" cx="16" cy="16" r="16" stroke="#e8e8e8" fill="#fff"></circle>
                                                                                                    <path d="M1717.68 944.182a9.192 9.192 0 0 0-.145-1.636H1710v3.095h4.305a3.68 3.68 0 0 1-1.6 2.415v2.006h2.585a7.8 7.8 0 0 0 2.39-5.88z" fill="#4285f4" fill-rule="evenodd"></path>
                                                                                                    <path d="M1710 952a7.638 7.638 0 0 0 5.294-1.938l-2.585-2.007a4.826 4.826 0 0 1-7.185-2.535h-2.673v2.073A8 8 0 0 0 1710 952z" fill="#34a853" fill-rule="evenodd"></path>
                                                                                                    <path d="M1705.5 945.52a4.73 4.73 0 0 1 0-3.04v-2.073h-2.673a8.01 8.01 0 0 0 0 7.185l2.673-2.073z" fill="#fbbc05" fill-rule="evenodd"></path>
                                                                                                    <path d="M1710 939.182a4.322 4.322 0 0 1 3.058 1.2l2.295-2.295A7.688 7.688 0 0 0 1710 936a8 8 0 0 0-7.149 4.407l2.673 2.073a4.768 4.768 0 0 1 4.476-3.3z" fill="#ea4335" fill-rule="evenodd"></path>
                                                                                                </g>
                                                                                            </svg></a><!--]--></div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--]-->
                                                                    </div><!--]--><span class="Tooltip-closeIconWrapper-Oo4"><svg class="Tooltip-closeIcon-WS8 rf-icon Tooltip-closeIcon-WS8" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8.09 8.08">
                                                                            <path d="M5.18 4.05L7.84 6.7a.75.75 0 0 1 .2.27.88.88 0 0 1 0 .31.83.83 0 0 1-.06.3.63.63 0 0 1-.18.27.42.42 0 0 1-.12.11l-.15.08h-.15a.72.72 0 0 1-.3 0h-.15l-.15-.08a.41.41 0 0 1-.12-.11L4.04 5.18 1.37 7.84a.42.42 0 0 1-.12.11l-.15.08H.95a.72.72 0 0 1-.3 0H.5l-.15-.08a.41.41 0 0 1-.12-.11.63.63 0 0 1-.19-.26.83.83 0 0 1 0-.3.88.88 0 0 1 0-.31.75.75 0 0 1 .18-.27L2.9 4.05.24 1.38a.63.63 0 0 1-.2-.27.83.83 0 0 1 0-.3.88.88 0 0 1 0-.29.75.75 0 0 1 .18-.27.73.73 0 0 1 .27-.18.84.84 0 0 1 .61 0 .73.73 0 0 1 .27.18l2.67 2.66L6.71.24a.73.73 0 0 1 .27-.18.84.84 0 0 1 .61 0 .73.73 0 0 1 .27.18.75.75 0 0 1 .18.28.88.88 0 0 1 0 .29.83.83 0 0 1-.06.3.63.63 0 0 1-.18.27L5.18 4.05z"></path>
                                                                        </svg></span>
                                                                </div>
                                                            </div>
                                                        </div><!---->
                                                    </div>
                                                    <div class="Project-belowProjectContent-CwK"></div>
                                                    <div class="Project-appreciateBottomContainer-dgs e2e-Project-bottomAppreciateSection-container">
                                                        <div class="e2e-Appreciate-appreciate-button Project-appreciateBottom-Wgy" source="projectContentBottom">
                                                            <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl Appreciate-tooltip-IT8 js-adobe-analytics" style="cursor:pointer;" data-adobe-analytics="AppreciateClick"><span class="Tooltip-trigger-eZ_"><!--[-->
                                                                    <div role="button" class="Appreciate-wrapper-REw Project-appreciateBottomIcon-jmk" tabindex="0" aria-label="Appreciate"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0.5 0.5 16 16" class="Appreciations-icon-Z4i Appreciate-icon-jRA Project-appreciateBottomThumbSize-UkL">
                                                                            <path fill="none" d="M.5.5h16v16H.5z"></path>
                                                                            <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z"></path>
                                                                        </svg><!----></div><!--]-->
                                                                </span>
                                                                <div class="" style="height: calc(100% + 7px + 0px)"></div>
                                                                <div style="display:none;cursor:initial;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;top:calc(100% + 7px + 0px);" class="Tooltip-container-DIF Tooltip-position-bottom-CSC Tooltip-center-krh">
                                                                    <div class="Tooltip-triangleContainer-r5D" style="">
                                                                        <div class="Tooltip-triangle-Qw9"></div>
                                                                        <div class="Tooltip-mask-mwQ"></div>
                                                                    </div><!--[-->
                                                                    <div class="Appreciate-tooltipStyle-Ywy"><!--[-->
                                                                        <div class="Project-loggedOutAppreciation-uEv">
                                                                            <div>
                                                                                <div class="SignUpContent-signUpTitle-fSQ">Join Behance</div>
                                                                                <div class="SignUpContent-signUpMessage-S10"><a data-signup-from="context" class="SignUpContent-signUpActions-nTp js-adobeid-signup">Sign up</a> or <a data-signin-from="context" class="SignUpContent-signUpActions-nTp js-adobeid-signin">Sign in</a> <span> to view personalized recommendations, follow creatives, and more.</span></div>
                                                                                <div class="SignUpContent-callToAction-N8m">
                                                                                    <div class="SignUpButtons-container-Uh3"><button class="Btn-button-CqT Btn-primary-wt8 Btn-normal-If5 SignUpButtons-signup-O9S js-adobeid-signup" type="button" target="_self" role="button" data-signup-from="Project_appreciate_bottom_sign_up_content" data-entity="user" data-following="false">
                                                                                            <div class="Btn-labelWrapper-_Re"><!---->
                                                                                                <div class="Btn-label-QJi e2e-Btn-label"><!--[--><label class="SignUpButtons-desktop-bS2">Sign Up With Email</label><label class="SignUpButtons-phone-yP2">Sign Up</label><!--]--></div><!---->
                                                                                            </div>
                                                                                        </button><!--[--><span class="SignUpButtons-or-u_o SignUpButtons-desktop-bS2">or</span><a class="SignUpButtons-appleIcon-jke js-adobeid-signin" data-signin-from="Project_appreciate_bottom_sign_up_content" data-adobeid-social-provider="apple"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 34 34" usecolor="true" class="">
                                                                                                <defs></defs>
                                                                                                <g>
                                                                                                    <g fill="#fff" stroke="#e8e8e8" transform="translate(1 1)">
                                                                                                        <circle cx="16" cy="16" r="16" stroke="none"></circle>
                                                                                                        <circle cx="16" cy="16" r="16.5" fill="none"></circle>
                                                                                                    </g>
                                                                                                    <path d="M22.748 20.099a7.745 7.745 0 01-.766 1.377A7 7 0 0121 22.671a1.914 1.914 0 01-1.268.558 3.178 3.178 0 01-1.171-.28 3.361 3.361 0 00-1.261-.278 3.475 3.475 0 00-1.3.279 3.489 3.489 0 01-1.121.295 1.8 1.8 0 01-1.3-.573 7.347 7.347 0 01-1.029-1.235 8.539 8.539 0 01-1.092-2.168A7.937 7.937 0 0111 16.686a4.718 4.718 0 01.62-2.469 3.634 3.634 0 011.3-1.312 3.49 3.49 0 011.754-.5 4.13 4.13 0 011.357.316 4.362 4.362 0 001.069.321 6.44 6.44 0 001.2-.373 3.944 3.944 0 011.62-.288 3.444 3.444 0 012.7 1.42 3 3 0 00-1.592 2.726 3.008 3.008 0 00.985 2.272 3.245 3.245 0 00.987.647q-.119.344-.252.66zM20 9.285a3.039 3.039 0 01-.78 1.993 2.654 2.654 0 01-2.2 1.088 2.218 2.218 0 01-.02-.267 3.123 3.123 0 01.827-2.014 3.182 3.182 0 011.006-.759 3 3 0 011.152-.327 2.587 2.587 0 01.015.286z"></path>
                                                                                                </g>
                                                                                            </svg></a><a class="SignUpButtons-fbIcon-zWz js-adobeid-signin" data-signin-from="Project_appreciate_bottom_sign_up_content" data-adobeid-social-provider="facebook"><svg viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="">
                                                                                                <g transform="translate(-1654 -928)">
                                                                                                    <circle class="Facebook-circle-Hk3" transform="translate(1654 928)" cx="16" cy="16" r="16"></circle>
                                                                                                    <path class="Facebook-icon-Qqf" d="M1671.395 953v-7.3h2.45l.367-2.846h-2.817v-1.815c0-.826.226-1.384 1.412-1.384h1.5v-2.542a19.964 19.964 0 0 0-2.192-.113 3.425 3.425 0 0 0-3.658 3.756v2.1H1666v2.844h2.457v7.3z"></path>
                                                                                                </g>
                                                                                            </svg></a><a class="SignUpButtons-googleIcon-fVg js-adobeid-signin" data-signin-from="Project_appreciate_bottom_sign_up_content" data-adobeid-social-provider="google"><svg viewbox="0 0 34 34" xmlns="http://www.w3.org/2000/svg" class="">
                                                                                                <g transform="translate(-1693 -927)">
                                                                                                    <circle transform="translate(1694 928)" cx="16" cy="16" r="16" stroke="#e8e8e8" fill="#fff"></circle>
                                                                                                    <path d="M1717.68 944.182a9.192 9.192 0 0 0-.145-1.636H1710v3.095h4.305a3.68 3.68 0 0 1-1.6 2.415v2.006h2.585a7.8 7.8 0 0 0 2.39-5.88z" fill="#4285f4" fill-rule="evenodd"></path>
                                                                                                    <path d="M1710 952a7.638 7.638 0 0 0 5.294-1.938l-2.585-2.007a4.826 4.826 0 0 1-7.185-2.535h-2.673v2.073A8 8 0 0 0 1710 952z" fill="#34a853" fill-rule="evenodd"></path>
                                                                                                    <path d="M1705.5 945.52a4.73 4.73 0 0 1 0-3.04v-2.073h-2.673a8.01 8.01 0 0 0 0 7.185l2.673-2.073z" fill="#fbbc05" fill-rule="evenodd"></path>
                                                                                                    <path d="M1710 939.182a4.322 4.322 0 0 1 3.058 1.2l2.295-2.295A7.688 7.688 0 0 0 1710 936a8 8 0 0 0-7.149 4.407l2.673 2.073a4.768 4.768 0 0 1 4.476-3.3z" fill="#ea4335" fill-rule="evenodd"></path>
                                                                                                </g>
                                                                                            </svg></a><!--]--></div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--]-->
                                                                    </div><!--]--><span class="Tooltip-closeIconWrapper-Oo4"><svg class="Tooltip-closeIcon-WS8 rf-icon Tooltip-closeIcon-WS8" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 8.09 8.08">
                                                                            <path d="M5.18 4.05L7.84 6.7a.75.75 0 0 1 .2.27.88.88 0 0 1 0 .31.83.83 0 0 1-.06.3.63.63 0 0 1-.18.27.42.42 0 0 1-.12.11l-.15.08h-.15a.72.72 0 0 1-.3 0h-.15l-.15-.08a.41.41 0 0 1-.12-.11L4.04 5.18 1.37 7.84a.42.42 0 0 1-.12.11l-.15.08H.95a.72.72 0 0 1-.3 0H.5l-.15-.08a.41.41 0 0 1-.12-.11.63.63 0 0 1-.19-.26.83.83 0 0 1 0-.3.88.88 0 0 1 0-.31.75.75 0 0 1 .18-.27L2.9 4.05.24 1.38a.63.63 0 0 1-.2-.27.83.83 0 0 1 0-.3.88.88 0 0 1 0-.29.75.75 0 0 1 .18-.27.73.73 0 0 1 .27-.18.84.84 0 0 1 .61 0 .73.73 0 0 1 .27.18l2.67 2.66L6.71.24a.73.73 0 0 1 .27-.18.84.84 0 0 1 .61 0 .73.73 0 0 1 .27.18.75.75 0 0 1 .18.28.88.88 0 0 1 0 .29.83.83 0 0 1-.06.3.63.63 0 0 1-.18.27L5.18 4.05z"></path>
                                                                        </svg></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Project-projectInfoSection-x8B e2e-Project-infoSection">
                                                            <div class="Project-projectName-n_3">E-commerce Fashion Shop Web UI design</div>
                                                            <div class="Project-projectStats-AU9">
                                                                <div class="Project-projectStat-ZdT" aria-label="105 appreciations"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0.5 0.5 16 16" class="Appreciations-icon-Z4i Project-icon-qll" aria-hidden="true">
                                                                        <path fill="none" d="M.5.5h16v16H.5z"></path>
                                                                        <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z"></path>
                                                                    </svg><span title="105" aria-hidden="true">105</span></div>
                                                                <div class="Project-projectStat-ZdT" aria-label="NaN views"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" class="Project-icon-qll" aria-hidden="true">
                                                                        <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z"></path>
                                                                    </svg><span title="2,108" aria-hidden="true">2.1k</span></div>
                                                                <div class="Project-projectStat-ZdT" aria-label="8 comments"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" class="Project-icon-qll" aria-hidden="true">
                                                                        <rect width="16" height="16" fill="none"></rect>
                                                                        <path d="M13 3H2C1.4 3 1 3.4 1 4v6l0 0c0 0.6 0.5 1 1 1h3v4h1l4-4h3c0.6 0 1-0.4 1-1l0 0V4C14 3.4 13.6 3 13 3z"></path>
                                                                    </svg><span title="8" aria-hidden="true">8</span></div>
                                                            </div>
                                                            <div class="Project-projectPublished-X5a">Published: <time datetime="September 8th 2021">September 8th 2021</time></div>
                                                        </div>
                                                    </div>
                                                    <div><!--[-->
                                                        <div class="OtherProjects-scrollerMoreProject-DKh ProjectExtras-otherProjects-LbE">
                                                            <div class="OtherProjects-header-uof">
                                                                <div class="Avatar-pie-vQ0 Avatar-root-cxI OtherProjects-userAvatar-_jt">
                                                                    <div>
                                                                        <div aria-haspopup="true" class="">
                                                                            <div aria-describedby="4bde370e-6637-4163-b0ba-5b2697b1fdae" class="Popover-activator-M8N Miniprofile-activator-dDq"><!--[--><span><!--[--><a target="_blank" href="https://www.behance.net/sohaguixd" data-entity="user" data-following="false" data-source="avatar" class="Avatar-avatar-G8t Avatar-avatarHover-z4f" style="height:50px;width:50px;min-height:50px;min-width:50px;"><!---->
                                                                                        <div style="height:50px;width:50px;min-height:50px;min-width:50px;"><img class="AvatarImage-avatarImage-PUL Avatar-avatarImage-VBb e2e-Miniprofile-Avatar" src="https://mir-s3-cdn-cf.behance.net/user/100/f1d666330325461.62760c6bc2f98.png" alt="MD Sohag Rana&#39;s profile" srcset="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png 50w, https://mir-s3-cdn-cf.behance.net/user/100/f1d666330325461.62760c6bc2f98.png 100w" loading="lazy" sizes="50px" draggable="false" data-id="330325461"></div>
                                                                                    </a><!--]--></span><!--]--></div><!---->
                                                                        </div>
                                                                    </div><!---->
                                                                </div>
                                                                <div class="OtherProjects-userInfo-OJz">
                                                                    <div class="OtherProjects-singleOwnerContainer-GMg">
                                                                        <div aria-haspopup="true" class="">
                                                                            <div aria-describedby="5bd5a828-87cc-4f42-9258-719849237817" class="Popover-activator-M8N Miniprofile-activator-dDq"><!--[--><span><!--[--><a href="https://www.behance.net/sohaguixd" target="_blank" class="OtherProjects-userName-X93">MD Sohag Rana</a><!--]--></span><!--]--></div><!---->
                                                                        </div><!---->
                                                                    </div>
                                                                    <div class="FollowButtonLegacy-legacyButton-mPH OtherProjects-actionBtn-N_c">
                                                                        <div class="user-follow js-action-follow  qa-follow-button-container e2e-follow-button-container form-button-wrap rf-button__container rf-button__container--follow follow-button-container" data-followee="330325461" data-entity="user" data-source="projectRelatedProjects" data-project-id="">
                                                                            <a tabindex="0" role="button" class="js-form-button-follow e2e-form-button-follow rf-button--small rf-button rf-button--follow"><span class="rf-button__label">Follow</span></a>
                                                                            <a tabindex="0" role="button" class="qa-form-button-following e2e-form-button-following rf-button--small rf-button rf-button--secondary rf-button--following"><span class="rf-button__label">Following</span></a>
                                                                            <a tabindex="0" role="button" class="js-form-button-unfollow e2e-form-button-unfollow rf-button--small rf-button rf-button--danger rf-button--unfollow"><span class="rf-button__label">Unfollow</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="OtherProjects-scrollerProjectWrapper-u4l"><!----></div>
                                                        </div>
                                                        <div class="ProjectInfo-projectFooter-zf7 qa-project-info ProjectExtras-projectInfoComponent-bYQ">
                                                            <div class="ProjectInfo-container-SBO"><!---->
                                                                <div class="ProjectInfo-sideBar-Nmz e2e-ProjectInfo-sidebar">
                                                                    <div class="ProjectInfo-infoBlocks-jRx ProjectInfo-profileInfo-T7a">
                                                                        <h2 class="SectionHeader-root-Qes UserInfo-header-jP0"><!--[--><!--[-->Owner<!--]--><!--]--></h2><!--[-->
                                                                        <div class="UserInfo-individualProfile-LPn">
                                                                            <div class="Avatar-pie-vQ0 Avatar-root-cxI UserInfo-userAvatar-sIR" target="_blank">
                                                                                <div>
                                                                                    <div aria-haspopup="true" class="">
                                                                                        <div aria-describedby="238ab46e-a3c3-470e-8d45-8227a6caca06" class="Popover-activator-M8N Miniprofile-activator-dDq"><!--[--><span><!--[--><a target="_blank" href="https://www.behance.net/sohaguixd" data-entity="user" data-following="false" data-source="avatar" class="Avatar-avatar-G8t Avatar-avatarHover-z4f" style="height:40px;width:40px;min-height:40px;min-width:40px;"><!---->
                                                                                                    <div style="height:40px;width:40px;min-height:40px;min-width:40px;"><img class="AvatarImage-avatarImage-PUL Avatar-avatarImage-VBb e2e-Miniprofile-Avatar" src="https://mir-s3-cdn-cf.behance.net/user/100/f1d666330325461.62760c6bc2f98.png" alt="MD Sohag Rana&#39;s profile" srcset="https://mir-s3-cdn-cf.behance.net/user/50/f1d666330325461.62760c6bc2f98.png 50w, https://mir-s3-cdn-cf.behance.net/user/100/f1d666330325461.62760c6bc2f98.png 100w" loading="lazy" sizes="40px" draggable="false" data-id="330325461"></div>
                                                                                                </a><!--]--></span><!--]--></div><!---->
                                                                                    </div>
                                                                                </div><!---->
                                                                            </div>
                                                                            <div class="UserInfo-userInfo-ZDt">
                                                                                <div class="UserInfo-nameContainer-YwX">
                                                                                    <div aria-haspopup="true" class="">
                                                                                        <div aria-describedby="7b460f53-434a-42f3-80ea-4947420b1165" class="Popover-activator-M8N Miniprofile-activator-dDq"><!--[--><span><!--[--><a target="_blank" data-id="330325461" class="UserInfo-userName-BoH qa-user-link e2e-ProjectOwnersInfo-user-link" href="https://www.behance.net/sohaguixd">MD Sohag Rana</a><!--]--></span><!--]--></div><!---->
                                                                                    </div><!---->
                                                                                </div><a href="https://www.behance.net/search/users?country=BD&amp;city=Dhaka" target="_blank" class="UserInfo-userLocation-H36"><svg xmlns="http://www.w3.org/2000/svg" viewbox="-4808 -20688 14.286 20" class="UserInfo-locationIcon-AJL">
                                                                                        <g>
                                                                                            <path d="M-4800.857-20688a7.143 7.143 0 0 0-7.143 7.143c0 5.714 7.143 12.857 7.143 12.857s7.143-7.143 7.143-12.857a7.142 7.142 0 0 0-7.143-7.143zm0 10a2.857 2.857 0 1 1 2.857-2.859 2.858 2.858 0 0 1-2.857 2.859z"></path>
                                                                                        </g>
                                                                                    </svg><span>Dhaka, Bangladesh</span></a>
                                                                            </div>
                                                                            <div class="UserInfo-userActions-Xuy ProjectInfo-wideFollowButton-k6X"><!--[-->
                                                                                <div class="FollowButtonLegacy-legacyButton-mPH">
                                                                                    <div class="js-action-follow  qa-follow-button-container e2e-follow-button-container form-button-wrap rf-button__container rf-button__container--follow follow-button-container rf-button__container--follow-wide" data-followee="330325461" data-entity="user" data-source="projectInfo" tabindex="0">
                                                                                        <a class="js-form-button-follow e2e-form-button-follow rf-button rf-button--follow rf-button--follow-wide rf-button rf-button--icon-leading"><span class="rf-button__icon-container rf-button__icon-container--leading-wide"><svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path d="M9,1a8,8,0,1,0,8,8A8,8,0,0,0,9,1Zm5,8.5a.5.5,0,0,1-.5.5H10v3.5a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5V10H4.5A.5.5,0,0,1,4,9.5v-1A.5.5,0,0,1,4.5,8H8V4.5A.5.5,0,0,1,8.5,4h1a.5.5,0,0,1,.5.5V8h3.5a.5.5,0,0,1,.5.5Z" />
                                                                                                </svg>
                                                                                            </span><span class="rf-button__label rf-button__label-wide">Follow</span></a>
                                                                                        <a class="qa-form-button-following e2e-form-button-following rf-button rf-button--secondary rf-button--follow-wide rf-button--following"><span class="rf-button__label">Following</span></a>
                                                                                        <a class="js-form-button-unfollow e2e-form-button-unfollow rf-button rf-button--danger rf-button--follow-wide rf-button--unfollow"><span class="rf-button__label">Unfollow</span></a>
                                                                                    </div>
                                                                                </div><!--]-->
                                                                            </div>
                                                                        </div><!--]--><!--[-->
                                                                        <div class="ProjectInfo-messageButton-hRw">
                                                                            <div class="MessageManager-availabilityTooltip-CIA e2e-messagemanager-hire-me-button">
                                                                                <div class="FocusedTooltip-activator-qut AvailabilityInfoTooltip-tooltipContainer-_Kq" aria-describedby="tooltipContent">
                                                                                    <div><!--[-->
                                                                                        <div class="AvailabilityInfoTooltip-activator-nW3"><!--[--><!--[--><button class="Btn-button-CqT Btn-tertiary-Z8Q Btn-mediumLarge-EdB MessageButton-interactionButton-O6g e2e-MessageManager-message-btn" type="button" target="_self" role="button" data-id="hire">
                                                                                                <div class="Btn-labelWrapper-_Re MessageButton-buttonLabel-j2x undefined">
                                                                                                    <div class="Btn-icon-BDP Btn-leading-gb0"><!--[--><svg viewbox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="MessageButton-icon-Gi8">
                                                                                                            <path d="M9,10.094l9-6.7615v-.75A.5735.5735,0,0,0,17.4375,2H.5625A.57351.57351,0,0,0,0,2.5835V3.318Z"></path>
                                                                                                            <polygon points="12.389 8.981 18 13.184 18 6.667 18 4.771"></polygon>
                                                                                                            <path d="M11.433,9.7,9.645,11.047a1.086,1.086,0,0,1-1.29,0L6.541,9.6875,0,14.534v.883A.573.573,0,0,0,.5625,16h16.875A.573.573,0,0,0,18,15.417v-.795Z"></path>
                                                                                                            <polygon points="5.582 8.969 0 4.756 0 6.667 0 13.097"></polygon>
                                                                                                        </svg><!--]--></div>
                                                                                                    <div class="Btn-label-QJi e2e-Btn-label"><!--[--> Hire<!--]--></div><!---->
                                                                                                </div>
                                                                                            </button><!--]--><!--]--></div><!--]-->
                                                                                    </div>
                                                                                    <div style="display:none;" class="FocusedTooltip-tooltipContainer-L3T ProjectInfo-tooltipWidth-rfZ FocusedTooltip-dark-PUo FocusedTooltip-bottom-ou7"><!--[-->
                                                                                        <div class="AvailabilityInfoTooltip-tooltipTextWrapper-xCQ">
                                                                                            <div class="AvailabilityInfoTooltip-tooltipWrapperListItem-AeZ"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19.997 20" class="AvailabilityInfoTooltip-icon-hr8">
                                                                                                    <g transform="translate(-778.375 0.625)">
                                                                                                        <g transform="translate(779 0)">
                                                                                                            <path d="M9.014,9.869a2.535,2.535,0,0,1,1.722.672q.019.017.036.036a2.542,2.542,0,0,1-.1,3.544c-.833.827-3.71,1.418-4.279,1.528a.625.625,0,0,1-.732-.733c.111-.569.7-3.443,1.528-4.277A2.521,2.521,0,0,1,9.014,9.869Zm.856,1.574a1.292,1.292,0,0,0-1.784.069l-.007.007a8.39,8.39,0,0,0-.984,2.7,8.361,8.361,0,0,0,2.7-.983l.008-.008A1.284,1.284,0,0,0,9.87,11.443Z" transform="translate(-0.625 -0.623)"></path>
                                                                                                            <path d="M10.608,5.265A.625.625,0,0,1,10.166,4.2L13.2,1.166a1.85,1.85,0,0,1,2.616,0l.867.867a.625.625,0,0,1-.884.884l-.867-.867a.6.6,0,0,0-.849,0L11.05,5.082A.623.623,0,0,1,10.608,5.265Z" transform="translate(-0.625 -0.623)"></path>
                                                                                                            <path d="M11.907,12.629a.623.623,0,0,1-.442-.183l-2.6-2.6a.625.625,0,0,1,0-.884L15.8,2.032a2.463,2.463,0,0,1,3.484,3.482l-6.933,6.932A.623.623,0,0,1,11.907,12.629ZM10.192,9.4l1.715,1.715L18.4,4.631a1.222,1.222,0,0,0,0-1.717,1.218,1.218,0,0,0-1.715,0Z" transform="translate(-0.625 -0.623)"></path>
                                                                                                            <path d="M16.24,8.3a.623.623,0,0,1-.442-.183l-2.6-2.6a.625.625,0,0,1,.884-.884l2.6,2.6A.625.625,0,0,1,16.24,8.3Z" transform="translate(-0.625 -0.623)"></path>
                                                                                                            <path d="M15.054,20H.937a.937.937,0,0,1-.663-1.6l.5-.5c1.368-1.368,1.36-2.269,1.308-8.134-.011-1.305-.024-2.785-.024-4.569A6.329,6.329,0,0,1,4.506.4c.1-.087.179-.163.235-.218A.625.625,0,0,1,5.183,0H8.89a.625.625,0,1,1,0,1.25H5.431l-.086.078A5.14,5.14,0,0,0,3.308,5.195c0,1.779.013,3.255.024,4.558.053,6,.064,7.274-1.641,9H14.925l.851-.85c1.362-1.362,1.339-2.736,1.3-5.23-.007-.449-.015-.913-.015-1.418a.625.625,0,0,1,1.25,0c0,.495.008.953.015,1.4.043,2.554.073,4.4-1.663,6.135l-.944.943A.937.937,0,0,1,15.054,20Z" transform="translate(-0.625 -0.623)"></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="AvailabilityInfoTooltip-listItemText-xn6">Full Time Job</div><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" class="AvailabilityInfoTooltip-icon-hr8">
                                                                                                    <g transform="translate(0.625 0.625)">
                                                                                                        <path d="M7.768,14.929H7.723a1.5,1.5,0,0,1-1.2-.657L4.489,11.379a.625.625,0,0,1,1.022-.72l2.042,2.9.008.012a.249.249,0,0,0,.405.012l.007-.009L14.51,5.3a.625.625,0,1,1,.981.775L8.958,14.342A1.5,1.5,0,0,1,7.768,14.929Z" transform="translate(-0.625 -0.624)"></path>
                                                                                                        <path d="M10,0A10,10,0,1,1,0,10,10.011,10.011,0,0,1,10,0Zm0,18.75A8.75,8.75,0,1,0,1.25,10,8.76,8.76,0,0,0,10,18.749Z" transform="translate(-0.625 -0.624)"></path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <div class="AvailabilityInfoTooltip-tooltipWrapperListItem-AeZ AvailabilityInfoTooltip-borderTop-CzY"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" class="AvailabilityInfoTooltip-icon-hr8">
                                                                                                    <g transform="translate(0.625 0.625)">
                                                                                                        <g transform="translate(0 0)">
                                                                                                            <path d="M14.375,8.759A5.625,5.625,0,1,1,8.75,14.384,5.631,5.631,0,0,1,14.375,8.759Zm0,10A4.375,4.375,0,1,0,10,14.384,4.38,4.38,0,0,0,14.375,18.759Z" transform="translate(-0.625 -0.634)"></path>
                                                                                                            <path d="M16.585,15.009h-2.21a.625.625,0,0,1-.625-.625v-2.21a.625.625,0,0,1,1.25,0v1.585h1.585a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                                            <path d="M8.75,9.384H4.375a.625.625,0,0,1,0-1.25H8.75a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                                            <path d="M6.875,12.509h-2.5a.625.625,0,0,1,0-1.25h2.5a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                                            <path d="M6.875,15.634h-2.5a.625.625,0,0,1,0-1.25h2.5a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                                            <path d="M8.125,20.009H1.875A1.875,1.875,0,0,1,0,18.134V5.009A1.877,1.877,0,0,1,1.875,3.134H4.427a3.751,3.751,0,0,1,7.4,0h2.552A1.877,1.877,0,0,1,16.25,5.009V6.884a.625.625,0,1,1-1.25,0V5.009a.626.626,0,0,0-.625-.625H11.25a.625.625,0,0,1-.625-.625,2.5,2.5,0,0,0-5,0A.625.625,0,0,1,5,4.384H1.875a.626.626,0,0,0-.625.625V18.134a.625.625,0,0,0,.625.625h6.25a.625.625,0,0,1,0,1.25Z" transform="translate(-0.625 -0.634)"></path>
                                                                                                            <path d="M8.125,4.384a.937.937,0,1,1,.938-.937A.939.939,0,0,1,8.125,4.384Z" transform="translate(-0.625 -0.634)"></path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <div class="AvailabilityInfoTooltip-listItemTextContainer-cqo">
                                                                                                    <div class="AvailabilityInfoTooltip-listItemText-xn6">Freelance/Project</div><!---->
                                                                                                </div><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" class="AvailabilityInfoTooltip-icon-hr8">
                                                                                                    <g transform="translate(0.625 0.625)">
                                                                                                        <path d="M7.768,14.929H7.723a1.5,1.5,0,0,1-1.2-.657L4.489,11.379a.625.625,0,0,1,1.022-.72l2.042,2.9.008.012a.249.249,0,0,0,.405.012l.007-.009L14.51,5.3a.625.625,0,1,1,.981.775L8.958,14.342A1.5,1.5,0,0,1,7.768,14.929Z" transform="translate(-0.625 -0.624)"></path>
                                                                                                        <path d="M10,0A10,10,0,1,1,0,10,10.011,10.011,0,0,1,10,0Zm0,18.75A8.75,8.75,0,1,0,1.25,10,8.76,8.76,0,0,0,10,18.749Z" transform="translate(-0.625 -0.624)"></path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                            </div>
                                                                                        </div><!--]-->
                                                                                    </div>
                                                                                </div>
                                                                            </div><!----><!---->
                                                                        </div><!--]--><!--[--><!--]-->
                                                                    </div><!----><!---->
                                                                    <div class="ProjectInfo-infoBlocks-jRx">
                                                                        <h2 class="ProjectInfo-projectName-JUj">E-commerce Fashion Shop Web UI design</h2>
                                                                        <h2 class="ProjectInfo-projectDescription-dNH">Hello Creative People,
                                                                            Here is my exploration of the E-commerce Fashion Shop Web UI design that I have created recently. I hope everyone will lik <a class="ProjectInfo-moreToggle-knt"><!--[-->Read More<!--]--></a></h2>
                                                                        <div class="ProjectInfo-projectStats-zi7">
                                                                            <div class="ProjectInfo-projectStat-xLj e2e-ProjectInfo-projectStat-appreciations" aria-label="105 appreciations"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0.5 0.5 16 16" class="Appreciations-icon-Z4i ProjectInfo-icon-QID" aria-hidden="true">
                                                                                    <path fill="none" d="M.5.5h16v16H.5z"></path>
                                                                                    <path d="M.5 7.5h3v8h-3zM7.207 15.207c.193.19.425.29.677.293H12c.256 0 .512-.098.707-.293l2.5-2.5c.19-.19.288-.457.293-.707V8.5c0-.553-.445-1-1-1h-5L11 5s.5-.792.5-1.5v-1c0-.553-.447-1-1-1l-1 2-4 4v6l1.707 1.707z"></path>
                                                                                </svg><span title="105" aria-hidden="true">105</span></div>
                                                                            <div class="ProjectInfo-projectStat-xLj" aria-label="NaN views"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" class="ProjectInfo-icon-QID" aria-hidden="true">
                                                                                    <path d="M8.5 3.5c-5 0-8 5-8 5s3 5 8 5 8-5 8-5-3-5-8-5zm0 7c-1.105 0-2-.896-2-2 0-1.106.895-2 2-2 1.104 0 2 .894 2 2 0 1.104-.896 2-2 2z"></path>
                                                                                </svg><span title="2,108" aria-hidden="true">2.1k</span></div>
                                                                            <div class="ProjectInfo-projectStat-xLj qa-project-comment-count" aria-label="8 comments"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" class="ProjectInfo-icon-QID" aria-hidden="true">
                                                                                    <rect width="16" height="16" fill="none"></rect>
                                                                                    <path d="M13 3H2C1.4 3 1 3.4 1 4v6l0 0c0 0.6 0.5 1 1 1h3v4h1l4-4h3c0.6 0 1-0.4 1-1l0 0V4C14 3.4 13.6 3 13 3z"></path>
                                                                                </svg><span title="8" aria-hidden="true">8</span></div>
                                                                        </div>
                                                                        <div class="ProjectInfo-projectPublished-Exm">Published: <span class="js-format-timestamp" data-timestamp="1631110464"></span><time datetime="September 8th 2021">September 8th 2021</time></div>
                                                                    </div>
                                                                    <div class="ProjectTools-usePillShapedTools-TGg js-project-tools ProjectInfo-infoBlocks-jRx">
                                                                        <div class="ProjectTools-section-k_L e2e-Project-Tools-tools">
                                                                            <h2 class="SectionHeader-root-Qes ProjectTools-sectionHeader-TFk"><!--[-->Tools<!--]--></h2>
                                                                            <ul class=""><!--[-->
                                                                                <li class="ProjectTools-pillShapedTool-uYx js-pill-shaped-tool"><a href="/search/projects?tools=596340077" class="PillShapedInfoButton-anchor-CiL PillShapedInfoButton-hasBackgroundColor-_4o" style="background-color:#470137;" target="_self"><img class="PillShapedInfoButton-background-_MN" src="https://mir-s3-cdn-cf.behance.net/projects/max_808/32c180191973409.Y3JvcCwxNjE2LDEyNjQsMCww.jpg" loading="lazy" alt="">
                                                                                        <div class="PillShapedInfoButton-overlay-C3h"><!--[--><img class="ProjectTools-toolIcon-Sdh" alt="" src="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/img/project/tools/1x/xd.png">
                                                                                            <p class="ProjectTools-toolLabel-gjE"> XD</p><!--]-->
                                                                                        </div>
                                                                                    </a></li><!--]-->
                                                                                <li class="ProjectTools-divider-gqr"></li><!--[--><!--]-->
                                                                            </ul>
                                                                        </div>
                                                                        <div class="ProjectTools-section-k_L e2e-Project-Tools-creative-fields">
                                                                            <h2 class="SectionHeader-root-Qes ProjectTools-sectionHeader-TFk"><!--[-->Creative Fields<!--]--></h2>
                                                                            <ul><!--[-->
                                                                                <li class="ProjectTools-creativeField-ZaI js-creative-field"><a href="/search/projects?field=UI/UX" class="PillShapedInfoButton-anchor-CiL" style="" target="_self"><img class="PillShapedInfoButton-background-_MN" src="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/img/creative_fields/bg/uiux.jpg" loading="lazy" alt="">
                                                                                        <div class="PillShapedInfoButton-overlay-C3h"><!--[-->
                                                                                            <p class="ProjectTools-fieldLabel-LpV">UI/UX</p><!--]-->
                                                                                        </div>
                                                                                    </a></li>
                                                                                <li class="ProjectTools-creativeField-ZaI js-creative-field"><a href="/search/projects?field=Web Design" class="PillShapedInfoButton-anchor-CiL" style="" target="_self"><img class="PillShapedInfoButton-background-_MN" src="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/img/creative_fields/bg/webdesign.jpg" loading="lazy" alt="">
                                                                                        <div class="PillShapedInfoButton-overlay-C3h"><!--[-->
                                                                                            <p class="ProjectTools-fieldLabel-LpV">Web Design</p><!--]-->
                                                                                        </div>
                                                                                    </a></li>
                                                                                <li class="ProjectTools-creativeField-ZaI js-creative-field"><a href="/search/projects?field=Graphic Design" class="PillShapedInfoButton-anchor-CiL" style="" target="_self"><img class="PillShapedInfoButton-background-_MN" src="https://a5.behance.net/427bc08356755dde99f62f76e1e0ffdd7bcce70f/img/creative_fields/bg/graphicdesign.jpg" loading="lazy" alt="">
                                                                                        <div class="PillShapedInfoButton-overlay-C3h"><!--[-->
                                                                                            <p class="ProjectTools-fieldLabel-LpV">Graphic Design</p><!--]-->
                                                                                        </div>
                                                                                    </a></li><!--]-->
                                                                            </ul>
                                                                        </div>
                                                                    </div><!---->
                                                                    <ul class="ProjectTags-projectTags-wWY ProjectTags-usePillShapedTags-O5E js-project-tags ProjectInfo-infoBlocks-jRx ProjectInfo-projectTags-c4w"><!--[-->
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/Clothing" class="ProjectTags-tagLink-PxS">Clothing</a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/e-commerce" class="ProjectTags-tagLink-PxS">e-commerce</a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/Ecommerce" class="ProjectTags-tagLink-PxS">Ecommerce</a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/Fashion%20" class="ProjectTags-tagLink-PxS">Fashion </a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/landing%20page" class="ProjectTags-tagLink-PxS">landing page</a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/online%20store" class="ProjectTags-tagLink-PxS">online store</a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/ui%20design" class="ProjectTags-tagLink-PxS">ui design</a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/UI%2FUX" class="ProjectTags-tagLink-PxS">UI/UX</a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/Web%20Design%20" class="ProjectTags-tagLink-PxS">Web Design </a></li>
                                                                        <li class="ProjectTags-tag-MKN"><a href="/search/projects/Woocommerce" class="ProjectTags-tagLink-PxS">Woocommerce</a></li><!--]-->
                                                                    </ul>
                                                                    <div class="Copyright-root-HQt">
                                                                        <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl" style="cursor:pointer;"><span class="Tooltip-trigger-eZ_"><!--[--><label class="Copyright-label-bc5" tabindex="0">© All Rights Reserved</label><!--]--></span>
                                                                            <div class="Tooltip-topPositionHitBox-Q8Z" style="height: calc(100% + 5px + 6px)"></div>
                                                                            <div style="display:none;cursor:initial;padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;bottom:calc(100% + 5px + 6px);left:0px;" class="Tooltip-container-DIF Tooltip-position-top-FZF">
                                                                                <div class="Tooltip-triangleContainer-r5D" style="left:10px;">
                                                                                    <div class="Tooltip-triangle-Qw9"></div>
                                                                                    <div class="Tooltip-mask-mwQ"></div>
                                                                                </div><!--[-->
                                                                                <div class="Copyright-tooltipContent-XFM">
                                                                                    <div class="Copyright-title-VRg">Copyright Info</div>
                                                                                    <p class="Copyright-text-VBt">No use is allowed without explicit permission from owner</p><!---->
                                                                                </div><!--]--><!---->
                                                                            </div>
                                                                        </div>
                                                                        <div id="project-block-spam" class="js-project-spam Copyright-projectSpamBlock-udl"><a aria-current="page" href="/gallery/126991995/E-commerce-Fashion-Shop-Web-UI-design?action=report" class="router-link-active router-link-exact-active ReportButton-link-Ji8 e2e-ReportButton Copyright-spamActions-oUN e2e-Copyright-reportButton" tabindex="0"><span class="ReportButton-reportWrapper-Buf"><svg xmlns="http://www.w3.org/2000/svg" width="15.065" height="15.062" viewbox="0 0 15.06 15.06" class="ReportButton-icon-zJL">
                                                                                        <path d="M7.53,12.72A.74.74,0,1,1,8.27,12,.74.74,0,0,1,7.53,12.72Z"></path>
                                                                                        <path d="M7.53,10.37a.5.5,0,0,1-.5-.5V5.19a.5.5,0,0,1,.5-.5.5.5,0,0,1,.5.5V9.87A.5.5,0,0,1,7.53,10.37Z"></path>
                                                                                        <path d="M7.53,0A1.64,1.64,0,0,1,9,.91L14.91,13a1.44,1.44,0,0,1-.66,1.94,1.4,1.4,0,0,1-.64.15H1.45A1.45,1.45,0,0,1,0,13.61,1.43,1.43,0,0,1,.15,13L6.07.91A1.65,1.65,0,0,1,7.53,0Zm6.08,14.06a.46.46,0,0,0,.41-.65L8.1,1.35a.64.64,0,0,0-.85-.29A.71.71,0,0,0,7,1.35L1.05,13.41a.46.46,0,0,0,.2.61.45.45,0,0,0,.2,0Z"></path>
                                                                                    </svg><!--[-->Report<!--]--></span></a></div><!---->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--]-->
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div><!----><!---->
                                        </div>
                                    </div><!----><!----><!----><!----><!----><!---->
                                </div>
                            </div>
                        </main><!--[-->
                        <footer class="InfinityFooter-footer-lWR">
                            <div class="InfinityFooter-footerInfinity-X7B js-footer InfinityFooter__global-selector">
                                <div><a href="javascript:void(0)" class="InfinityFooter-skipContent-yLL">Jump to Main Content</a></div>
                                <div class="">
                                    <div class="Tooltip-wrapper-Uzv" style="cursor:pointer;"><span class="Tooltip-trigger-eZ_"><!--[--><button class="InfinityFooter-resetButton-F9M InfinityFooter-footerSelector-rpC qa-more-link-container e2e-FooterInfinity-link-container" aria-expanded="false" aria-controls="ee10e56f-e90e-4988-ac87-1a654eae29ec">More Behance</button><!--]--></span>
                                        <div class="Tooltip-topPositionHitBox-Q8Z" style="height: calc(100% + 5px + 6px)"></div>
                                        <div style="display:none;cursor:initial;padding-top:10px;padding-bottom:10px;padding-right:0px;padding-left:0px;bottom:calc(100% + 5px + 6px);left:20px;" class="Tooltip-container-DIF Tooltip-position-top-FZF">
                                            <div class="Tooltip-triangleContainer-r5D" style="left:10px;">
                                                <div class="Tooltip-triangle-Qw9"></div>
                                                <div class="Tooltip-mask-mwQ"></div>
                                            </div><!--[-->
                                            <ul id="ee10e56f-e90e-4988-ac87-1a654eae29ec" class="InfinityFooter-tooltipMore-UjP"><!--[-->
                                                <li class="InfinityFooter-footerSelectorItem-Yoy"><a class="InfinityFooter-footerSelectorLinks-uP9 FooterLinks-link-SQa e2e-Footer-more-link-careers e2e-FooterLinks-footerSelectorItems" href="/careers?tracking_source=footer_infinity_gallery" target="_blank"><!----> Careers at Behance</a></li>
                                                <li class="InfinityFooter-footerSelectorItem-Yoy"><a class="InfinityFooter-footerSelectorLinks-uP9 FooterLinks-link-SQa e2e-Footer-more-link-portfolio e2e-FooterLinks-footerSelectorItems" href="https://portfolio.adobe.com/?promoid=ZKD5FJ7P&amp;mv=other" target="_blank"><!----> Adobe Portfolio</a></li>
                                                <li class="InfinityFooter-footerSelectorItem-Yoy"><a class="InfinityFooter-footerSelectorLinks-uP9 FooterLinks-link-SQa e2e-Footer-more-link-blog e2e-FooterLinks-footerSelectorItems" href="/blog?tracking_source=footer_infinity_gallery" target="_blank"><!----> Blog</a></li>
                                                <li class="InfinityFooter-footerSelectorItem-Yoy"><button class="FooterLinks-downloadApp-Tiw InfinityFooter-footerSelectorLinks-uP9 e2e-Footer-more-link-app e2e-FooterLinks-footerSelectorItem" aria-controls="291e84f4-5f9b-4a0f-b131-ae9c4b72f385" aria-expanded="false">Download the App</button></li><!--]-->
                                            </ul><!--]--><!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl" style="cursor:pointer;"><span class="Tooltip-trigger-eZ_"><!--[--><button class="InfinityFooter-resetButton-F9M InfinityFooter-footerSelector-rpC qa-language-selector e2e-FooterInfinity-language-selector" aria-expanded="false" aria-controls="c81b156c-4956-4a6d-9b6e-6a2f327a9248" aria-label="Language Currently Selected: English" aria-haspopup="true">English</button><!--]--></span>
                                        <div class="Tooltip-topPositionHitBox-Q8Z" style="height: calc(100% + 5px + 6px)"></div>
                                        <div style="display:none;cursor:initial;padding-top:10px;padding-bottom:10px;padding-right:0px;padding-left:0px;bottom:calc(100% + 5px + 6px);" class="Tooltip-container-DIF Tooltip-position-top-FZF Tooltip-center-krh">
                                            <div class="Tooltip-triangleContainer-r5D" style="">
                                                <div class="Tooltip-triangle-Qw9"></div>
                                                <div class="Tooltip-mask-mwQ"></div>
                                            </div><!--[-->
                                            <ul id="c81b156c-4956-4a6d-9b6e-6a2f327a9248" class="LanguageSelector-tooltipContainer-cBd" role="menu" aria-label="Language Options"><!--[-->
                                                <li class="LanguageSelector-footerSelectorItem-m2u LanguageSelector-selected-sPL" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-en_US" data-language-locale="en_US" lang="en-US">English</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-cs_CZ" data-language-locale="cs_CZ" lang="cs-CZ">Čeština</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-da_DK" data-language-locale="da_DK" lang="da-DK">Dansk</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-de_DE" data-language-locale="de_DE" lang="de-DE">Deutsch</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-es_ES" data-language-locale="es_ES" lang="es-ES">Español</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-fr_FR" data-language-locale="fr_FR" lang="fr-FR">Français</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-it_IT" data-language-locale="it_IT" lang="it-IT">Italiano</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-nl_NL" data-language-locale="nl_NL" lang="nl-NL">Nederlands</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-nb_NO" data-language-locale="nb_NO" lang="nb-NO">Norsk</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-pl_PL" data-language-locale="pl_PL" lang="pl-PL">Polski</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-pt_BR" data-language-locale="pt_BR" lang="pt-BR">Português</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-ru_RU" data-language-locale="ru_RU" lang="ru-RU">Pусский</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-fi_FI" data-language-locale="fi_FI" lang="fi-FI">Suomi</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-sv_SE" data-language-locale="sv_SE" lang="sv-SE">Svenska</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-tr_TR" data-language-locale="tr_TR" lang="tr-TR">Türkçe</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-ja_JP" data-language-locale="ja_JP" lang="ja-JP">日本語</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-ko_KR" data-language-locale="ko_KR" lang="ko-KR">한국어</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-zh_CN" data-language-locale="zh_CN" lang="zh-CN">中文(简体)</button></li>
                                                <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-zh_TW" data-language-locale="zh_TW" lang="zh-TW">中文(繁體)</button></li><!--]-->
                                            </ul><!--]--><!---->
                                        </div>
                                    </div>
                                </div><!----><!---->
                                <div class=""><!--[-->
                                    <li class="InfinityFooter-footerProLinkItem-tQh"><a class="InfinityFooter-footerLink-Sgi FooterLinks-link-SQa e2e-Footer-link-try-behance-pro e2e-FooterLinks-footerSelectorItems" href="/pro?tracking_source=footer_pro_marketing_page_gallery" target="_blank"><!----> Try Behance Pro</a></li><!--]-->
                                </div>
                                <div class="">
                                    <ul class="InfinityFooter-footerLinks-STj"><!--[-->
                                        <li class=""><a class="InfinityFooter-footerLink-Sgi FooterLinks-link-SQa e2e-Footer-link-terms e2e-FooterLinks-footerSelectorItems" href="http://www.adobe.com/legal/terms.html" target="_blank"><!----> TOU</a></li>
                                        <li class=""><a class="InfinityFooter-footerLink-Sgi FooterLinks-link-SQa e2e-Footer-link-privacy e2e-FooterLinks-footerSelectorItems" href="http://www.adobe.com/privacy.html" target="_blank"><!----> Privacy</a></li>
                                        <li class=""><a class="InfinityFooter-footerLink-Sgi FooterLinks-link-SQa e2e-Footer-link-community e2e-FooterLinks-footerSelectorItems" href="/misc/community?tracking_source=footer_infinity_gallery" target="_blank"><!----> Community</a></li>
                                        <li class=""><a class="InfinityFooter-footerLink-Sgi FooterLinks-link-SQa e2e-Footer-link-help e2e-FooterLinks-footerSelectorItems" href="https://help.behance.net/" target="_blank"><!----> Help</a></li><!--]-->
                                        <li><button class="InfinityFooter-resetButton-F9M InfinityFooter-footerLink-Sgi js-privacy-personalize" aria-label="Cookie Preferences" aria-controls="onetrust-pc-sdk"></button></li><!--[-->
                                        <li class=""><a class="InfinityFooter-footerLink-Sgi FooterLinks-link-SQa e2e-Footer-link-do-not-sell e2e-FooterLinks-footerSelectorItems" href="https://www.adobe.com/privacy/us-rights.html" target="_blank"><!----> Do not sell or share my personal information</a></li><!--]-->
                                    </ul>
                                </div>
                                <div class="InfinityFooter-adobeLogo-Sr1">
                                    <div aria-haspopup="true">
                                        <div aria-describedby="e2fabaed-7fae-4ff4-9d5b-911b158098e6" class="Popover-activator-M8N"><!--[--><a href="https://www.adobe.com?promoid=RYGDMYVW" target="_blank" aria-expanded="false" aria-controls="a396eade-b9f7-477e-ba68-315f4e87aa8a" role="button"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 60 15.619" aria-labelledby="IconBase-title-15dda900-3a49-435b-afea-562823d29e63 IconBase-description-15dda900-3a49-435b-afea-562823d29e63" role="graphics-symbol img" width="100%" height="100%" class="InfinityFooter-icon-CAF" aria-hidden="true">
                                                    <title id="IconBase-title-15dda900-3a49-435b-afea-562823d29e63">Adobe, Inc.</title>
                                                    <desc id="IconBase-description-15dda900-3a49-435b-afea-562823d29e63"></desc>
                                                    <g><!--[-->
                                                        <path d="M179.682,34.616l-.647,2a.145.145,0,0,1-.148.107h-1.564c-.094,0-.122-.053-.107-.132l2.7-7.78a2.513,2.513,0,0,0,.132-.823.089.089,0,0,1,.081-.094h2.157c.067,0,.094.013.108.081l3.06,8.629c.026.067.013.12-.067.12h-1.75a.132.132,0,0,1-.149-.094l-.688-2.009ZM182.3,32.93c-.264-.89-.808-2.522-1.058-3.479h-.013c-.216.9-.7,2.38-1.058,3.479Z" transform="translate(-153.778 -24.202)"></path>
                                                        <path d="M241.14,28.636a3.573,3.573,0,0,1,3.91-3.541c.107,0,.242.015.444.028V22.46a.085.085,0,0,1,.094-.094h1.7c.067,0,.081.026.081.081v7.969a7.51,7.51,0,0,0,.054.984c0,.067-.013.094-.094.122a6.793,6.793,0,0,1-2.657.538A3.226,3.226,0,0,1,241.14,28.636Zm4.355-1.915a1.389,1.389,0,0,0-.5-.067,1.8,1.8,0,0,0-1.928,1.887,1.687,1.687,0,0,0,1.793,1.915,1.9,1.9,0,0,0,.633-.081Z" transform="translate(-209.252 -19.408)"></path>
                                                        <path d="M303.016,46.411a3.328,3.328,0,1,1-6.646.041,3.3,3.3,0,0,1,3.356-3.492A3.212,3.212,0,0,1,303.016,46.411Zm-4.746.015c0,1.19.553,1.941,1.455,1.941.783,0,1.375-.674,1.375-1.915,0-1.058-.431-1.928-1.455-1.928C298.864,44.524,298.27,45.225,298.27,46.426Z" transform="translate(-257.179 -37.279)"></path>
                                                        <path d="M356.658,22.37c.108,0,.132.013.132.108v2.764a4.3,4.3,0,0,1,1.135-.144,3.086,3.086,0,0,1,3.236,3.209,3.743,3.743,0,0,1-4.044,3.761A7.063,7.063,0,0,1,355,31.759a.156.156,0,0,1-.081-.132V22.464c0-.067.026-.094.094-.094Zm.926,4.314a2.71,2.71,0,0,0-.793.108v3.654a2.064,2.064,0,0,0,.5.054,1.856,1.856,0,0,0,1.954-2.023,1.58,1.58,0,0,0-1.656-1.792Z" transform="translate(-307.986 -19.412)"></path>
                                                        <path d="M409.443,46.941c.067.768.607,1.4,1.928,1.4a4.176,4.176,0,0,0,1.658-.309c.041-.028.081-.013.081.067v1.28c0,.1-.026.132-.094.163a4.53,4.53,0,0,1-2.063.4,3.161,3.161,0,0,1-3.424-3.41,3.286,3.286,0,0,1,3.262-3.56,2.748,2.748,0,0,1,2.844,2.909,4.281,4.281,0,0,1-.067.9.114.114,0,0,1-.107.107,12.3,12.3,0,0,1-1.39.054Zm1.753-1.308a4.486,4.486,0,0,0,.674-.026v-.1a1.1,1.1,0,0,0-1.147-1.058,1.278,1.278,0,0,0-1.295,1.19Z" transform="translate(-353.639 -37.288)"></path>
                                                        <path d="M84.13,0h6.523V15.619Z" transform="translate(-73.005)"></path>
                                                        <path d="M6.529,0H0V15.619Z"></path>
                                                        <path d="M48.032,43.53l4.156,9.862H49.465l-1.243-3.141H45.18Z" transform="translate(-39.205 -37.774)"></path><!--]-->
                                                    </g>
                                                </svg><span class="InfinityFooter-screenReaderOnly-v6w">Navigate to adobe.com</span></a><!--]--></div><!---->
                                    </div>
                                </div><!----><!---->
                            </div>
                        </footer>
                        <footer aria-label="primary" class="StaticFooter-footerContainer-jf4"><a href="javascript:void(0)" class="StaticFooter-skipContent-erF">Jump to Main Content</a>
                            <div class="StaticFooter-mainFooterContainer-Bqa">
                                <div class="StaticFooter-behanceLinkContainer-qBT"><a class="StaticFooter-behanceLogoContainer-_tw" target="_blank" href="/"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 152.5 28.2" aria-labelledby="IconBase-title-a4803b5b-fe1c-43a6-a8e2-e463fe503568 IconBase-description-a4803b5b-fe1c-43a6-a8e2-e463fe503568" role="graphics-symbol img" width="100%" height="100%" class="StaticFooter-behanceLogo-jGq">
                                            <title id="IconBase-title-a4803b5b-fe1c-43a6-a8e2-e463fe503568">Behance</title>
                                            <desc id="IconBase-description-a4803b5b-fe1c-43a6-a8e2-e463fe503568"></desc>
                                            <g><!--[-->
                                                <path d="M13.1 0c1.3 0 2.5.1 3.6.4 1.1.2 2 .6 2.8 1.1.8.5 1.4 1.2 1.8 2.1.4.9.6 2 .6 3.2 0 1.4-.3 2.6-1 3.5-.6.9-1.6 1.7-2.8 2.3 1.7.5 3 1.4 3.8 2.6.8 1.2 1.3 2.7 1.3 4.4 0 1.4-.3 2.6-.8 3.6s-1.3 1.9-2.2 2.5c-.9.6-2 1.1-3.2 1.4-1.2.3-2.4.5-3.6.5H0V0h13.1zm-.8 11.2c1.1 0 2-.3 2.7-.8.7-.5 1-1.4 1-2.5 0-.6-.1-1.2-.3-1.6-.2-.4-.5-.7-.9-1-.4-.2-.8-.4-1.3-.5-.5-.1-1-.1-1.6-.1H6.1v6.5h6.2zm.3 11.8c.6 0 1.2-.1 1.7-.2s1-.3 1.4-.6c.4-.3.7-.6 1-1.1.2-.5.4-1.1.4-1.8 0-1.4-.4-2.4-1.2-3.1-.8-.6-1.9-.9-3.2-.9H6.1V23h6.5zm19.3-.1c.8.8 2 1.2 3.6 1.2 1.1 0 2.1-.3 2.9-.8.8-.6 1.3-1.2 1.5-1.8h4.9c-.8 2.4-2 4.1-3.6 5.2-1.6 1-3.5 1.6-5.8 1.6-1.6 0-3-.3-4.3-.8-1.3-.5-2.3-1.2-3.2-2.2-.9-.9-1.6-2-2-3.3-.5-1.3-.7-2.7-.7-4.3 0-1.5.2-2.9.7-4.2.5-1.3 1.2-2.4 2.1-3.4.9-.9 2-1.7 3.2-2.2 1.3-.5 2.6-.8 4.2-.8 1.7 0 3.2.3 4.5 1 1.3.7 2.3 1.5 3.1 2.7.8 1.1 1.4 2.4 1.8 3.8.2 1.4.3 2.8.2 4.4H30.5c0 1.6.6 3.1 1.4 3.9zm6.3-10.5c-.7-.7-1.8-1.1-3.1-1.1-.9 0-1.6.2-2.2.5-.6.3-1 .7-1.4 1.1-.4.4-.6.9-.7 1.4-.1.5-.2.9-.2 1.3h9c-.2-1.5-.7-2.5-1.4-3.2zM52.8 0v10.4h.1c.7-1.2 1.6-2 2.7-2.5s2.1-.8 3.2-.8c1.5 0 2.7.2 3.6.6.9.4 1.7 1 2.2 1.7.5.7.9 1.6 1.1 2.6.2 1 .3 2.1.3 3.4v12.3h-5.5V16.4c0-1.7-.3-2.9-.8-3.7-.5-.8-1.4-1.2-2.7-1.2-1.5 0-2.6.5-3.2 1.3-.7.9-1 2.4-1 4.4v10.5h-5.5V0h5.5zM70 10.6c.6-.9 1.3-1.5 2.2-2.1.9-.5 1.9-.9 3-1.1 1.1-.2 2.2-.3 3.3-.3 1 0 2 .1 3.1.2 1 .1 2 .4 2.8.8.9.4 1.5 1 2.1 1.7.5.7.8 1.7.8 2.9v10.5c0 .9.1 1.8.2 2.6s.4 1.5.7 1.9h-5.6c-.2-.2-.3-.6-.4-.9-.1-.3-.1-.7-.1-1-.9.9-1.9 1.5-3.1 1.9-1.2.4-2.4.5-3.6.5-1 0-1.8-.1-2.7-.4-.8-.2-1.5-.6-2.2-1.1-.6-.5-1.1-1.1-1.5-1.9-.3-.8-.5-1.6-.5-2.7s.2-2.1.6-2.8c.4-.7.9-1.3 1.5-1.8.6-.4 1.4-.8 2.2-1 .8-.2 1.6-.4 2.5-.5l2.4-.3c.8-.1 1.5-.2 2.1-.3.6-.2 1.1-.4 1.5-.7.4-.3.5-.7.5-1.3 0-.6-.1-1.1-.3-1.4-.2-.3-.5-.6-.8-.8-.3-.2-.7-.3-1.1-.4-.4-.1-.9-.1-1.4-.1-1.1 0-1.9.2-2.5.7-.6.5-1 1.3-1.1 2.3h-5.5c0-1.2.4-2.3.9-3.1zm10.9 7.8c-.3.1-.7.2-1.1.3-.4.1-.8.1-1.3.2-.4.1-.9.1-1.3.2l-1.2.3c-.4.1-.8.3-1 .5-.3.2-.5.5-.7.8-.3.4-.3.8-.3 1.3s.1.9.3 1.2c.2.3.4.6.7.8.3.2.7.3 1.1.4.4.1.8.1 1.3.1 1.1 0 1.9-.2 2.5-.5.6-.4 1-.8 1.3-1.3.3-.5.5-1 .5-1.5.1-.5.1-.9.1-1.2v-2.1c-.3.2-.6.4-.9.5zM95.6 7.6v2.8h.1c.7-1.2 1.6-2 2.7-2.5s2.3-.8 3.4-.8c1.5 0 2.7.2 3.6.6 1 .4 1.7 1 2.2 1.7.5.7.9 1.6 1.2 2.6.2 1 .3 2.1.3 3.4v12.3h-5.5V16.4c0-1.7-.3-2.9-.8-3.7-.5-.8-1.4-1.3-2.8-1.3-1.5 0-2.6.6-3.3 1.5-.7.9-1 2.4-1 4.4v10.5h-5.5V7.6h5.4zm25.8 3.6c-.9 0-1.6.2-2.2.6-.6.4-1.1.9-1.5 1.6-.4.6-.6 1.3-.8 2.1-.2.8-.2 1.5-.2 2.3 0 .7.1 1.5.2 2.2.2.8.4 1.4.8 2 .4.6.8 1.1 1.4 1.5.6.4 1.3.6 2.2.6 1.3 0 2.3-.4 3.1-1.1.7-.7 1.2-1.7 1.3-3h5.3c-.4 2.7-1.4 4.7-3.1 6.1-1.7 1.4-3.9 2.1-6.6 2.1-1.5 0-2.9-.3-4.1-.8-1.3-.5-2.3-1.2-3.2-2.1-.9-.9-1.6-2-2.1-3.2-.5-1.3-.7-2.6-.7-4.1 0-1.6.2-3 .7-4.3.5-1.3 1.1-2.5 2-3.5.9-1 2-1.7 3.2-2.3 1.3-.5 2.7-.8 4.3-.8 1.2 0 2.3.2 3.4.5s2.1.8 2.9 1.4c.9.6 1.6 1.4 2.1 2.4.5.9.8 2.1.9 3.4h-5.4c-.2-2.4-1.5-3.6-3.9-3.6zm-92-9.3h11.2v2.7H29.4zm109.9 21c.8.8 2.1 1.2 3.6 1.2 1.1 0 2.1-.3 2.9-.8.8-.6 1.3-1.2 1.5-1.8h4.8c-.8 2.4-2 4.1-3.6 5.2-1.6 1-3.5 1.6-5.8 1.6-1.6 0-3-.3-4.3-.8-1.3-.5-2.3-1.2-3.2-2.2-.9-.9-1.6-2-2-3.3-.5-1.3-.7-2.7-.7-4.3 0-1.5.2-2.9.7-4.2.5-1.3 1.2-2.4 2.1-3.4.9-.9 2-1.7 3.2-2.2 1.3-.5 2.7-.8 4.2-.8 1.7 0 3.2.3 4.4 1 1.3.7 2.3 1.5 3.1 2.7.8 1.1 1.4 2.4 1.8 3.8.4 1.4.5 2.9.4 4.5h-14.5c0 1.5.6 3 1.4 3.8zm6.4-10.5c-.7-.7-1.8-1.1-3.1-1.1-.9 0-1.6.2-2.2.5-.6.3-1.1.7-1.4 1.1-.3.4-.6.9-.7 1.4-.1.5-.2.9-.2 1.3h9c-.3-1.5-.8-2.5-1.4-3.2z"></path><!--]-->
                                            </g>
                                        </svg></a></div>
                                <div class="StaticFooter-sectionContainer-Kyo"><!--[-->
                                    <div class="StaticFooter-footerSection-E69">
                                        <div class="StaticFooter-footerSectionHeader-xFg">Built For Creatives</div>
                                        <div><!--[-->
                                            <ul><!--[-->
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-Footer-link-try-behance-pro e2e-FooterLinks-footerSelectorItems" href="/pro?tracking_source=footer_static_gallery" target="_blank"><!----> Try Behance Pro</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-find-inspiration-link e2e-FooterLinks-footerSelectorItems" href="/galleries?tracking_source=footer_static_gallery" target="_blank"><!----> Find Inspiration</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-get-hired-link e2e-FooterLinks-footerSelectorItems" href="/updates/get-hired-on-behance?tracking_source=footer_static_gallery" target="_blank"><!----> Get Hired</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-sell-assets-link e2e-FooterLinks-footerSelectorItems" href="/updates/behance-assets?tracking_source=footer_static_gallery" target="_blank"><!----> Sell Creative Assets</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-sell-freelance-services-link e2e-FooterLinks-footerSelectorItems" href="/updates/get-hired-on-behance-with-services?tracking_source=footer_static_gallery" target="_blank"><!----> Sell Freelance Services</a></li><!--]-->
                                            </ul><!--]-->
                                        </div>
                                    </div>
                                    <div class="StaticFooter-footerSection-E69">
                                        <div class="StaticFooter-footerSectionHeader-xFg">Find Talent</div>
                                        <div><!--[-->
                                            <ul><!--[-->
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-post-a-job-link e2e-FooterLinks-footerSelectorItems" href="/joblist?tracking_source=footer_static_gallery" target="_blank"><!----> Post a Job</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-freelance-designers-link e2e-FooterLinks-footerSelectorItems" href="/hire/freelancers?tracking_source=footer_static_gallery" target="_blank"><!----> All Featured Freelance Designers</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-graphic-designer-link e2e-FooterLinks-footerSelectorItems" href="/hire/graphic-designers?tracking_source=footer_static_gallery" target="_blank"><!----> Graphic Designers</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-photographers-link e2e-FooterLinks-footerSelectorItems" href="/hire/photographers?tracking_source=footer_static_gallery" target="_blank"><!----> Photographers</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-video-editors-link e2e-FooterLinks-footerSelectorItems" href="/hire/video-editors?tracking_source=footer_static_gallery" target="_blank"><!----> Video Editors</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-web-designers-link e2e-FooterLinks-footerSelectorItems" href="/hire/web-designers?tracking_source=footer_static_gallery" target="_blank"><!----> Web Designers</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-illustrators-link e2e-FooterLinks-footerSelectorItems" href="/hire/illustrators?tracking_source=footer_static_gallery" target="_blank"><!----> Illustrators</a></li><!--]-->
                                            </ul><!--]-->
                                        </div>
                                    </div>
                                    <div class="StaticFooter-footerSection-E69">
                                        <div class="StaticFooter-footerSectionHeader-xFg">Behance</div>
                                        <div><!--[-->
                                            <ul><!--[-->
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-about-behance-link e2e-FooterLinks-footerSelectorItems" href="/about?tracking_source=footer_static_gallery" target="_blank"><!----> About Behance</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-adobe-portfolio-link e2e-FooterLinks-footerSelectorItems" href="https://portfolio.adobe.com/" target="_blank"><!----> Adobe Portfolio</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><button class="FooterLinks-downloadApp-Tiw StaticFooter-footerSelectorLinks-HKF e2e-StaticFooter-download-app-link e2e-FooterLinks-footerSelectorItem" aria-controls="0a99b732-fba4-4e2b-b053-35a6e513c91f" aria-expanded="false">Download the App</button></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-blog-link e2e-FooterLinks-footerSelectorItems" href="/blog?tracking_source=footer_static_gallery" target="_blank"><!----> Blog</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-careers-link e2e-FooterLinks-footerSelectorItems" href="/careers?tracking_source=footer_static_gallery" target="_blank"><!----> Careers</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-help-center-link e2e-FooterLinks-footerSelectorItems" href="https://help.behance.net/" target="_blank"><!----> Help Center</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-contact-us-link e2e-FooterLinks-footerSelectorItems" href="https://help.behance.net/hc/en-us/requests/new?ticket_form_id=4164" target="_blank"><!----> Contact Us</a></li><!--]-->
                                            </ul><!--]-->
                                        </div>
                                    </div>
                                    <div class="StaticFooter-footerSection-E69">
                                        <div class="StaticFooter-footerSectionHeader-xFg">Social</div>
                                        <div><!--[-->
                                            <ul><!--[-->
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-instagram-link e2e-FooterLinks-footerSelectorItems" href="http://instagram.com/behance" target="_blank"><span class="StaticFooter-iconClass-JdV"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 47 47" class="FooterLinks-icon-Fzx" customiconfillclass="StaticFooter-iconFillClass-zNl" aria-hidden="true">
                                                                <path d="M23.5 47a23.506 23.506 0 0 1-9.147-45.153 23.506 23.506 0 0 1 18.294 43.306A23.353 23.353 0 0 1 23.5 47Zm1.548-38.67h-1.577c-4.113.008-4.649.027-6.254.1a11.142 11.142 0 0 0-3.68.713 7.761 7.761 0 0 0-4.428 4.442 11.248 11.248 0 0 0-.7 3.685c-.07 1.593-.086 2.126-.079 6.253s.027 4.65.1 6.255a11.162 11.162 0 0 0 .713 3.679 7.76 7.76 0 0 0 4.445 4.429 11.231 11.231 0 0 0 3.684.7c1.424.062 2 .081 4.64.081h1.618c4.107-.008 4.644-.026 6.255-.1a11.213 11.213 0 0 0 3.679-.713 7.751 7.751 0 0 0 4.427-4.445 11.156 11.156 0 0 0 .7-3.682c.072-1.629.088-2.17.08-6.255s-.027-4.626-.1-6.253a11.175 11.175 0 0 0-.712-3.681 7.751 7.751 0 0 0-4.444-4.428 11.171 11.171 0 0 0-3.684-.7c-1.437-.061-2.017-.08-4.683-.08Zm-3.214 27.61c-2.6 0-3.137-.023-4.438-.079a8.416 8.416 0 0 1-2.818-.517 5.025 5.025 0 0 1-2.885-2.873 8.434 8.434 0 0 1-.527-2.817c-.075-1.6-.091-2.08-.1-6.129-.009-4.033.006-4.515.076-6.128a8.418 8.418 0 0 1 .516-2.817 5.019 5.019 0 0 1 2.873-2.88 8.4 8.4 0 0 1 2.815-.527c1.579-.075 2.055-.092 6.129-.1h1.757c2.454 0 3 .019 4.374.079a8.382 8.382 0 0 1 2.816.516 5.022 5.022 0 0 1 2.885 2.875 8.348 8.348 0 0 1 .527 2.814c.077 1.612.094 2.094.1 6.129.007 4.073-.007 4.55-.076 6.129a8.431 8.431 0 0 1-.516 2.818 5.03 5.03 0 0 1-2.875 2.884 8.417 8.417 0 0 1-2.814.527c-1.582.075-2.058.091-6.131.1ZM23.5 15.71h-.017a7.79 7.79 0 0 0 .017 15.579h.015A7.79 7.79 0 0 0 23.5 15.71Zm8.077-2.143a1.821 1.821 0 1 0 1.823 1.819 1.823 1.823 0 0 0-1.824-1.817ZM23.5 28.556a5.057 5.057 0 0 1-.008-10.113h.01a5.057 5.057 0 0 1 .01 10.113Z"></path>
                                                            </svg></span> Instagram</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-twitter-link e2e-FooterLinks-footerSelectorItems" href="http://twitter.com/behance" target="_blank"><span class="StaticFooter-iconClass-JdV"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 20 20" xml:space="preserve" class="FooterLinks-icon-Fzx" aria-hidden="true">
                                                                <path class="" d="M20,10c0,5.5-4.5,10-10,10S0,15.5,0,10S4.5,0,10,0S20,4.5,20,10z"></path>
                                                                <path class="Twitter-icon-o8D StaticFooter-iconFillClass-zNl" d="M17.5,6.3c-0.5,0.2-1,0.3-1.7,0.5c0.7-0.3,1-0.8,1.2-1.5c-0.5,0.3-1.2,0.5-1.8,0.7c-0.5-0.5-1.2-0.8-2-0.8c-1.5,0-2.8,1.3-2.8,2.8c0,0.2,0,0.5,0,0.7C8,8.5,5.8,7.3,4.5,5.7c-0.2,0.5-0.3,1-0.3,1.5c0,1,0.5,1.8,1.3,2.3C5,9.5,4.7,9.3,4.2,9.2l0,0c0,1.3,1,2.5,2.3,2.8c-0.2,0-0.5,0.2-0.7,0.2s-0.3,0-0.5,0c0.3,1.2,1.3,1.8,2.7,2c-1,0.8-2.2,1.3-3.5,1.3c-0.2,0-0.5,0-0.7,0c1.3,0.8,2.8,1.2,4.3,1.2c5.2,0,8-4.3,8-8c0-0.2,0-0.3,0-0.3C16.7,7.5,17.2,7,17.5,6.3z"></path>
                                                            </svg></span> Twitter</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-pinterest-link e2e-FooterLinks-footerSelectorItems" href="http://www.pinterest.com/behance" target="_blank"><span class="StaticFooter-iconClass-JdV"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" xml:space="preserve" class="FooterLinks-icon-Fzx" aria-hidden="true">
                                                                <path class="" d="M20,10c0,5.5-4.5,10-10,10S0,15.5,0,10S4.5,0,10,0S20,4.5,20,10z"></path>
                                                                <path class="Pinterest-icon-qlR StaticFooter-iconFillClass-zNl" d="M7.4,19.7c0,0,0.8-1.2,0.9-2C8.5,17.2,9,14.8,9,14.8c0.3,0.7,1.3,1.2,2.5,1.2c3.2,0,5.3-3,5.3-6.8
      c0-3-2.5-5.7-6.3-5.7c-4.8,0-7.2,3.3-7.2,6.2c0,1.7,0.7,3.3,2,3.8c0.2,0.2,0.5,0,0.5-0.3C5.8,13,6,12.5,6,12.3C6,12,6,12,5.8,11.8
      c-0.3-0.5-0.7-1.2-0.7-2C5.2,7.3,7,5,10.2,5c2.7,0,4.2,1.7,4.2,3.8c0,2.8-1.3,5.3-3.2,5.3c-1,0-1.8-0.8-1.5-2
      c0.3-1.3,0.8-2.7,0.8-3.5S10,7.2,9.2,7.2c-1,0-2,1.2-2,2.7c0,1,0.3,1.5,0.3,1.5S6.3,16,6.2,16.8C6,17.5,6,18.5,6,19.2
      c0,0,0.5,0.2,0.7,0.3c0.1,0,0.3,0.1,0.4,0.1C7.3,19.6,7.4,19.7,7.4,19.7z"></path>
                                                            </svg></span> Pinterest</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-facebook-link e2e-FooterLinks-footerSelectorItems" href="http://www.facebook.com/Behance" target="_blank"><span class="StaticFooter-iconClass-JdV"><svg xmlns="http://www.w3.org/2000/svg" width="122.206" height="120.737" viewbox="0 0 122.206 120.737" class="FooterLinks-icon-Fzx" aria-hidden="true">
                                                                <path d="M78.194,6.621C95.68,10.216,108.975,19.2,118,34.15c10.976,18.187,12.267,37.206,4,56.777-7.621,18.049-21.51,28.962-39.955,34.513a29.894,29.894,0,0,1-4.906.609V83.293H90.526l2.958-17.058H77c0-4.906-.23-9.207.065-13.473.292-4.223,2.826-6.643,7.163-6.8,2.819-.1,5.644-.019,8.953-.019V29.958c-10.55-1.466-21.326-3.3-30.442,4.931-9.3,8.4-6.389,19.937-7.018,31h-14.3V83.07H55.509v43.587c-4.678-1.418-9.219-2.311-13.352-4.131-19.674-8.665-32.034-23.909-35.9-44.757C1.191,50.494,13.685,25.2,38.406,11.938,50.842,5.264,64.277,5.29,78.194,6.621Z" transform="translate(-5.142 -5.92)" class="FacebookSimplified-icon-qXb StaticFooter-iconClass-JdV"></path>
                                                            </svg></span> Facebook</a></li>
                                                <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-StaticFooter-linkedIn-link e2e-FooterLinks-footerSelectorItems" href="https://www.linkedin.com/company/151575" target="_blank"><span class="StaticFooter-iconClass-JdV"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 20 20" xml:space="preserve" class="FooterLinks-icon-Fzx" aria-hidden="true">
                                                                <path class="" d="M20,10c0,5.5-4.5,10-10,10S0,15.5,0,10S4.5,0,10,0S20,4.5,20,10z"></path>
                                                                <path class="LinkedIn-icon-bjP StaticFooter-iconFillClass-zNl" d="M7.5,5.2c0-0.8-0.7-1.5-1.7-1.5S4.2,4.3,4.2,5.2s0.7,1.5,1.7,1.5l0,0C6.8,6.7,7.5,6,7.5,5.2z"></path>
                                                                <rect class="LinkedIn-icon-bjP StaticFooter-iconFillClass-zNl" x="4.7" y="8" width="2.5" height="7"></rect>
                                                                <path class="LinkedIn-icon-bjP StaticFooter-iconFillClass-zNl" d="M16.2,11.2c0-2.3-1.2-3.7-2.8-3.7c-1,0-1.8,0.7-2,1.5l-0.2-1H8.7c0,0.3,0,1.7,0,1.7V15h2.5v-3.8c0-1,0.5-1.7,1.2-1.7c0.8,0,1.3,0.3,1.3,1.7v3.7h2.5V11.2z"></path>
                                                            </svg></span> LinkedIn</a></li><!--]-->
                                            </ul><!--]-->
                                        </div>
                                    </div><!--]-->
                                </div>
                            </div>
                            <hr class="StaticFooter-divider-HTR">
                            <div class="StaticFooter-bottomFooter-Z_1">
                                <div class="StaticFooter-adobeInfo-UYN">
                                    <div class="StaticFooter-adobeLogo-ROd"><a class="StaticFooter-logoLink-vQ3" href="https://www.adobe.com?promoid=RYGDMYVW" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 60 15.619" aria-labelledby="IconBase-title-1ec6c230-31db-4081-a2a6-b41965c969eb IconBase-description-1ec6c230-31db-4081-a2a6-b41965c969eb" role="graphics-symbol img" width="100%" height="100%" aria-hidden="true">
                                                <title id="IconBase-title-1ec6c230-31db-4081-a2a6-b41965c969eb">Adobe, Inc.</title>
                                                <desc id="IconBase-description-1ec6c230-31db-4081-a2a6-b41965c969eb"></desc>
                                                <g><!--[-->
                                                    <path d="M179.682,34.616l-.647,2a.145.145,0,0,1-.148.107h-1.564c-.094,0-.122-.053-.107-.132l2.7-7.78a2.513,2.513,0,0,0,.132-.823.089.089,0,0,1,.081-.094h2.157c.067,0,.094.013.108.081l3.06,8.629c.026.067.013.12-.067.12h-1.75a.132.132,0,0,1-.149-.094l-.688-2.009ZM182.3,32.93c-.264-.89-.808-2.522-1.058-3.479h-.013c-.216.9-.7,2.38-1.058,3.479Z" transform="translate(-153.778 -24.202)"></path>
                                                    <path d="M241.14,28.636a3.573,3.573,0,0,1,3.91-3.541c.107,0,.242.015.444.028V22.46a.085.085,0,0,1,.094-.094h1.7c.067,0,.081.026.081.081v7.969a7.51,7.51,0,0,0,.054.984c0,.067-.013.094-.094.122a6.793,6.793,0,0,1-2.657.538A3.226,3.226,0,0,1,241.14,28.636Zm4.355-1.915a1.389,1.389,0,0,0-.5-.067,1.8,1.8,0,0,0-1.928,1.887,1.687,1.687,0,0,0,1.793,1.915,1.9,1.9,0,0,0,.633-.081Z" transform="translate(-209.252 -19.408)"></path>
                                                    <path d="M303.016,46.411a3.328,3.328,0,1,1-6.646.041,3.3,3.3,0,0,1,3.356-3.492A3.212,3.212,0,0,1,303.016,46.411Zm-4.746.015c0,1.19.553,1.941,1.455,1.941.783,0,1.375-.674,1.375-1.915,0-1.058-.431-1.928-1.455-1.928C298.864,44.524,298.27,45.225,298.27,46.426Z" transform="translate(-257.179 -37.279)"></path>
                                                    <path d="M356.658,22.37c.108,0,.132.013.132.108v2.764a4.3,4.3,0,0,1,1.135-.144,3.086,3.086,0,0,1,3.236,3.209,3.743,3.743,0,0,1-4.044,3.761A7.063,7.063,0,0,1,355,31.759a.156.156,0,0,1-.081-.132V22.464c0-.067.026-.094.094-.094Zm.926,4.314a2.71,2.71,0,0,0-.793.108v3.654a2.064,2.064,0,0,0,.5.054,1.856,1.856,0,0,0,1.954-2.023,1.58,1.58,0,0,0-1.656-1.792Z" transform="translate(-307.986 -19.412)"></path>
                                                    <path d="M409.443,46.941c.067.768.607,1.4,1.928,1.4a4.176,4.176,0,0,0,1.658-.309c.041-.028.081-.013.081.067v1.28c0,.1-.026.132-.094.163a4.53,4.53,0,0,1-2.063.4,3.161,3.161,0,0,1-3.424-3.41,3.286,3.286,0,0,1,3.262-3.56,2.748,2.748,0,0,1,2.844,2.909,4.281,4.281,0,0,1-.067.9.114.114,0,0,1-.107.107,12.3,12.3,0,0,1-1.39.054Zm1.753-1.308a4.486,4.486,0,0,0,.674-.026v-.1a1.1,1.1,0,0,0-1.147-1.058,1.278,1.278,0,0,0-1.295,1.19Z" transform="translate(-353.639 -37.288)"></path>
                                                    <path d="M84.13,0h6.523V15.619Z" transform="translate(-73.005)"></path>
                                                    <path d="M6.529,0H0V15.619Z"></path>
                                                    <path d="M48.032,43.53l4.156,9.862H49.465l-1.243-3.141H45.18Z" transform="translate(-39.205 -37.774)"></path><!--]-->
                                                </g>
                                            </svg><span class="StaticFooter-screenReaderOnly-K51">Navigate to adobe.com opens in a new tab</span></a></div>
                                    <div class="StaticFooter-allRightsReserved-iM3"><span>©</span> 2024 Adobe Inc. All rights reserved.</div>
                                </div>
                                <div><!--[-->
                                    <ul class="StaticFooter-moreFooterLinks-Zab">
                                        <li class="StaticFooter-footerSelectorItems-I6_">
                                            <div class="Tooltip-wrapper-Uzv Tooltip-responsive-XDl" style="cursor:pointer;"><span class="Tooltip-trigger-eZ_"><!--[--><button class="StaticFooter-resetButton-lt7 StaticFooter-footerLanguageSelector-lED" aria-expanded="false" aria-controls="553223b5-e402-4392-8673-5b23d69e0221" aria-label="Language Currently Selected: English" aria-haspopup="true">English</button><!--]--></span>
                                                <div class="Tooltip-topPositionHitBox-Q8Z" style="height: calc(100% + 5px + 6px)"></div>
                                                <div style="display:none;cursor:initial;padding-top:10px;padding-bottom:10px;padding-right:0px;padding-left:0px;bottom:calc(100% + 5px + 6px);" class="Tooltip-container-DIF Tooltip-position-top-FZF Tooltip-center-krh">
                                                    <div class="Tooltip-triangleContainer-r5D" style="">
                                                        <div class="Tooltip-triangle-Qw9"></div>
                                                        <div class="Tooltip-mask-mwQ"></div>
                                                    </div><!--[-->
                                                    <ul id="553223b5-e402-4392-8673-5b23d69e0221" class="LanguageSelector-tooltipContainer-cBd" role="menu" aria-label="Language Options"><!--[-->
                                                        <li class="LanguageSelector-footerSelectorItem-m2u LanguageSelector-selected-sPL" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-en_US" data-language-locale="en_US" lang="en-US">English</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-cs_CZ" data-language-locale="cs_CZ" lang="cs-CZ">Čeština</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-da_DK" data-language-locale="da_DK" lang="da-DK">Dansk</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-de_DE" data-language-locale="de_DE" lang="de-DE">Deutsch</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-es_ES" data-language-locale="es_ES" lang="es-ES">Español</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-fr_FR" data-language-locale="fr_FR" lang="fr-FR">Français</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-it_IT" data-language-locale="it_IT" lang="it-IT">Italiano</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-nl_NL" data-language-locale="nl_NL" lang="nl-NL">Nederlands</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-nb_NO" data-language-locale="nb_NO" lang="nb-NO">Norsk</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-pl_PL" data-language-locale="pl_PL" lang="pl-PL">Polski</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-pt_BR" data-language-locale="pt_BR" lang="pt-BR">Português</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-ru_RU" data-language-locale="ru_RU" lang="ru-RU">Pусский</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-fi_FI" data-language-locale="fi_FI" lang="fi-FI">Suomi</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-sv_SE" data-language-locale="sv_SE" lang="sv-SE">Svenska</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-tr_TR" data-language-locale="tr_TR" lang="tr-TR">Türkçe</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-ja_JP" data-language-locale="ja_JP" lang="ja-JP">日本語</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-ko_KR" data-language-locale="ko_KR" lang="ko-KR">한국어</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-zh_CN" data-language-locale="zh_CN" lang="zh-CN">中文(简体)</button></li>
                                                        <li class="LanguageSelector-footerSelectorItem-m2u" role="menuitem"><button class="LanguageSelector-resetButton-qrR LanguageSelector-footerSelectorLinks-h87 e2e-LanguageSelector-zh_TW" data-language-locale="zh_TW" lang="zh-TW">中文(繁體)</button></li><!--]-->
                                                    </ul><!--]--><!---->
                                                </div>
                                            </div>
                                        </li><!--[-->
                                        <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-Footer-link-terms e2e-FooterLinks-footerSelectorItems" href="http://www.adobe.com/legal/terms.html" target="_blank"><!----> TOU</a></li>
                                        <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-Footer-link-privacy e2e-FooterLinks-footerSelectorItems" href="http://www.adobe.com/privacy.html" target="_blank"><!----> Privacy</a></li>
                                        <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-Footer-link-community e2e-FooterLinks-footerSelectorItems" href="/misc/community?tracking_source=footer_static_gallery" target="_blank"><!----> Community</a></li><!--]-->
                                        <li class="StaticFooter-footerSelectorItems-I6_"><button class="StaticFooter-resetButton-lt7 StaticFooter-footerSelectorLinks-HKF js-privacy-personalize" aria-label="Cookie Preferences" aria-controls="onetrust-pc-sdk"></button></li><!--[-->
                                        <li class="StaticFooter-footerSelectorItems-I6_"><a class="StaticFooter-footerSelectorLinks-HKF FooterLinks-link-SQa e2e-Footer-link-do-not-sell e2e-FooterLinks-footerSelectorItems" href="https://www.adobe.com/privacy/us-rights.html" target="_blank"><!----> Do not sell or share my personal information</a></li><!--]-->
                                    </ul><!--]-->
                                </div>
                            </div><!---->
                        </footer><!--]-->
                    </div><!--[-->
                    <div class="vue-portal-target js-vue-overlay-portal"></div>
                    <div class="js-vue-project-view-mount"></div><!--]--><!----><!----><!--]-->
                </div>
                <div class="vue-portal-target">
                    <div id="be-root-portal"></div>
                </div><!--]-->
            </div>
        </div>
    </div>
    <script type="application/json" id="beconfig-store_state">
        {
            "gates": {
                "feature_get_similar_creatives_for_hire": 1,
                "feature_hire_consent_to_review": 1,
                "feature_multi_user_tooltip_hire": 1,
                "feature_takedown_project_modules": 0,
                "feature_project_performance_insights": 1,
                "feature_recaptcha_message": 0,
                "feature_stock_rail": 1,
                "feature_express_rail": 0,
                "feature_cai_single_image_view": 1,
                "feature_cai_project_view": 1,
                "feature_cai_v1": 1,
                "track_user_project_progress": 0,
                "feature_vue_embed_module": 1,
                "optimized_covers": 0,
                "message_banner": 0,
                "max_banner": 0,
                "max_register_banner": 0,
                "vote_banner": 0,
                "pre_black_friday_banner": 0,
                "black_friday_banner": 0,
                "cyber_monday_banner": 0,
                "feature_push_to_mobile_prompt": 1,
                "feature_get_hiring_help_popup": 1,
                "foryou_mark_as_seen_mutation_allowed": 1,
                "moodboard_covers": 0,
                "image_similar_styles": 1,
                "aggressive_lazy_loading": 0,
                "admin_impersonation_ims_v1": 1,
                "log_ims_acquire_access_token": 1,
                "remove_edu_cookies": 1,
                "feature_updated_profile_checklist": 1,
                "feature_creative_subscription_tester": 0,
                "feature_pin_to_subscription": 1,
                "feature_gql_update_project_order": 1,
                "feature_gql_clone_project": 1,
                "feature_gql_delete_project": 1,
                "feature_gql_unpublish_project": 1,
                "feature_subscription_primary_nav_row": 1,
                "feature_subscription_checklist": 0,
                "feature_add_pinned_project": 1,
                "feature_job_approval_queue": 1,
                "feature_foryou_subscription_source_files": 0,
                "feature_user_availability_search": 1,
                "feature_project_premium_search": 1,
                "feature_three_d_assets": 0,
                "feature_editor_rtl": 1,
                "ops_disable_announcements": 0,
                "ops_disable_google_one_tap_login": 0,
                "feature_source_files_paid": 1,
                "feature_source_files_av": 0,
                "feature_module_source_files_permalink": 1,
                "feature_remove_module_source_files": 1,
                "feature_brushes_callout": 0,
                "feature_lightroom_presets_callout": 0,
                "webp_project_modules": 0,
                "performance_measurement": 0,
                "disable_login": 0,
                "ops_disable_source_files": 0,
                "ops_disable_adobe_checkout_modal": 0,
                "feature_post_projects_abuse": 1,
                "remove_shim": 0,
                "feature_verified_social": 1,
                "feature_verified_social_post_mvp": 0,
                "feature_inbox_file_uploads": 1,
                "feature_inbox_scam_blocklist": 1,
                "feature_project_titlte_tag_blocklist": 1,
                "use_neo4j_for_followers_and_following": 1,
                "feature_meet": 1,
                "feature_cai_web_components": 1,
                "feature_personalized_content_feed": 1,
                "feature_search_assets_tab": 1,
                "feature_tags_seo_page": 0,
                "feature_primary_assets_tab": 1,
                "safari_16_4_bug_fix": 1,
                "hire_banner_ab": 0,
                "feature_recent_search_context": 0,
                "feature_search_sidebar": 1,
                "feature_search_sidebar_open_loggedout": 1,
                "feature_search_gk_debug": 0,
                "ops_disable_amplify_content": 0,
                "dev_ignore_amplify_off_switch": 0,
                "hide_add_linked_assets": 1,
                "hide_for_you_wip_header_for_aware_users": 1,
                "hide_tooltip_for_project_cover_ribbon": 1,
                "feature_assets_improved_attachments": 1,
                "for_you_freelance_row": 1,
                "log_shim_removal": 0,
                "feature_infinite_load_project_modules": 0,
                "feature_freelancer_featured_program": 1,
                "ims_plugin": 0,
                "feature_t2e_swaps": 1,
                "feature_about_page": 1,
                "feature_about_page_50_million_users": 1,
                "feature_survey_announcements": 1,
                "feature_logged_out_csr_announcements": 1,
                "feature_targeted_logged_out_announcements": 1,
                "async_project_extras_enabled": 0,
                "show_hidden_asset_categories": 0,
                "feature_for_you_hireable_boost": 1,
                "feature_for_you_creator_pro_creator": 0,
                "feature_nft_deprecated": 1,
                "feature_nft_deprecated_phase_2": 1,
                "css_grid_for_you_following_enabled": 1,
                "css_grid_for_you_subscriptions_enabled": 1,
                "css_grid_image_search_enabled": 0,
                "css_grid_project_search_enabled": 0,
                "css_grid_assets_search_enabled": 0,
                "css_grid_hire_page_enabled": 1,
                "css_grid_assets_page_enabled": 1,
                "nav_hire_freelance_services_ab_test": 0,
                "for_you_increase_test_recommendations": 0,
                "paypal_ui": 1,
                "paypal_sourcefiles": 0,
                "feature_creator_pro_granular_visibility_view": 1,
                "feature_creator_pro": 1,
                "feature_adobe_tools_rename": 1,
                "user_hire_intent_redirect": 0,
                "feature_updated_decline_inquiry_modal": 1,
                "list_keyboard_nav": 1,
                "adobe_analytics_aep": 1,
                "feature_put_lightbox_into_vue": 0,
                "feature_sticky_project_hire_cta": 1,
                "feature_freelance_grouped_reviews": 1,
                "feature_updated_availability_timeline": 1,
                "feature_updated_categories": 0,
                "feature_hire_briefs": 0,
                "feature_prev_next_profile_panel": 1,
                "upgrade_project_editor_css": 0,
                "dynamic_load_livestream": 0,
                "dynamic_load_live": 0
            },
            "config": {
                "INBOX": "\/inbox",
                "hasPublicShareEnabled": true,
                "ENVIRONMENT": "prod",
                "orchestratorBaseUrl": "https:\/\/livestream-cdn.adobe.io\/",
                "GLOBALNAV": {
                    "OPEN_NOTIFICATIONS": false,
                    "NOTIFICATION_TITLE": "Your Notifications",
                    "NOTIFICATION_PROPS_TITLE": "Your Requests"
                },
                "UTIL_NAV_ENV": "prod",
                "UTIL_NAV": "https:\/\/prod.adobeccstatic.com",
                "XHR": {
                    "URL_SIGNUP_ACTIVATE": "\/signup\/activate"
                },
                "SSO": {
                    "CLIENT_ID": "BehanceWebSusi1",
                    "COOKIE_IMS_ACCESS_TOKEN_TTL": 86400,
                    "COOKIE_IMS_LOGGED_OUT_TTL": 60,
                    "COOKIE_IMS_ACCESS_TOKEN": "iat0",
                    "COOKIE_IMS_IMPERSONATOR_TOKEN": "iatx",
                    "COOKIE_IMS_LOGGED_OUT": "ilo0",
                    "COOKIES_DISABLED": "ilo0",
                    "IGNORE_COOKIE_UPDATE": false,
                    "LOCALE": "en_US",
                    "IS_PARTIAL_USER": false,
                    "IS_LOGGED_IN_FULL_USER": false,
                    "USES_SINGLE_LOG_OUT": false,
                    "OMNITURE_AC_STATE": "behance.net",
                    "QS_IMS_SSO_INBOUND": "sso_inbound",
                    "ADMIN_IMPERSONATION_IMS_V1": true,
                    "REMOVE_SHIM": false,
                    "FEATURE_SHIM_REMOVAL_USE_NEW_COOKIE": false,
                    "QS_IMS_SIGNIN_ATTEMPT": "isa0",
                    "QS_IMS_SOCIAL_PROVIDER": "isp0",
                    "SCOPES": ["AdobeID", "openid", "gnav", "sao.cce_private", "creative_cloud", "creative_sdk", "be.pro2.external_client", "additional_info.roles"],
                    "URLS": {
                        "IMS_V1": "https:\/\/static.adobelogin.com\/imslib\/imslib.min.js?client_id=BehanceWebSusi1&locale=en_US",
                        "IMS_V2": "https:\/\/auth.services.adobe.com\/imslib\/imslib.min.js?client_id=BehanceWebSusi1&locale=en_US",
                        "AUTH_CHECK": "https:\/\/www.behance.net\/auth\/check",
                        "AUTHORIZE": "https:\/\/ims-na1.adobelogin.com\/ims\/authorize\/v1",
                        "FAQ_THIRD_PARTY_COOKIES": "https:\/\/help.behance.net\/entries\/45476840-Why-am-I-getting-logged-out-of-Behance-spontaneously-",
                        "LOGOUT": "https:\/\/www.behance.net\/auth\/logout",
                        "LOGIN": "https:\/\/www.behance.net\/auth\/login",
                        "ACTIVITY": "\/activity",
                        "ONBOARDING": "\/onboarding"
                    },
                    "CSRF_CHECK": true,
                    "CSRF_LOG": true
                },
                "IMS": [],
                "MOBILE_APP_BANNER": {
                    "ANDROID_DOWNLOAD": "http:\/\/ad.apps.fm\/p3HVur-M2FFCc2B--6htOa5px440Px0vtrw1ww5B54yL-oy8vYIvq1wkvI9CV4ClRvm3pZMmeQBk72w1MLZOeetiqv8kwmxRSHbfwWpek9IyXpHcGaTyo2BdEGaPxYu-"
                },
                "PAGE_URLS": {
                    "FEATURED": "\/featured",
                    "SEARCH_COLLECTIONS": "\/search?content=collections"
                },
                "spam": {
                    "spam_reasons": [{
                        "title": "Spam",
                        "select_subheader": "",
                        "has_multi_reasons": false,
                        "tooltip": "May include fake profiles, promotional spam, or other irrelevant content.",
                        "has_custom_message": false,
                        "requires_logged_out_email": false,
                        "reasons": [{
                            "id": 50,
                            "title": "Spam",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }]
                    }, {
                        "title": "Adult content",
                        "select_subheader": "You can always disable seeing mature content in your <a class=\"report-account-settings-link\" href=\"\/account\/settings\" target=\"_blank\">account settings<\/a>.",
                        "has_multi_reasons": true,
                        "tooltip": "May include nudity, graphic violence, or mature language. <br\/> <br\/> You can always disable seeing mature content in your <a class=\"report-account-settings-link\" href=\"\/account\/settings\" target=\"_blank\">account settings<\/a>.",
                        "has_custom_message": false,
                        "requires_logged_out_email": false,
                        "reasons": [{
                            "id": 51,
                            "title": "Nudity or sexual activity",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }, {
                            "id": 52,
                            "title": "Violence or gore",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }, {
                            "id": 53,
                            "title": "Profanity",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }]
                    }, {
                        "title": "Fraud\/Scam",
                        "select_subheader": "",
                        "has_multi_reasons": false,
                        "tooltip": "This includes posting content that attempts to defraud or exploit others for money, property, or information.",
                        "has_custom_message": false,
                        "requires_logged_out_email": false,
                        "reasons": [{
                            "id": 64,
                            "title": "Fraud\/Scam",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }]
                    }, {
                        "title": "Harmful or illegal",
                        "select_subheader": "",
                        "has_multi_reasons": true,
                        "tooltip": "May be threatening, harassing, hateful, terrorist, or other illegal content.",
                        "has_custom_message": false,
                        "requires_logged_out_email": false,
                        "reasons": [{
                            "id": 54,
                            "title": "Harassment",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }, {
                            "id": 55,
                            "title": "Hate speech",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }, {
                            "id": 56,
                            "title": "Illegal goods or services",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }, {
                            "id": 57,
                            "title": "Promotes terrorism",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }, {
                            "id": 58,
                            "title": "Inappropriate behavior with a minor",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }]
                    }, {
                        "title": "Imminent physical harm",
                        "select_subheader": "",
                        "has_multi_reasons": false,
                        "tooltip": "May include immediate physical danger, threats of suicide or intentionally injuring oneself. If someone is in immediate danger, call local emergency services.",
                        "has_custom_message": false,
                        "requires_logged_out_email": false,
                        "reasons": [{
                            "id": 59,
                            "title": "Imminent physical harm",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }]
                    }, {
                        "title": "Infringes my rights",
                        "select_subheader": "",
                        "has_multi_reasons": true,
                        "tooltip": "May include someone uploading a copy of your artwork, using your logo or trademark, or using photos of you without permission.",
                        "has_custom_message": false,
                        "requires_logged_out_email": true,
                        "reasons": [{
                            "id": 60,
                            "title": "Copyright violation",
                            "redirect": "http:\/\/www.adobe.com\/legal\/dmca.html",
                            "requires_logged_out_email": false
                        }, {
                            "id": 61,
                            "title": "Trademark violation",
                            "redirect": false,
                            "requires_logged_out_email": true
                        }, {
                            "id": 62,
                            "title": "Violation of privacy",
                            "redirect": false,
                            "requires_logged_out_email": true
                        }]
                    }, {
                        "title": "Misinformation and Disinformation",
                        "select_subheader": "",
                        "has_multi_reasons": false,
                        "tooltip": "May include content that disseminates misleading or deceptive information that could lead to real-world harm.",
                        "has_custom_message": false,
                        "requires_logged_out_email": false,
                        "reasons": [{
                            "id": 65,
                            "title": "Misinformation and Disinformation",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }]
                    }, {
                        "title": "Other",
                        "select_subheader": "",
                        "has_multi_reasons": false,
                        "tooltip": "If you are unsure, tell us more about your issue in your own words.",
                        "has_custom_message": true,
                        "requires_logged_out_email": true,
                        "reasons": [{
                            "id": 63,
                            "title": "Other",
                            "redirect": false,
                            "requires_logged_out_email": false
                        }]
                    }]
                },
                "CBSTR": "cb=264615658",
                "FQDOMAIN": "www.behance.net",
                "ADOBE_VERIFY": "https:\/\/accounts.adobe.com\/account",
                "BEHANCE": {
                    "COOKIE_USER_LANGUAGE": "u_lang",
                    "CROSS_AUTH_GATEKEEPERS": [{
                        "id": 3323,
                        "key": "hire_banner_ab",
                        "type": 9690,
                        "type_value": 0,
                        "hash": "",
                        "redirect_uri": "",
                        "data": "",
                        "created_on": "2023-04-24 18:35:59",
                        "modified_on": "2023-04-27 20:19:51"
                    }, {
                        "id": 4069,
                        "key": "test_cross_auth",
                        "type": 9690,
                        "type_value": 50,
                        "hash": "",
                        "redirect_uri": "",
                        "data": "",
                        "created_on": "2023-12-15 23:29:05",
                        "modified_on": "2023-12-18 17:18:31"
                    }, {
                        "id": 4071,
                        "key": "feature_search_gk_debug",
                        "type": 9690,
                        "type_value": 50,
                        "hash": "",
                        "redirect_uri": "",
                        "data": "",
                        "created_on": "2023-12-15 23:30:26",
                        "modified_on": "2023-12-15 23:48:35"
                    }, {
                        "id": 4183,
                        "key": "list_keyboard_nav",
                        "type": 9690,
                        "type_value": 100,
                        "hash": "",
                        "redirect_uri": "",
                        "data": "",
                        "created_on": "2024-02-22 14:51:33",
                        "modified_on": "2024-02-22 15:48:34"
                    }, {
                        "id": 4235,
                        "key": "feature_prev_next_profile_panel",
                        "type": 9690,
                        "type_value": 50,
                        "hash": "",
                        "redirect_uri": "https:\/\/www.behance.net",
                        "data": "",
                        "created_on": "2024-03-06 17:08:51",
                        "modified_on": "2024-03-12 15:13:52"
                    }, {
                        "id": 4251,
                        "key": "css_grid_assets_page_enabled",
                        "type": 9690,
                        "type_value": 100,
                        "hash": "",
                        "redirect_uri": "",
                        "data": "",
                        "created_on": "2024-03-08 00:02:18",
                        "modified_on": "2024-03-11 16:49:57"
                    }, {
                        "id": 4267,
                        "key": "feature_image_search_with_project_title",
                        "type": 9690,
                        "type_value": 50,
                        "hash": "",
                        "redirect_uri": "",
                        "data": "",
                        "created_on": "2024-03-12 19:35:44",
                        "modified_on": "2024-03-12 20:01:27"
                    }],
                    "ZENDESK": {
                        "subdomain": "behancenetwork.zendesk.com",
                        "identify": {
                            "ze21276880": "behance_usersubmit"
                        }
                    },
                    "PUSH_NOTIFICATIONS": {
                        "PUBLIC_KEY": "BO-QW-AGjqC-C_8JHqS9xzsmqzX8SH-31BICbOUc3k8FW3_aE7xYunMze6RK1cjEplOV_jMTG5cP5yorcw4UwVo"
                    }
                },
                "ADOBE_ANALYTICS_LAUNCH_URL": "\/\/assets.adobedtm.com\/d4d114c60e50\/62a01bbd0ef3\/launch-15d421a7f020.min.js",
                "ADOBE_ANALYTICS_AEP_LAUNCH_URL": "\/\/assets.adobedtm.com\/d4d114c60e50\/a0e989131fd5\/launch-5dd5dd2177e6.min.js",
                "ADOBE_ANALYTICS_AEP_ID": "57c20bab-94c3-425e-95cb-0b9948b1fdd4",
                "ADOBE_ANALYTICS_BOOTSTRAP_SCRIPT": "https:\/\/www.adobe.com\/marketingtech\/main.standard.min.js",
                "ADOBE_GDPR": {
                    "url": "https:\/\/irs.adobe-identity.com\/",
                    "service_code": "behance",
                    "domain_id": "c1e18a0d-18b5-4d40-b150-cc73734ac2c3",
                    "script_src": "https:\/\/www.adobe.com\/etc.clientlibs\/globalnav\/clientlibs\/base\/privacy-standalone.js",
                    "css_src": "https:\/\/www.adobe.com\/etc\/beagle\/public\/globalnav\/adobe-privacy\/latest\/privacy.min.css"
                },
                "IS_CRAWLER": false,
                "COMMENT_ERROR_CODES": {
                    "TOO_MANY_REQUESTS": 429,
                    "ERROR_VALIDATION": -5000
                },
                "STORIES": {
                    "SEGMENT_PRIVACY_PUBLIC": "public",
                    "SEGMENT_PRIVACY_REMOVED": "removed",
                    "SEGMENT_MODERATION_STATUS_REJECTED": "rejected"
                },
                "UPLOADER": {
                    "request": {
                        "endpoint": "https:\/\/s3.amazonaws.com\/be-network-tmp-prod-ue1-a",
                        "accessKey": "AKIARCNKPTSWXRTDDYM4"
                    },
                    "signature": {
                        "endpoint": "\/v2\/project\/editor\/sign_request"
                    },
                    "unix_timestamp": 1710507139
                },
                "PAGE_NAME": "gallery",
                "LOCALIZATION": {
                    "IS_DEFAULT_LANGUAGE": true,
                    "TRANSLATIONS": [],
                    "LOCALE": "en_US",
                    "IS_ENABLED": true
                }
            },
            "ssrFetched": {
                "695dc23f": []
            },
            "activity": {
                "openToListId": null,
                "shouldShowEnterpriseWarning": false,
                "segmentViewer": {
                    "isOpen": false,
                    "activeSegmentId": null,
                    "activeSegmentViews": null,
                    "activeSegmentViewCount": 0,
                    "segments": [],
                    "isSpamModalOpen": false,
                    "isRemoveModalOpen": false,
                    "isDeleteOwnSegmentModalOpen": false,
                    "isLoading": false,
                    "isSwitchingFilters": false,
                    "isAwaitingBlock": false,
                    "userIsBlocked": false,
                    "blockDidFail": false
                },
                "storyNav": {
                    "stories": {
                        "currentUser": null,
                        "users": [],
                        "isLightbox": false,
                        "isNavigatingLightboxes": false
                    },
                    "isFetching": false
                },
                "filters": {
                    "activeFilterId": null,
                    "activeSubFilterHref": null,
                    "availableFilters": []
                },
                "for_you": {
                    "welcome": null,
                    "user": null,
                    "strips": {},
                    "flaggedProjectIds": [],
                    "isReloadingRecommendations": false,
                    "firstSectionFeed": null,
                    "mainFeed": null,
                    "projectOffsets": null,
                    "isFetching": false,
                    "itemsPerPage": 0,
                    "firstSectionItemsLimit": 5,
                    "initialPageItemsLimit": 20,
                    "hasError": false,
                    "hasNextPage": true,
                    "endCursor": null,
                    "placeholderProjects": [],
                    "subscriptionCreators": [],
                    "unfollowedTagIds": []
                },
                "projects": {
                    "isEmpty": false
                },
                "uploader": {
                    "postStoryStatusCode": -1,
                    "suggestedTags": null,
                    "sessionId": null,
                    "isUploadModalVisible": false,
                    "shouldRedirectToLogin": false
                },
                "forYouChecklist": {
                    "checklistItems": {
                        "isUserFollowingCreativeField": false,
                        "performedSearch": false,
                        "hasMoodboard": false,
                        "hasSharedOwnWork": false
                    },
                    "shouldHide": true
                }
            },
            "activityAnalytics": {},
            "admin": {
                "live": {
                    "email": {
                        "content": {},
                        "id": 1,
                        "preview": "",
                        "sendingEmail": "",
                        "savingEmail": false,
                        "uploaderConfig": {},
                        "adminEmail": "",
                        "contentChanged": false,
                        "subCount": "-"
                    },
                    "addVideos": {
                        "videoForm": {
                            "data": {
                                "id": 0,
                                "etag": "",
                                "title": "",
                                "encoded_title": "",
                                "description": "",
                                "thumbnail_url": "",
                                "start_timestamp": "",
                                "duration_seconds": 0,
                                "transition_seconds": 0,
                                "url": "",
                                "creative_category": {
                                    "id": null,
                                    "name": ""
                                },
                                "users": [],
                                "tools": [],
                                "sections": [],
                                "custom_banner_info": {
                                    "id": null,
                                    "name": ""
                                },
                                "custom_tab_info": {
                                    "id": null,
                                    "name": ""
                                },
                                "content_language": "",
                                "tags": []
                            },
                            "chat": {
                                "channelId": null,
                                "appKey": null
                            },
                            "errors": {},
                            "saving": false
                        },
                        "chatSettings": {
                            "youtube": 0,
                            "chat": 0,
                            "error": false
                        },
                        "creativeCategories": [],
                        "videosUrl": "",
                        "defaultTools": {},
                        "banners": {},
                        "tabs": {},
                        "available_tools": []
                    },
                    "addCustom": {
                        "title": "",
                        "image_url": "",
                        "upload_url": "",
                        "display": false,
                        "id": 0,
                        "sections": [],
                        "label": "",
                        "saving": false,
                        "uploaderConfig": {}
                    },
                    "addBanner": {
                        "is_enabled": 0,
                        "id": null,
                        "tag_id": null,
                        "text": "",
                        "link_text": "",
                        "link_url": "",
                        "label": "",
                        "modified_on": "",
                        "tool": null,
                        "pending": false
                    },
                    "addBanners": {
                        "banners": {}
                    },
                    "addTabs": {
                        "tabs": {}
                    }
                }
            },
            "appConfig": {
                "GOOGLE": {
                    "ONE_TAP_LOGIN": {
                        "CLIENT_ID": "317415461263-ple412d53it61v7l04kl49kbvkmk4m36.apps.googleusercontent.com",
                        "IMS_CLIENT_ID": "BehanceWebSusi1-Yolo",
                        "SCRIPT_URL": "https:\/\/accounts.google.com\/gsi\/client"
                    }
                },
                "BLOG_DIRECTUS_BASE_URI": "https:\/\/behance.directus.app",
                "BLOG_IMAGE_BASE_URI": "https:\/\/blog-assets.behance.net",
                "ADOBE": {
                    "ACCOUNT_URL": "https:\/\/account.adobe.com",
                    "IMS_SUSI_CLIENT_ID": "BehanceWebSusi1",
                    "ORDERSV3_ENDPOINT": "https:\/\/commerce.adobe.com"
                },
                "STRIPE": {
                    "PUBLISHABLE_KEY": "pk_live_51I61dZHcGc5ymfwKMMtQgoXNJ7kM7E58XnbKHV7R97aq3i2AwGXFIpYpS5nUfwlk6ZSVR9EvLpjIvR7mK3OXhpSi00IA8Tg8YR",
                    "TEST_PUBLISHABLE_KEY": "pk_test_51I61dZHcGc5ymfwKxp1iUBPeRGulfSBQ9gw9qm2m8Z5rv9BZ3cDPpCICsUtKRx3AB2sds4CcGnzgm0T1kkfxBtAJ00koap6hxC"
                },
                "PAYPAL": {
                    "CLIENT_ID": "AaWbe0otXhJzWSqqq4IW5-7gc4g24uvnFF2EqTvrZqC-xfmbg12_xAPqJ19454jC1HPHoNK-Y_mvOOCR"
                },
                "LOG_FORMAT_ERRORS": "false",
                "RECAPTCHA": {
                    "API_KEY": "6LdyJ7gUAAAAAB4rgh5YT2HT_bjt4hKnL-kzhY4J"
                }
            },
            "error": {
                "message": null
            },
            "user": {
                "canSeeGoogleOneTapLogin": true,
                "loggedInUser": null,
                "isPartialUser": false,
                "partialUserFirstName": "",
                "isImpersonated": false,
                "hasPaidCCPlan": false,
                "creatorPro": {
                    "isActive": false,
                    "showBadge": false
                },
                "siteConfig": null
            },
            "chat": {
                "authors": {},
                "messages": [],
                "sentMessageStatus": {
                    "status": "",
                    "context": ""
                },
                "loading": true,
                "connectionOnline": true,
                "user": {
                    "chatToken": "",
                    "isEmailVerified": false,
                    "isPartialUser": false,
                    "chat": {}
                },
                "moderators": [],
                "chatPromptClosed": false,
                "chatVendorConfig": {
                    "appKey": "",
                    "channelId": "",
                    "messageFilterId": ""
                },
                "isCollapsed": false,
                "streamChat": null,
                "capabilities": [],
                "channel": null,
                "events": [],
                "userHasPreviouslyChatted": false,
                "isCheckingConnection": true,
                "sentMessages": [],
                "timesInitialized": 0
            },
            "subscriptionModal": {
                "ownerDataSource": 0,
                "shouldShowPaymentModal": false,
                "projectId": null,
                "livestreamId": null,
                "subscriptionOwner": null,
                "priceInCents": null,
                "checkoutStatus": "",
                "subscribeSource": ""
            },
            "subscription": {
                "subscription": null,
                "subscriptionProduct": null,
                "stripeAccount": null,
                "entityOwners": [],
                "username": ""
            },
            "projectLayout": {
                "projects": [],
                "trackingSource": "",
                "backgroundPageUrl": "",
                "isFromProfile": false
            },
            "universalPopup": {
                "items": null
            },
            "livestream": {
                "animated_thumbnail_url": "",
                "admin_flags": {
                    "NEEDS_REVIEW": 0,
                    "LIVESTREAM_LOCK": 0
                },
                "available_tools": [],
                "toolReplays": [],
                "announcement": "",
                "hiddenAnnouncementHash": "",
                "isInitialFetchComplete": false,
                "assets": [],
                "actions": [],
                "appreciations": 0,
                "categories": [],
                "chat": {
                    "enabled": true
                },
                "chapters": [],
                "chat_moderators": [],
                "client_id": "",
                "creative_fields": [],
                "currentVideoProgress": 0,
                "description": "",
                "used_allow_listed_tools": [],
                "iframe_url": "",
                "public_iframe_url": "",
                "isAppreciated": false,
                "isDashboard": false,
                "isPollingEnabled": false,
                "isReportModalVisible": false,
                "isToolTimelineFetching": false,
                "is_hosted": null,
                "poster_url": "",
                "premium": 0,
                "privacy": 1,
                "status": 0,
                "state": "",
                "streamer": {
                    "id": "",
                    "guid": "",
                    "username": "",
                    "is_following": 0,
                    "images": {
                        "276": ""
                    },
                    "webPush": {
                        "subscriptions": []
                    }
                },
                "streaming_vendor": "",
                "stream_id": "",
                "stream_url": "",
                "stream_key": "alive",
                "tags": [],
                "title": "",
                "tool_capture_enabled": false,
                "tools": [],
                "transcript": null,
                "transcript_enabled": true,
                "uniqueViewCount": 0,
                "user_id": null,
                "user_guid": null,
                "streamerReplays": [],
                "video_id": null,
                "view_urls": {
                    "behance": ""
                },
                "video_page_url": "",
                "viewers": 0,
                "orchestratorBaseUrl": "",
                "isAwaitingBlock": false,
                "userWasBlocked": false,
                "dashboard": {
                    "createStreamError": false,
                    "duration": 0,
                    "errors": {},
                    "isAnnouncementUpdatePending": false,
                    "isDashboardDirty": false,
                    "isStreamCreating": false,
                    "isStreamEnding": false,
                    "isStreamSaving": false,
                    "isChatTogglePending": false,
                    "isTermsModalVisible": false,
                    "isUserStillWaiting": false,
                    "termsModalHasError": false,
                    "token": "",
                    "availableToolsList": []
                },
                "access": {
                    "hasAccess": false,
                    "deniedAccessReasonCodes": [],
                    "requiresAcceptance": false,
                    "isFetchingAccessStatus": true
                }
            },
            "live": {
                "categories": [],
                "currentLanguage": "en",
                "enabledLanguages": [],
                "featured": {},
                "featuredVideoTimeout": null,
                "isAdmin": false,
                "isLive": false,
                "isPollingEnabled": false,
                "schedule": {
                    "schedule": []
                },
                "video": {
                    "liveVideo": null,
                    "hostedVideo": null,
                    "customTab": null,
                    "fetchDelay": 10000,
                    "isPollingEnabled": false,
                    "liveDataTimeout": null,
                    "activeIndex": 0,
                    "banner": null,
                    "subscribePopupHidden": false,
                    "adobeLiveReturned": false
                },
                "subscription": {
                    "subscribedRecently": false,
                    "isSubscribed": false,
                    "canSubscribe": false,
                    "hideSubscriptionPrompt": false
                },
                "replays": {
                    "replays": {
                        "id": 0,
                        "name": "",
                        "latest_id": "0",
                        "latest_ts": "0",
                        "next_id": "",
                        "videos": []
                    },
                    "categoryReplays": [],
                    "toolReplays": [],
                    "recommendations": {
                        "videos": []
                    },
                    "newVideos": {
                        "videos": []
                    },
                    "pending": false,
                    "selectedCategory": {},
                    "currentVideo": {},
                    "canLoadMoreReplays": true,
                    "finalVideoDataLoaded": true,
                    "resultsPerPage": 24,
                    "adobelive_videos": {
                        "videos": []
                    },
                    "livestreams": {
                        "videos": []
                    },
                    "maxVideos": {
                        "videos": []
                    },
                    "product_info": {},
                    "rows_info": {
                        "adobe_live": {
                            "title": "",
                            "description": ""
                        },
                        "all": {
                            "title": "",
                            "description": ""
                        },
                        "featured_streamers": {
                            "title": "",
                            "description": ""
                        },
                        "new_videos": {
                            "title": "",
                            "description": ""
                        }
                    }
                },
                "contest": {
                    "pastWinners": {
                        "loading": false,
                        "users": {}
                    },
                    "winner": {},
                    "winnerLoadingText": ""
                }
            },
            "project": {
                "admin": null,
                "shareConfig": [],
                "isDoneFetching": true,
                "isFullPage": true,
                "isIframe": false,
                "recentSocialEmail": false,
                "project": {
                    "modules": [{
                        "__typename": "ImageModule",
                        "alignment": "center",
                        "altText": "Image may contain: screenshot, cartoon and abstract",
                        "altTextForEditor": "",
                        "caiData": "null",
                        "hasCaiData": false,
                        "caption": "",
                        "captionAlignment": "left",
                        "captionPlain": "",
                        "flexHeight": 200,
                        "flexWidth": 130,
                        "fullBleed": 1,
                        "height": 1200,
                        "id": 720544201,
                        "isCaiVersion1": false,
                        "projectId": 126991995,
                        "src": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp\/cc0e82126991995.6138c3f6cec43.jpg",
                        "tags": ["fashion", "ui design", "ux design", "online store", "shop", "ecommerce", "wocommerce", "ui\/ux", "clothing", "dress"],
                        "width": 600,
                        "imageSizes": {
                            "size_disp": {
                                "height": 2334,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 600
                            },
                            "size_disp_webp": null,
                            "size_fs": {
                                "height": 7468,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/fs\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 1920
                            },
                            "size_fs_webp": null,
                            "size_max_1200": {
                                "height": 4668,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/max_1200\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 1200
                            },
                            "size_max_1200_webp": null,
                            "size_original": {
                                "height": 11202,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/source\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 2880
                            },
                            "size_1400": {
                                "height": 5445,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/1400\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 1400
                            },
                            "size_1400_webp": null,
                            "size_1400_opt_1": {
                                "height": 5445,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/1400_opt_1\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 1400
                            },
                            "size_2800_opt_1": {
                                "height": 10891,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/2800_opt_1\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 2800
                            },
                            "size_2800_webp": null,
                            "size_max_3840": {
                                "height": 11202,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/max_3840\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 2880
                            },
                            "size_max_3840_webp": null,
                            "size_disp_still": null
                        },
                        "exifData": {
                            "lens": null,
                            "software": null,
                            "makeAndModel": null,
                            "focalLength": null,
                            "iso": null,
                            "location": null,
                            "flash": null,
                            "exposureMode": null,
                            "shutterSpeed": null,
                            "aperture": null
                        }
                    }, {
                        "__typename": "ImageModule",
                        "alignment": "center",
                        "altText": "",
                        "altTextForEditor": "",
                        "caiData": "null",
                        "hasCaiData": false,
                        "caption": "",
                        "captionAlignment": "left",
                        "captionPlain": "",
                        "flexHeight": 50,
                        "flexWidth": 520,
                        "fullBleed": 1,
                        "height": 171,
                        "id": 720545953,
                        "isCaiVersion1": false,
                        "projectId": 126991995,
                        "src": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp\/32542d126991995.6138c53faa05c.gif",
                        "tags": [],
                        "width": 342,
                        "imageSizes": {
                            "size_disp": {
                                "height": 171,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp\/32542d126991995.6138c53faa05c.gif",
                                "width": 600
                            },
                            "size_disp_webp": null,
                            "size_fs": {
                                "height": 400,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/fs\/32542d126991995.6138c53faa05c.gif",
                                "width": 1400
                            },
                            "size_fs_webp": null,
                            "size_max_1200": {
                                "height": 343,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/max_1200\/32542d126991995.6138c53faa05c.gif",
                                "width": 1200
                            },
                            "size_max_1200_webp": null,
                            "size_original": {
                                "height": 400,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/source\/32542d126991995.6138c53faa05c.gif",
                                "width": 1400
                            },
                            "size_1400": {
                                "height": 400,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/1400\/32542d126991995.6138c53faa05c.gif",
                                "width": 1400
                            },
                            "size_1400_webp": null,
                            "size_1400_opt_1": {
                                "height": 400,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/1400_opt_1\/32542d126991995.6138c53faa05c.gif",
                                "width": 1400
                            },
                            "size_2800_opt_1": null,
                            "size_2800_webp": null,
                            "size_max_3840": null,
                            "size_max_3840_webp": null,
                            "size_disp_still": {
                                "height": 171,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp_still\/32542d126991995.6138c53faa05c.gif",
                                "width": 600
                            }
                        },
                        "exifData": {
                            "lens": null,
                            "software": null,
                            "makeAndModel": null,
                            "focalLength": null,
                            "iso": null,
                            "location": null,
                            "flash": null,
                            "exposureMode": null,
                            "shutterSpeed": null,
                            "aperture": null
                        }
                    }, {
                        "__typename": "TextModule",
                        "id": 720545951,
                        "fullBleed": 0,
                        "alignment": "center",
                        "captionAlignment": "left",
                        "text": "<div style=\"text-align:center;\"><br><\/div><div style=\"text-align:center;\"><a href=\"https:\/\/www.uplabs.com\/posts\/e-commerce-fashion-shop-web-ui-design\" target=\"_blank\" rel=\"nofollow\"><span class=\"texteditor-inline-color\" style=\"color:#38CE2A;\"><span class=\"texteditor-inline-fontsize\" style=\"font-size:32px;\"><span class=\"bold\">Download<\/span><\/span><\/span><\/a><br><\/div><div style=\"text-align:center;\"><br><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\">Looking for UX\/UI Designer for Project?<\/span><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\">Send me message: isohag450@gmail.com<\/span><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\"><br><\/span><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\">Follow me on<\/span><br><a href=\"https:\/\/www.uplabs.com\/sohaguixd\" target=\"_blank\" rel=\"nofollow\">Uplabs<\/a>\u00a0|\u00a0<a href=\"https:\/\/dribbble.com\/sohaguixd\" target=\"_blank\" rel=\"nofollow\">Dribbble<\/a>\u00a0|\u00a0<a href=\"https:\/\/www.instagram.com\/sohaguixd\/\" target=\"_blank\" rel=\"nofollow\">Instagram<\/a><a href=\"https:\/\/www.instagram.com\/mhmanik02\" rel=\"nofollow\">\u00a0<\/a>|\u00a0<a href=\"https:\/\/www.linkedin.com\/in\/sohaguix\/\" target=\"_blank\" rel=\"nofollow\">Linkedin<\/a>\u00a0|<a href=\"https:\/\/www.fiverr.com\/users\/creative_sohag\" target=\"_blank\" rel=\"nofollow\">\u00a0<\/a><a href=\"http:\/\/www.facebook.com\/sohaguixd\" target=\"_blank\" rel=\"nofollow\">Facebook<\/a>\u00a0|\u00a0<a href=\"https:\/\/medium.com\/sohaguixd\" target=\"_blank\" rel=\"nofollow\">Medium<\/a>\u00a0|\u00a0<a href=\"https:\/\/www.fiverr.com\/creative_sohag\/modern-ui-ux-photoshop-psd-web-mockup-template-xd-figma-web-design\" target=\"_blank\" rel=\"nofollow\">Fiverr<\/a><\/div><div style=\"text-align:center;\"><br><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\">Thanks For Watching\u200b\u200b\u200b\u200b\u200b\u200b\u200b\u00a0<\/span>\ud83d\udc99<\/div><div style=\"text-align:center;\"><br><\/div>",
                        "textPlain": "DownloadLooking for UX\/UI Designer for Project?Send me message: isohag450@gmail.comFollow me onUplabs\u00a0|\u00a0Dribbble\u00a0|\u00a0Instagram\u00a0|\u00a0Linkedin\u00a0|\u00a0Facebook\u00a0|\u00a0Medium\u00a0|\u00a0FiverrThanks For Watching\u200b\u200b\u200b\u200b\u200b\u200b\u200b\u00a0\ud83d\udc99",
                        "projectId": 126991995
                    }],
                    "adminFlags": null,
                    "premium": 0,
                    "adminNotices": [],
                    "agencies": [],
                    "autoTags": [{
                        "title": "text",
                        "score": null
                    }, {
                        "title": "screenshot",
                        "score": null
                    }, {
                        "title": "cartoon",
                        "score": null
                    }, {
                        "title": "abstract",
                        "score": null
                    }],
                    "brands": [],
                    "colors": {
                        "r": 248,
                        "g": 249,
                        "b": 249
                    },
                    "coverData": {
                        "coverScale": 0.13166666666666665,
                        "coverX": -9,
                        "coverY": 0
                    },
                    "covers": {
                        "size_max_808": {
                            "height": 632,
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg",
                            "width": 808
                        },
                        "size_max_808_opt": null,
                        "size_max_808_webp": {
                            "height": 632,
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg",
                            "width": 808
                        },
                        "size_808": {
                            "height": 632,
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg",
                            "width": 808
                        },
                        "size_808_opt": null,
                        "size_808_webp": {
                            "height": 632,
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg",
                            "width": 808
                        },
                        "size_404": {
                            "height": 316,
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg",
                            "width": 404
                        },
                        "size_404_opt": null,
                        "size_404_webp": {
                            "height": 316,
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg",
                            "width": 404
                        }
                    },
                    "credits": [],
                    "canBeAddedToMoodboard": true,
                    "description": "Hello Creative People,\nHere is my exploration of the E-commerce Fashion Shop Web UI design that I have created recently. I hope everyone will like the design.\n\nDon't forget to share your feedback.",
                    "descriptionShortened": "Hello Creative People,\nHere is my exploration of the E-commerce Fashion Shop Web UI design that I have created recently. I hope everyone will lik",
                    "editUrl": "https:\/\/www.behance.net\/portfolio\/editor?project_id=126991995",
                    "editorVersion": 6,
                    "features": [],
                    "fields": [{
                        "id": 132,
                        "label": "UI\/UX",
                        "slug": "UI\/UX",
                        "url": "\/search\/projects?field=132"
                    }, {
                        "id": 102,
                        "label": "Web Design",
                        "slug": "Web Design",
                        "url": "\/search\/projects?field=102"
                    }, {
                        "id": 44,
                        "label": "Graphic Design",
                        "slug": "Graphic Design",
                        "url": "\/search\/projects?field=44"
                    }],
                    "hasMatureContent": false,
                    "id": 126991995,
                    "isAppreciated": false,
                    "isCommentingAllowed": true,
                    "isFeatured": false,
                    "isFounder": false,
                    "isMatureReviewSubmitted": null,
                    "isOwner": 0,
                    "isPrivate": false,
                    "license": {
                        "license": "no-use",
                        "description": "No-use",
                        "id": 7,
                        "label": "All Rights Reserved",
                        "url": null,
                        "text": "No use is allowed without explicit permission from owner",
                        "images": ["https:\/\/a5.behance.net\/427bc08356755dde99f62f76e1e0ffdd7bcce70f\/img\/project\/cc\/zero.svg?cb=264615658"]
                    },
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed",
                    "name": "E-commerce Fashion Shop Web UI design",
                    "networks": [],
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "isFollowing": false,
                        "isProfileOwner": false,
                        "location": "Dhaka, Bangladesh",
                        "locationUrl": "https:\/\/www.behance.net\/search\/users?country=BD&city=Dhaka",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "username": "sohaguixd",
                        "isMessageButtonVisible": true,
                        "availabilityInfo": {
                            "availabilityTimeline": null,
                            "isAvailableFullTime": true,
                            "isAvailableFreelance": true,
                            "hiringTimeline": null,
                            "buttonCTAType": "hire_me"
                        },
                        "creatorPro": {
                            "isActive": false,
                            "initialSubscriptionDate": null
                        },
                        "firstName": "MD Sohag",
                        "isResponsiveToHiring": false,
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            },
                            "size_100": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }],
                    "privacyLevel": "PUBLIC",
                    "aeroData": null,
                    "publishedOn": 1631110464,
                    "schools": [],
                    "slug": "E-commerce-Fashion-Shop-Web-UI-design",
                    "stats": {
                        "appreciations": {
                            "all": 105
                        },
                        "views": {
                            "all": 2108
                        },
                        "comments": {
                            "all": 8
                        }
                    },
                    "styles": {
                        "background": {
                            "color": "F2F2F2"
                        },
                        "divider": {
                            "borderStyle": null,
                            "borderWidth": null,
                            "display": "none",
                            "fontSize": null,
                            "height": null,
                            "lineHeight": null,
                            "margin": null,
                            "position": null,
                            "top": null
                        },
                        "spacing": {
                            "moduleBottomMargin": "0",
                            "projectTopMargin": "0"
                        }
                    },
                    "tags": [{
                        "id": 974869,
                        "category": 101,
                        "title": "Clothing"
                    }, {
                        "id": 975171,
                        "category": 101,
                        "title": "e-commerce"
                    }, {
                        "id": 1005649,
                        "category": 101,
                        "title": "Ecommerce"
                    }, {
                        "id": 972571,
                        "category": 101,
                        "title": "Fashion "
                    }, {
                        "id": 1027035,
                        "category": 101,
                        "title": "landing page"
                    }, {
                        "id": 996611,
                        "category": 101,
                        "title": "online store"
                    }, {
                        "id": 971605,
                        "category": 101,
                        "title": "ui design"
                    }, {
                        "id": 1045607,
                        "category": 101,
                        "title": "UI\/UX"
                    }, {
                        "id": 994259,
                        "category": 101,
                        "title": "Web Design "
                    }, {
                        "id": 9707339,
                        "category": 101,
                        "title": "Woocommerce"
                    }],
                    "teams": [],
                    "tools": [{
                        "id": 596340077,
                        "title": "Adobe XD",
                        "category": "9",
                        "categoryLabel": "Software",
                        "categoryId": 9,
                        "approved": 1,
                        "url": "\/search\/projects?tools=596340077",
                        "backgroundColor": "#470137",
                        "backgroundImage": {
                            "size_original": {
                                "height": null,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/32c180191973409.Y3JvcCwxNjE2LDEyNjQsMCww.jpg",
                                "width": null
                            },
                            "size_max_808": {
                                "height": null,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/32c180191973409.Y3JvcCwxNjE2LDEyNjQsMCww.jpg",
                                "width": null
                            },
                            "size_404": {
                                "height": null,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/32c180191973409.Y3JvcCwxNjE2LDEyNjQsMCww.jpg",
                                "width": null
                            }
                        },
                        "synonym": {
                            "tagId": 596340077,
                            "synonymId": 37,
                            "name": "xd",
                            "title": "Adobe XD",
                            "url": "http:\/\/www.adobe.com\/products\/xd.html?promoid=LH4XTLCP&mv=other",
                            "downloadUrl": "http:\/\/www.adobe.com\/products\/xd.html?promoid=LH4XTLCP&mv=other",
                            "galleryUrl": "https:\/\/www.behance.net\/galleries\/xd?tracking_source=tool_icon&sdid=ZFN4FMW6&mv=other",
                            "authenticated": 1,
                            "type": 1,
                            "iconUrl": "https:\/\/a5.behance.net\/427bc08356755dde99f62f76e1e0ffdd7bcce70f\/img\/project\/tools\/1x\/xd.png",
                            "iconUrl2x": "https:\/\/a5.behance.net\/427bc08356755dde99f62f76e1e0ffdd7bcce70f\/img\/project\/tools\/2x\/xd.png"
                        }
                    }],
                    "url": "https:\/\/www.behance.net\/gallery\/126991995\/E-commerce-Fashion-Shop-Web-UI-design",
                    "embedTag": "<iframe src=\"https:\/\/www.behance.net\/embed\/project\/126991995?ilo0=1\" height=\"316\" width=\"404\" allowfullscreen lazyload frameborder=\"0\" allow=\"clipboard-write\" refererPolicy=\"strict-origin-when-cross-origin\"><\/iframe>",
                    "isPublished": true,
                    "creator": {
                        "isProfileOwner": false,
                        "hasAllowEmbeds": true,
                        "hasPremiumAccess": false,
                        "displayName": "MD Sohag Rana",
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        },
                        "isFollowing": false,
                        "creatorPro": {
                            "initialSubscriptionDate": null,
                            "isActive": false
                        },
                        "projects": {
                            "nodes": [{
                                "publishedOn": 1634068713,
                                "premium": 0,
                                "id": 129190183,
                                "slug": "Task-Manager-Mobile-App-UI-UX-Design-Case-Study",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 114
                                    },
                                    "views": {
                                        "all": 3023
                                    }
                                },
                                "name": "Task Manager Mobile App UI UX Design Case Study",
                                "colors": {
                                    "r": 242,
                                    "b": 254,
                                    "g": 235
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }, {
                                    "displayName": "Gravity \u2122",
                                    "hasPremiumAccess": false,
                                    "id": 1353740217,
                                    "username": "gravity-ltd",
                                    "url": "https:\/\/www.behance.net\/gravity-ltd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/134d801353740217.644be65dbd7b8.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1628099465,
                                "premium": 0,
                                "id": 124763303,
                                "slug": "Business-Consultant-Landing-Page-Web-design",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 78
                                    },
                                    "views": {
                                        "all": 1178
                                    }
                                },
                                "name": "Business Consultant Landing Page Web design",
                                "colors": {
                                    "r": 9,
                                    "b": 52,
                                    "g": 19
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1631110464,
                                "premium": 0,
                                "id": 126991995,
                                "slug": "E-commerce-Fashion-Shop-Web-UI-design",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/4c1821126991995.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 105
                                    },
                                    "views": {
                                        "all": 2108
                                    }
                                },
                                "name": "E-commerce Fashion Shop Web UI design",
                                "colors": {
                                    "r": 248,
                                    "b": 249,
                                    "g": 249
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1628953617,
                                "premium": 0,
                                "id": 125376063,
                                "slug": "Digital-Agency-Landing-page-Web-design",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 97
                                    },
                                    "views": {
                                        "all": 2551
                                    }
                                },
                                "name": "Digital Agency Landing page Web design",
                                "colors": {
                                    "r": 249,
                                    "b": 251,
                                    "g": 251
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }, {
                                    "displayName": "Gravity \u2122",
                                    "hasPremiumAccess": false,
                                    "id": 1353740217,
                                    "username": "gravity-ltd",
                                    "url": "https:\/\/www.behance.net\/gravity-ltd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/134d801353740217.644be65dbd7b8.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1629899301,
                                "premium": 0,
                                "id": 126085903,
                                "slug": "E-commerce-Furniture-Store-Shopify-Landing-page",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 258
                                    },
                                    "views": {
                                        "all": 4684
                                    }
                                },
                                "name": "E-commerce Furniture Store Shopify Landing page",
                                "colors": {
                                    "r": 247,
                                    "b": 249,
                                    "g": 248
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }, {
                                    "displayName": "Gravity \u2122",
                                    "hasPremiumAccess": false,
                                    "id": 1353740217,
                                    "username": "gravity-ltd",
                                    "url": "https:\/\/www.behance.net\/gravity-ltd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/134d801353740217.644be65dbd7b8.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1627913535,
                                "premium": 0,
                                "id": 124608545,
                                "slug": "eFood-Delivery-Landing-Page-Web-Design",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 74
                                    },
                                    "views": {
                                        "all": 1327
                                    }
                                },
                                "name": "eFood - Delivery Landing Page Web Design",
                                "colors": {
                                    "r": 247,
                                    "b": 252,
                                    "g": 245
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1649067776,
                                "premium": 0,
                                "id": 140920423,
                                "slug": "Food-Restaurant-Landing-Page-Web-Design",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 25
                                    },
                                    "views": {
                                        "all": 345
                                    }
                                },
                                "name": "Food Restaurant Landing Page Web Design",
                                "colors": {
                                    "r": 253,
                                    "b": 210,
                                    "g": 235
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1625932101,
                                "premium": 0,
                                "id": 123215189,
                                "slug": "Online-Learning-Educational-Web-Design",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 132
                                    },
                                    "views": {
                                        "all": 4270
                                    }
                                },
                                "name": "Online Learning- Educational Web Design",
                                "colors": {
                                    "r": 244,
                                    "b": 252,
                                    "g": 249
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }, {
                                    "displayName": "Gravity \u2122",
                                    "hasPremiumAccess": false,
                                    "id": 1353740217,
                                    "username": "gravity-ltd",
                                    "url": "https:\/\/www.behance.net\/gravity-ltd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/134d801353740217.644be65dbd7b8.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1627138807,
                                "premium": 0,
                                "id": 124065245,
                                "slug": "Ejob-Job-Finder-Landing-page-Web-Design",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 68
                                    },
                                    "views": {
                                        "all": 2139
                                    }
                                },
                                "name": "Ejob - Job Finder Landing page Web Design",
                                "colors": {
                                    "r": 250,
                                    "b": 254,
                                    "g": 253
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1625241230,
                                "premium": 0,
                                "id": 122713367,
                                "slug": "Healthcare-Doctor-Appointment-Website-UI-Design-",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 28
                                    },
                                    "views": {
                                        "all": 1076
                                    }
                                },
                                "name": "Healthcare - Doctor Appointment Website UI Design \u2695\ufe0f",
                                "colors": {
                                    "r": 244,
                                    "b": 253,
                                    "g": 250
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1628777590,
                                "premium": 0,
                                "id": 125256565,
                                "slug": "Landing-Page-Web-UI-Design",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 24
                                    },
                                    "views": {
                                        "all": 514
                                    }
                                },
                                "name": "Landing Page Web UI Design",
                                "colors": {
                                    "r": 252,
                                    "b": 248,
                                    "g": 250
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }, {
                                "publishedOn": 1614102204,
                                "premium": 0,
                                "id": 114119229,
                                "slug": "Ukilbabu-Lawyer-Consultant-iOS-Mobile-App-UX-Case-Study",
                                "covers": {
                                    "size_original": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_202": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_230": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_404": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_max_808": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_original_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_115_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_202_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_230_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_404_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    },
                                    "size_max_808_webp": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                                    }
                                },
                                "stats": {
                                    "appreciations": {
                                        "all": 31
                                    },
                                    "views": {
                                        "all": 1000
                                    }
                                },
                                "name": "Ukilbabu Lawyer Consultant iOS Mobile App UX Case Study",
                                "colors": {
                                    "r": 113,
                                    "b": 255,
                                    "g": 2
                                },
                                "owners": [{
                                    "displayName": "MD Sohag Rana",
                                    "hasPremiumAccess": false,
                                    "id": 330325461,
                                    "username": "sohaguixd",
                                    "url": "https:\/\/www.behance.net\/sohaguixd",
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                                        }
                                    }
                                }],
                                "isPrivate": false,
                                "privacyLevel": "PUBLIC",
                                "features": [],
                                "linkedAssets": [],
                                "sourceFiles": [],
                                "linkedAssetsCount": 0,
                                "matureAccess": "allowed"
                            }]
                        }
                    },
                    "allModules": [{
                        "__typename": "ImageModule",
                        "alignment": "center",
                        "altText": "Image may contain: screenshot, cartoon and abstract",
                        "altTextForEditor": "",
                        "caiData": "null",
                        "hasCaiData": false,
                        "caption": "",
                        "captionAlignment": "left",
                        "captionPlain": "",
                        "flexHeight": 200,
                        "flexWidth": 130,
                        "fullBleed": 1,
                        "height": 1200,
                        "id": 720544201,
                        "isCaiVersion1": false,
                        "projectId": 126991995,
                        "src": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp\/cc0e82126991995.6138c3f6cec43.jpg",
                        "tags": ["fashion", "ui design", "ux design", "online store", "shop", "ecommerce", "wocommerce", "ui\/ux", "clothing", "dress"],
                        "width": 600,
                        "imageSizes": {
                            "size_disp": {
                                "height": 2334,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 600
                            },
                            "size_disp_webp": null,
                            "size_fs": {
                                "height": 7468,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/fs\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 1920
                            },
                            "size_fs_webp": null,
                            "size_max_1200": {
                                "height": 4668,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/max_1200\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 1200
                            },
                            "size_max_1200_webp": null,
                            "size_original": {
                                "height": 11202,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/source\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 2880
                            },
                            "size_1400": {
                                "height": 5445,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/1400\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 1400
                            },
                            "size_1400_webp": null,
                            "size_1400_opt_1": {
                                "height": 5445,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/1400_opt_1\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 1400
                            },
                            "size_2800_opt_1": {
                                "height": 10891,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/2800_opt_1\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 2800
                            },
                            "size_2800_webp": null,
                            "size_max_3840": {
                                "height": 11202,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/max_3840\/cc0e82126991995.6138c3f6cec43.jpg",
                                "width": 2880
                            },
                            "size_max_3840_webp": null,
                            "size_disp_still": null
                        },
                        "exifData": {
                            "lens": null,
                            "software": null,
                            "makeAndModel": null,
                            "focalLength": null,
                            "iso": null,
                            "location": null,
                            "flash": null,
                            "exposureMode": null,
                            "shutterSpeed": null,
                            "aperture": null
                        }
                    }, {
                        "__typename": "ImageModule",
                        "alignment": "center",
                        "altText": "",
                        "altTextForEditor": "",
                        "caiData": "null",
                        "hasCaiData": false,
                        "caption": "",
                        "captionAlignment": "left",
                        "captionPlain": "",
                        "flexHeight": 50,
                        "flexWidth": 520,
                        "fullBleed": 1,
                        "height": 171,
                        "id": 720545953,
                        "isCaiVersion1": false,
                        "projectId": 126991995,
                        "src": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp\/32542d126991995.6138c53faa05c.gif",
                        "tags": [],
                        "width": 342,
                        "imageSizes": {
                            "size_disp": {
                                "height": 171,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp\/32542d126991995.6138c53faa05c.gif",
                                "width": 600
                            },
                            "size_disp_webp": null,
                            "size_fs": {
                                "height": 400,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/fs\/32542d126991995.6138c53faa05c.gif",
                                "width": 1400
                            },
                            "size_fs_webp": null,
                            "size_max_1200": {
                                "height": 343,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/max_1200\/32542d126991995.6138c53faa05c.gif",
                                "width": 1200
                            },
                            "size_max_1200_webp": null,
                            "size_original": {
                                "height": 400,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/source\/32542d126991995.6138c53faa05c.gif",
                                "width": 1400
                            },
                            "size_1400": {
                                "height": 400,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/1400\/32542d126991995.6138c53faa05c.gif",
                                "width": 1400
                            },
                            "size_1400_webp": null,
                            "size_1400_opt_1": {
                                "height": 400,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/1400_opt_1\/32542d126991995.6138c53faa05c.gif",
                                "width": 1400
                            },
                            "size_2800_opt_1": null,
                            "size_2800_webp": null,
                            "size_max_3840": null,
                            "size_max_3840_webp": null,
                            "size_disp_still": {
                                "height": 171,
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/project_modules\/disp_still\/32542d126991995.6138c53faa05c.gif",
                                "width": 600
                            }
                        },
                        "exifData": {
                            "lens": null,
                            "software": null,
                            "makeAndModel": null,
                            "focalLength": null,
                            "iso": null,
                            "location": null,
                            "flash": null,
                            "exposureMode": null,
                            "shutterSpeed": null,
                            "aperture": null
                        }
                    }, {
                        "__typename": "TextModule",
                        "id": 720545951,
                        "fullBleed": 0,
                        "alignment": "center",
                        "captionAlignment": "left",
                        "text": "<div style=\"text-align:center;\"><br><\/div><div style=\"text-align:center;\"><a href=\"https:\/\/www.uplabs.com\/posts\/e-commerce-fashion-shop-web-ui-design\" target=\"_blank\" rel=\"nofollow\"><span class=\"texteditor-inline-color\" style=\"color:#38CE2A;\"><span class=\"texteditor-inline-fontsize\" style=\"font-size:32px;\"><span class=\"bold\">Download<\/span><\/span><\/span><\/a><br><\/div><div style=\"text-align:center;\"><br><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\">Looking for UX\/UI Designer for Project?<\/span><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\">Send me message: isohag450@gmail.com<\/span><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\"><br><\/span><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\">Follow me on<\/span><br><a href=\"https:\/\/www.uplabs.com\/sohaguixd\" target=\"_blank\" rel=\"nofollow\">Uplabs<\/a>\u00a0|\u00a0<a href=\"https:\/\/dribbble.com\/sohaguixd\" target=\"_blank\" rel=\"nofollow\">Dribbble<\/a>\u00a0|\u00a0<a href=\"https:\/\/www.instagram.com\/sohaguixd\/\" target=\"_blank\" rel=\"nofollow\">Instagram<\/a><a href=\"https:\/\/www.instagram.com\/mhmanik02\" rel=\"nofollow\">\u00a0<\/a>|\u00a0<a href=\"https:\/\/www.linkedin.com\/in\/sohaguix\/\" target=\"_blank\" rel=\"nofollow\">Linkedin<\/a>\u00a0|<a href=\"https:\/\/www.fiverr.com\/users\/creative_sohag\" target=\"_blank\" rel=\"nofollow\">\u00a0<\/a><a href=\"http:\/\/www.facebook.com\/sohaguixd\" target=\"_blank\" rel=\"nofollow\">Facebook<\/a>\u00a0|\u00a0<a href=\"https:\/\/medium.com\/sohaguixd\" target=\"_blank\" rel=\"nofollow\">Medium<\/a>\u00a0|\u00a0<a href=\"https:\/\/www.fiverr.com\/creative_sohag\/modern-ui-ux-photoshop-psd-web-mockup-template-xd-figma-web-design\" target=\"_blank\" rel=\"nofollow\">Fiverr<\/a><\/div><div style=\"text-align:center;\"><br><\/div><div style=\"text-align:center;\"><span class=\"texteditor-inline-color\" style=\"color:#3d3d3f;\">Thanks For Watching\u200b\u200b\u200b\u200b\u200b\u200b\u200b\u00a0<\/span>\ud83d\udc99<\/div><div style=\"text-align:center;\"><br><\/div>",
                        "textPlain": "DownloadLooking for UX\/UI Designer for Project?Send me message: isohag450@gmail.comFollow me onUplabs\u00a0|\u00a0Dribbble\u00a0|\u00a0Instagram\u00a0|\u00a0Linkedin\u00a0|\u00a0Facebook\u00a0|\u00a0Medium\u00a0|\u00a0FiverrThanks For Watching\u200b\u200b\u200b\u200b\u200b\u200b\u200b\u00a0\ud83d\udc99",
                        "projectId": 126991995
                    }],
                    "comments": {
                        "edges": [{
                            "cursor": "ODU0OTExNTc=",
                            "node": {
                                "comment": "Nice work! \u2764",
                                "id": 85491157,
                                "permissions": {
                                    "canFlag": false,
                                    "canRemove": false
                                },
                                "postedOn": 1662124692,
                                "user": {
                                    "firstName": "Priscila",
                                    "lastName": "Bird",
                                    "username": "priscilabird",
                                    "url": "https:\/\/www.behance.net\/priscilabird",
                                    "id": 828609233,
                                    "displayName": "Priscila Bird",
                                    "creatorPro": {
                                        "isActive": false,
                                        "initialSubscriptionDate": null
                                    },
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/933b9e828609233.642c5d416a40a.jpg"
                                        },
                                        "size_100": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/933b9e828609233.642c5d416a40a.jpg"
                                        },
                                        "size_115": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/933b9e828609233.642c5d416a40a.jpg"
                                        }
                                    }
                                }
                            }
                        }, {
                            "cursor": "NzkyNjIwOTE=",
                            "node": {
                                "comment": "Clean & neat design \ud83d\udc4d\ud83c\udffb",
                                "id": 79262091,
                                "permissions": {
                                    "canFlag": false,
                                    "canRemove": false
                                },
                                "postedOn": 1643267106,
                                "user": {
                                    "firstName": "Vijay",
                                    "lastName": "Bhuva",
                                    "username": "vijaybhuva",
                                    "url": "https:\/\/www.behance.net\/vijaybhuva",
                                    "id": 13435163,
                                    "displayName": "Vijay Bhuva",
                                    "creatorPro": {
                                        "isActive": false,
                                        "initialSubscriptionDate": null
                                    },
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/8c50c013435163.6272797f240cc.png"
                                        },
                                        "size_100": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/8c50c013435163.6272797f240cc.png"
                                        },
                                        "size_115": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/8c50c013435163.6272797f240cc.png"
                                        }
                                    }
                                }
                            }
                        }, {
                            "cursor": "NzcyMzU2Mzc=",
                            "node": {
                                "comment": "So simple and unique \ud83d\udc4f\ud83d\udc4f",
                                "id": 77235637,
                                "permissions": {
                                    "canFlag": false,
                                    "canRemove": false
                                },
                                "postedOn": 1636339091,
                                "user": {
                                    "firstName": "Ayat",
                                    "lastName": "Saed",
                                    "username": "ayatsaed",
                                    "url": "https:\/\/www.behance.net\/ayatsaed",
                                    "id": 999717587,
                                    "displayName": "Ayat Saed",
                                    "creatorPro": {
                                        "isActive": false,
                                        "initialSubscriptionDate": null
                                    },
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/188ed4999717587.64de607f1708b.jpg"
                                        },
                                        "size_100": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/188ed4999717587.64de607f1708b.jpg"
                                        },
                                        "size_115": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/188ed4999717587.64de607f1708b.jpg"
                                        }
                                    }
                                }
                            }
                        }, {
                            "cursor": "NzU5MDI2MzE=",
                            "node": {
                                "comment": "Nice work. I liked the UI.",
                                "id": 75902631,
                                "permissions": {
                                    "canFlag": false,
                                    "canRemove": false
                                },
                                "postedOn": 1632555452,
                                "user": {
                                    "firstName": "Simran",
                                    "lastName": "Lalchandani",
                                    "username": "simranlalchandani_be",
                                    "url": "https:\/\/www.behance.net\/simranlalchandani_be",
                                    "id": 943103671,
                                    "displayName": "Simran Lalchandani",
                                    "creatorPro": {
                                        "isActive": false,
                                        "initialSubscriptionDate": null
                                    },
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/9745a8943103671.65791bc65d2ab.jpg"
                                        },
                                        "size_100": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/9745a8943103671.65791bc65d2ab.jpg"
                                        },
                                        "size_115": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/9745a8943103671.65791bc65d2ab.jpg"
                                        }
                                    }
                                }
                            }
                        }, {
                            "cursor": "NzU4Mzk3ODE=",
                            "node": {
                                "comment": "Absolute beauty, love your style, many things to learn from you. It would be my pleasure if you visit my projects also. Many thanks",
                                "id": 75839781,
                                "permissions": {
                                    "canFlag": false,
                                    "canRemove": false
                                },
                                "postedOn": 1632387431,
                                "user": {
                                    "firstName": "Rohan",
                                    "lastName": "Sharma",
                                    "username": "rohan5894",
                                    "url": "https:\/\/www.behance.net\/rohan5894",
                                    "id": 1023810477,
                                    "displayName": "Rohan Sharma",
                                    "creatorPro": {
                                        "isActive": false,
                                        "initialSubscriptionDate": null
                                    },
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/99f0721023810477.60fa6980d94ef.jpg"
                                        },
                                        "size_100": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/99f0721023810477.60fa6980d94ef.jpg"
                                        },
                                        "size_115": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/99f0721023810477.60fa6980d94ef.jpg"
                                        }
                                    }
                                }
                            }
                        }, {
                            "cursor": "NzUzODQ5Mjk=",
                            "node": {
                                "comment": "wow great work",
                                "id": 75384929,
                                "permissions": {
                                    "canFlag": false,
                                    "canRemove": false
                                },
                                "postedOn": 1631186512,
                                "user": {
                                    "firstName": "Shamim",
                                    "lastName": "Hossain",
                                    "username": "rawshamim",
                                    "url": "https:\/\/www.behance.net\/rawshamim",
                                    "id": 628485751,
                                    "displayName": "Shamim Hossain",
                                    "creatorPro": {
                                        "isActive": false,
                                        "initialSubscriptionDate": null
                                    },
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/d3b321628485751.624ac8c96be2c.jpg"
                                        },
                                        "size_100": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/d3b321628485751.624ac8c96be2c.jpg"
                                        },
                                        "size_115": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/d3b321628485751.624ac8c96be2c.jpg"
                                        }
                                    }
                                }
                            }
                        }, {
                            "cursor": "NzUzNzcyMTU=",
                            "node": {
                                "comment": "Nice work.",
                                "id": 75377215,
                                "permissions": {
                                    "canFlag": false,
                                    "canRemove": false
                                },
                                "postedOn": 1631172817,
                                "user": {
                                    "firstName": "Khaled Mahmud",
                                    "lastName": "Saifulla",
                                    "username": "khaledsaifull",
                                    "url": "https:\/\/www.behance.net\/khaledsaifull",
                                    "id": 955034499,
                                    "displayName": "Khaled Mahmud Saifulla",
                                    "creatorPro": {
                                        "isActive": false,
                                        "initialSubscriptionDate": null
                                    },
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/0e9345955034499.6176dd440c1ca.jpg"
                                        },
                                        "size_100": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/0e9345955034499.6176dd440c1ca.jpg"
                                        },
                                        "size_115": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/0e9345955034499.6176dd440c1ca.jpg"
                                        }
                                    }
                                }
                            }
                        }, {
                            "cursor": "NzUzNzU3NTE=",
                            "node": {
                                "comment": "nice work!!!",
                                "id": 75375751,
                                "permissions": {
                                    "canFlag": false,
                                    "canRemove": false
                                },
                                "postedOn": 1631169834,
                                "user": {
                                    "firstName": "Themes",
                                    "lastName": "Fusion",
                                    "username": "themesfusion",
                                    "url": "https:\/\/www.behance.net\/themesfusion",
                                    "id": 797809247,
                                    "displayName": "Themes Fusion",
                                    "creatorPro": {
                                        "isActive": false,
                                        "initialSubscriptionDate": null
                                    },
                                    "images": {
                                        "size_50": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/c017b8797809247.5fd77f541e13b.jpg"
                                        },
                                        "size_100": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/c017b8797809247.5fd77f541e13b.jpg"
                                        },
                                        "size_115": {
                                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/c017b8797809247.5fd77f541e13b.jpg"
                                        }
                                    }
                                }
                            }
                        }],
                        "nodes": [{
                            "comment": "Nice work! \u2764",
                            "id": 85491157,
                            "permissions": {
                                "canFlag": false,
                                "canRemove": false
                            },
                            "postedOn": 1662124692,
                            "user": {
                                "firstName": "Priscila",
                                "lastName": "Bird",
                                "username": "priscilabird",
                                "url": "https:\/\/www.behance.net\/priscilabird",
                                "id": 828609233,
                                "displayName": "Priscila Bird",
                                "creatorPro": {
                                    "isActive": false,
                                    "initialSubscriptionDate": null
                                },
                                "images": {
                                    "size_50": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/933b9e828609233.642c5d416a40a.jpg"
                                    },
                                    "size_100": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/933b9e828609233.642c5d416a40a.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/933b9e828609233.642c5d416a40a.jpg"
                                    }
                                }
                            }
                        }, {
                            "comment": "Clean & neat design \ud83d\udc4d\ud83c\udffb",
                            "id": 79262091,
                            "permissions": {
                                "canFlag": false,
                                "canRemove": false
                            },
                            "postedOn": 1643267106,
                            "user": {
                                "firstName": "Vijay",
                                "lastName": "Bhuva",
                                "username": "vijaybhuva",
                                "url": "https:\/\/www.behance.net\/vijaybhuva",
                                "id": 13435163,
                                "displayName": "Vijay Bhuva",
                                "creatorPro": {
                                    "isActive": false,
                                    "initialSubscriptionDate": null
                                },
                                "images": {
                                    "size_50": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/8c50c013435163.6272797f240cc.png"
                                    },
                                    "size_100": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/8c50c013435163.6272797f240cc.png"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/8c50c013435163.6272797f240cc.png"
                                    }
                                }
                            }
                        }, {
                            "comment": "So simple and unique \ud83d\udc4f\ud83d\udc4f",
                            "id": 77235637,
                            "permissions": {
                                "canFlag": false,
                                "canRemove": false
                            },
                            "postedOn": 1636339091,
                            "user": {
                                "firstName": "Ayat",
                                "lastName": "Saed",
                                "username": "ayatsaed",
                                "url": "https:\/\/www.behance.net\/ayatsaed",
                                "id": 999717587,
                                "displayName": "Ayat Saed",
                                "creatorPro": {
                                    "isActive": false,
                                    "initialSubscriptionDate": null
                                },
                                "images": {
                                    "size_50": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/188ed4999717587.64de607f1708b.jpg"
                                    },
                                    "size_100": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/188ed4999717587.64de607f1708b.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/188ed4999717587.64de607f1708b.jpg"
                                    }
                                }
                            }
                        }, {
                            "comment": "Nice work. I liked the UI.",
                            "id": 75902631,
                            "permissions": {
                                "canFlag": false,
                                "canRemove": false
                            },
                            "postedOn": 1632555452,
                            "user": {
                                "firstName": "Simran",
                                "lastName": "Lalchandani",
                                "username": "simranlalchandani_be",
                                "url": "https:\/\/www.behance.net\/simranlalchandani_be",
                                "id": 943103671,
                                "displayName": "Simran Lalchandani",
                                "creatorPro": {
                                    "isActive": false,
                                    "initialSubscriptionDate": null
                                },
                                "images": {
                                    "size_50": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/9745a8943103671.65791bc65d2ab.jpg"
                                    },
                                    "size_100": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/9745a8943103671.65791bc65d2ab.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/9745a8943103671.65791bc65d2ab.jpg"
                                    }
                                }
                            }
                        }, {
                            "comment": "Absolute beauty, love your style, many things to learn from you. It would be my pleasure if you visit my projects also. Many thanks",
                            "id": 75839781,
                            "permissions": {
                                "canFlag": false,
                                "canRemove": false
                            },
                            "postedOn": 1632387431,
                            "user": {
                                "firstName": "Rohan",
                                "lastName": "Sharma",
                                "username": "rohan5894",
                                "url": "https:\/\/www.behance.net\/rohan5894",
                                "id": 1023810477,
                                "displayName": "Rohan Sharma",
                                "creatorPro": {
                                    "isActive": false,
                                    "initialSubscriptionDate": null
                                },
                                "images": {
                                    "size_50": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/99f0721023810477.60fa6980d94ef.jpg"
                                    },
                                    "size_100": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/99f0721023810477.60fa6980d94ef.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/99f0721023810477.60fa6980d94ef.jpg"
                                    }
                                }
                            }
                        }, {
                            "comment": "wow great work",
                            "id": 75384929,
                            "permissions": {
                                "canFlag": false,
                                "canRemove": false
                            },
                            "postedOn": 1631186512,
                            "user": {
                                "firstName": "Shamim",
                                "lastName": "Hossain",
                                "username": "rawshamim",
                                "url": "https:\/\/www.behance.net\/rawshamim",
                                "id": 628485751,
                                "displayName": "Shamim Hossain",
                                "creatorPro": {
                                    "isActive": false,
                                    "initialSubscriptionDate": null
                                },
                                "images": {
                                    "size_50": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/d3b321628485751.624ac8c96be2c.jpg"
                                    },
                                    "size_100": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/d3b321628485751.624ac8c96be2c.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/d3b321628485751.624ac8c96be2c.jpg"
                                    }
                                }
                            }
                        }, {
                            "comment": "Nice work.",
                            "id": 75377215,
                            "permissions": {
                                "canFlag": false,
                                "canRemove": false
                            },
                            "postedOn": 1631172817,
                            "user": {
                                "firstName": "Khaled Mahmud",
                                "lastName": "Saifulla",
                                "username": "khaledsaifull",
                                "url": "https:\/\/www.behance.net\/khaledsaifull",
                                "id": 955034499,
                                "displayName": "Khaled Mahmud Saifulla",
                                "creatorPro": {
                                    "isActive": false,
                                    "initialSubscriptionDate": null
                                },
                                "images": {
                                    "size_50": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/0e9345955034499.6176dd440c1ca.jpg"
                                    },
                                    "size_100": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/0e9345955034499.6176dd440c1ca.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/0e9345955034499.6176dd440c1ca.jpg"
                                    }
                                }
                            }
                        }, {
                            "comment": "nice work!!!",
                            "id": 75375751,
                            "permissions": {
                                "canFlag": false,
                                "canRemove": false
                            },
                            "postedOn": 1631169834,
                            "user": {
                                "firstName": "Themes",
                                "lastName": "Fusion",
                                "username": "themesfusion",
                                "url": "https:\/\/www.behance.net\/themesfusion",
                                "id": 797809247,
                                "displayName": "Themes Fusion",
                                "creatorPro": {
                                    "isActive": false,
                                    "initialSubscriptionDate": null
                                },
                                "images": {
                                    "size_50": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/c017b8797809247.5fd77f541e13b.jpg"
                                    },
                                    "size_100": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/100\/c017b8797809247.5fd77f541e13b.jpg"
                                    },
                                    "size_115": {
                                        "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/115\/c017b8797809247.5fd77f541e13b.jpg"
                                    }
                                }
                            }
                        }],
                        "pageInfo": {
                            "endCursor": "NzUzNzU3NTE=",
                            "hasNextPage": false,
                            "hasPreviousPage": true,
                            "startCursor": "ODU0OTExNTc="
                        }
                    },
                    "stylesInline": "#project-modules .title { color: #191919;font-family: helvetica,arial,sans-serif;font-size: 36px;font-style: normal;font-weight: bold;line-height: 1.1em;text-align: left;text-decoration: none; }\r\n#project-modules .sub-title { color: #a4a4a4;font-family: helvetica,arial,sans-serif;font-size: 20px;font-style: normal;font-weight: normal;line-height: 1.4em;text-align: left;text-decoration: none; }\r\n#project-modules .editor-text .main-text, #primary-project-content.project-styles .main-text { color: #696969;font-family: helvetica,arial,sans-serif;font-size: 20px;font-style: normal;font-weight: normal;line-height: 1.4em;text-align: left;text-decoration: none; }\r\n#project-modules .caption, #project-modules .caption-text-wrap { color: #a4a4a4;font-family: helvetica,arial,sans-serif;font-size: 14px;font-style: italic;font-weight: normal;line-height: 1.4em;text-align: left;text-decoration: none; }\r\n#project-modules .caption-text-wrap a { font-size: 14px !important; }\r\n#project-modules .main-text a { color: #1769FF;text-align: left;text-decoration: none; }\r\n#primary-project-content .module { padding-bottom: 0px; }\r\n#primary-project-content { padding-top: 0px; background-color: #F2F2F2;  }\r\n.spacer { height: 0px; }.divider { display: none; }.module.last .divider { display: none; }",
                    "pendingCoowners": []
                },
                "projectSourceAssets": [],
                "commentCount": 8,
                "isAppreciated": false,
                "appreciationCount": 105,
                "credits": [],
                "isMatureReviewSubmitted": null,
                "user": null,
                "urls": {
                    "search": "\/search",
                    "edit": "\/portfolio\/editor?project_id=126991995"
                },
                "otherProjects": [{
                    "publishedOn": 1634068713,
                    "premium": 0,
                    "id": 129190183,
                    "slug": "Task-Manager-Mobile-App-UI-UX-Design-Case-Study",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/5ee7d1129190183.Y3JvcCwxNjY3LDEzMDQsNDUsOA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 114
                        },
                        "views": {
                            "all": 3023
                        }
                    },
                    "name": "Task Manager Mobile App UI UX Design Case Study",
                    "colors": {
                        "r": 242,
                        "b": 254,
                        "g": 235
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }, {
                        "displayName": "Gravity \u2122",
                        "hasPremiumAccess": false,
                        "id": 1353740217,
                        "username": "gravity-ltd",
                        "url": "https:\/\/www.behance.net\/gravity-ltd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/134d801353740217.644be65dbd7b8.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1628099465,
                    "premium": 0,
                    "id": 124763303,
                    "slug": "Business-Consultant-Landing-Page-Web-design",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/886384124763303.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 78
                        },
                        "views": {
                            "all": 1178
                        }
                    },
                    "name": "Business Consultant Landing Page Web design",
                    "colors": {
                        "r": 9,
                        "b": 52,
                        "g": 19
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1628953617,
                    "premium": 0,
                    "id": 125376063,
                    "slug": "Digital-Agency-Landing-page-Web-design",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/155165125376063.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 97
                        },
                        "views": {
                            "all": 2551
                        }
                    },
                    "name": "Digital Agency Landing page Web design",
                    "colors": {
                        "r": 249,
                        "b": 251,
                        "g": 251
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }, {
                        "displayName": "Gravity \u2122",
                        "hasPremiumAccess": false,
                        "id": 1353740217,
                        "username": "gravity-ltd",
                        "url": "https:\/\/www.behance.net\/gravity-ltd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/134d801353740217.644be65dbd7b8.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1629899301,
                    "premium": 0,
                    "id": 126085903,
                    "slug": "E-commerce-Furniture-Store-Shopify-Landing-page",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/ae3093126085903.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 258
                        },
                        "views": {
                            "all": 4684
                        }
                    },
                    "name": "E-commerce Furniture Store Shopify Landing page",
                    "colors": {
                        "r": 247,
                        "b": 249,
                        "g": 248
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }, {
                        "displayName": "Gravity \u2122",
                        "hasPremiumAccess": false,
                        "id": 1353740217,
                        "username": "gravity-ltd",
                        "url": "https:\/\/www.behance.net\/gravity-ltd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/134d801353740217.644be65dbd7b8.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1627913535,
                    "premium": 0,
                    "id": 124608545,
                    "slug": "eFood-Delivery-Landing-Page-Web-Design",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/5421c9124608545.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 74
                        },
                        "views": {
                            "all": 1327
                        }
                    },
                    "name": "eFood - Delivery Landing Page Web Design",
                    "colors": {
                        "r": 247,
                        "b": 252,
                        "g": 245
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1649067776,
                    "premium": 0,
                    "id": 140920423,
                    "slug": "Food-Restaurant-Landing-Page-Web-Design",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/527dcd140920423.Y3JvcCwzMDY4LDI0MDAsNjgsMA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 25
                        },
                        "views": {
                            "all": 345
                        }
                    },
                    "name": "Food Restaurant Landing Page Web Design",
                    "colors": {
                        "r": 253,
                        "b": 210,
                        "g": 235
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1625932101,
                    "premium": 0,
                    "id": 123215189,
                    "slug": "Online-Learning-Educational-Web-Design",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/afe9e6123215189.Y3JvcCwxMTUwLDkwMCwyNSww.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 132
                        },
                        "views": {
                            "all": 4270
                        }
                    },
                    "name": "Online Learning- Educational Web Design",
                    "colors": {
                        "r": 244,
                        "b": 252,
                        "g": 249
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }, {
                        "displayName": "Gravity \u2122",
                        "hasPremiumAccess": false,
                        "id": 1353740217,
                        "username": "gravity-ltd",
                        "url": "https:\/\/www.behance.net\/gravity-ltd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/134d801353740217.644be65dbd7b8.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1627138807,
                    "premium": 0,
                    "id": 124065245,
                    "slug": "Ejob-Job-Finder-Landing-page-Web-Design",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/1c0326124065245.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 68
                        },
                        "views": {
                            "all": 2139
                        }
                    },
                    "name": "Ejob - Job Finder Landing page Web Design",
                    "colors": {
                        "r": 250,
                        "b": 254,
                        "g": 253
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1625241230,
                    "premium": 0,
                    "id": 122713367,
                    "slug": "Healthcare-Doctor-Appointment-Website-UI-Design-",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/367a6c122713367.Y3JvcCw2OTAzLDU0MDAsMTUzLDA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 28
                        },
                        "views": {
                            "all": 1076
                        }
                    },
                    "name": "Healthcare - Doctor Appointment Website UI Design \u2695\ufe0f",
                    "colors": {
                        "r": 244,
                        "b": 253,
                        "g": 250
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1628777590,
                    "premium": 0,
                    "id": 125256565,
                    "slug": "Landing-Page-Web-UI-Design",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/38b963125256565.Y3JvcCw0NjAyLDM2MDAsMTAyLDA.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 24
                        },
                        "views": {
                            "all": 514
                        }
                    },
                    "name": "Landing Page Web UI Design",
                    "colors": {
                        "r": 252,
                        "b": 248,
                        "g": 250
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }, {
                    "publishedOn": 1614102204,
                    "premium": 0,
                    "id": 114119229,
                    "slug": "Ukilbabu-Lawyer-Consultant-iOS-Mobile-App-UX-Case-Study",
                    "covers": {
                        "size_original": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_115": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_202": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_230": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_404": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_max_808": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_original_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/original_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_115_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/115_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_202_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/202_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_230_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/230_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_404_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/404_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/808_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        },
                        "size_max_808_webp": {
                            "url": "https:\/\/mir-s3-cdn-cf.behance.net\/projects\/max_808_webp\/37fedd114119229.Y3JvcCw4MDgwLDYzMjAsMCww.jpg"
                        }
                    },
                    "stats": {
                        "appreciations": {
                            "all": 31
                        },
                        "views": {
                            "all": 1000
                        }
                    },
                    "name": "Ukilbabu Lawyer Consultant iOS Mobile App UX Case Study",
                    "colors": {
                        "r": 113,
                        "b": 255,
                        "g": 2
                    },
                    "owners": [{
                        "displayName": "MD Sohag Rana",
                        "hasPremiumAccess": false,
                        "id": 330325461,
                        "username": "sohaguixd",
                        "url": "https:\/\/www.behance.net\/sohaguixd",
                        "images": {
                            "size_50": {
                                "url": "https:\/\/mir-s3-cdn-cf.behance.net\/user\/50\/f1d666330325461.62760c6bc2f98.png"
                            }
                        }
                    }],
                    "isPrivate": false,
                    "privacyLevel": "PUBLIC",
                    "features": [],
                    "linkedAssets": [],
                    "sourceFiles": [],
                    "linkedAssetsCount": 0,
                    "matureAccess": "allowed"
                }],
                "inlineStyle": "#project-modules .title { color: #191919;font-family: helvetica,arial,sans-serif;font-size: 36px;font-style: normal;font-weight: bold;line-height: 1.1em;text-align: left;text-decoration: none; }\r\n#project-modules .sub-title { color: #a4a4a4;font-family: helvetica,arial,sans-serif;font-size: 20px;font-style: normal;font-weight: normal;line-height: 1.4em;text-align: left;text-decoration: none; }\r\n#project-modules .editor-text .main-text, #primary-project-content.project-styles .main-text { color: #696969;font-family: helvetica,arial,sans-serif;font-size: 20px;font-style: normal;font-weight: normal;line-height: 1.4em;text-align: left;text-decoration: none; }\r\n#project-modules .caption, #project-modules .caption-text-wrap { color: #a4a4a4;font-family: helvetica,arial,sans-serif;font-size: 14px;font-style: italic;font-weight: normal;line-height: 1.4em;text-align: left;text-decoration: none; }\r\n#project-modules .caption-text-wrap a { font-size: 14px !important; }\r\n#project-modules .main-text a { color: #1769FF;text-align: left;text-decoration: none; }\r\n#primary-project-content .module { padding-bottom: 0px; }\r\n#primary-project-content { padding-top: 0px; background-color: #F2F2F2;  }\r\n.spacer { height: 0px; }.divider { display: none; }.module.last .divider { display: none; }",
                "messageManagerSidebar": {
                    "threadId": "",
                    "services": [],
                    "didFinishBlockingUser": false
                },
                "messageManagerFooter": {
                    "threadId": "",
                    "services": [],
                    "didFinishBlockingUser": false
                }
            },
            "footer": {
                "isAppModalOpen": false,
                "isAppModalEnabled": true
            },
            "purchaseSourceFile": {
                "shouldShowPaymentModal": false,
                "sourceFile": null,
                "purchaseSource": "",
                "isProcessingPayment": false,
                "paymentReceipt": null,
                "stripeId": "",
                "paypalMerchantId": "",
                "purchaseError": null
            },
            "purchaseSourceFileAnalytics": {},
            "subscriptionAnalytics": {},
            "primaryNav": {
                "hasBrowserNotifications": false,
                "messageCount": 0,
                "notificationCount": 0,
                "announcements": [],
                "promotedAnnouncement": null,
                "isMinimal": false,
                "hideShareYourWorkButton": false,
                "hideActivateButton": false,
                "typeaheadResults": {
                    "searchTermSuggestions": [],
                    "searchShortcuts": []
                },
                "lastSearchTerm": "",
                "hasDismissedAnnouncement": false,
                "hasSubscriptions": false,
                "inboxThreads": {},
                "isInboxDataLoading": false,
                "inboxJobs": {
                    "jobs": [],
                    "hasMore": false,
                    "cursor": ""
                },
                "areInboxJobsLoading": false,
                "livestreamAccessFetched": false,
                "inboxNotifications": null,
                "shouldSeeSwapConfirmation": false,
                "hireTalentRecommendations": null,
                "hasDismissedTalentNotif": false
            },
            "downloadAppModal": {
                "sendSMSStatusCode": -1
            },
            "projectAnalytics": {},
            "onboardingAnalytics": {},
            "miniprofile": {
                "usersMiniprofileData": {},
                "fetching": false,
                "messageManager": {
                    "threadId": "",
                    "services": [],
                    "didFinishBlockingUser": false
                }
            },
            "miniprofileAnalytics": {},
            "messageManagerAnalytics": {}
        }
    </script>


    <script type="text/javascript">
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "licenseKey": "e7fb1b89a0",
            "applicationID": "857138461",
            "transactionName": "ZwZaYkJVDERXUxULCV5Me0NDQA1aGWsmJzJtQ39XXFgHRU8KWwsIVAZA",
            "queueTime": 0,
            "applicationTime": 426,
            "atts": "S0FNFApPHxsUUUNYHU0e",
            "errorBeacon": "bam.nr-data.net",
            "agent": ""
        }
    </script>
</body>

</html>