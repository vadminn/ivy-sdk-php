# Ivy SDK

```
$client = new Client('api-key');
$client->useSandbox();
```

----

## Available services and methods

### Banks
#### Search
`
$client->banks->search(searchString);
`

---

### Checkout
#### Create Session
`
$client->session->create(SessionResource);
`

#### Retrieve session
`
$client->session->retrieve(id);
`

---

### Merchant
#### Merchant update

`
$client->merchant->update(MerchantResource);
`

---

### Refund
#### Single refund

`
$client->refund->single(RefundRequestResource);
`

#### Batch of refunds

`
$client->refund->batch(array<RefundRequestResource>);
`

---

### Order
#### Single refund

`
$client->order->retrieve(id);
`

#### Batch of refunds

`
$client->order->update(OrderResource);
`

----

Docs:
https://docs.getivy.de/