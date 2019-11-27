## eCommerce for Statamic

An eCommerce addon for Statamic v3.

### Installation

```
$ composer require damcclean/commerce
```

* Then publish config from service provider
* Then publish blueprints to `resources/blueprints`

### To Do

* [x] Control Panel (CRUD interface)
* [x] Example front-end shop
* [x] Order processing (Stripe stuff)
* [ ] Notifications
* [ ] Fix PaymentMethod & PaymentIntent issues (in the checkout flow)
* [ ] Store Dashboard
* [ ] Widgets
* [ ] Customise the routing
* [ ] Fix search on listings
* [ ] Receipts
* [x] Install command
* [ ] Get front-end assets in a way they can be published
* [ ] Fix issue after saving assets from publish form (not being formatted properly in yaml)
* [ ] If product is deleted while in cart then the user will get error
* [ ] Dont allow users to add out of stock items to their cart
* [ ] Make sure Strong Customer Authentication is implemented correctly
* [ ] Stripe webhooks
* [ ] Product variations
* [ ] Tax and shipping
* [ ] Documentation
* [ ] 🚀 Launch for beta testers!

### Addon Dev Questions

* How can I add my own SVG icons for the Control Panel nav or is there an icon pack I can choose from?
* How can I fix the `A facade root has not been set.` issue with the Yaml facade?
