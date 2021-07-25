# Payments Domain

The aggregate of Payments Bounded Context should be Payment entity 

## Payment Types
### Recurring Payments (aka. Subscription)

### One Time Payments

## Discounts

Mostly each system allows user to assign only one discount per payment. Same thing happens in real life,
where the promotions do not sum. That's because of the logic problem - how should the discount apply.

Let's say we have 100 dollars item and add 10% discount, then we apply another 10% discount.
Should discounts sum (20%) or run two multiplications ((100 * 0.1) * 0.1).
The logic problem does not apply to the fixed discounts, but it will expand your discount logic.

* Percentage Discount
* Fixed Value Discount

## Money vs Price

Money is an aggregate of some sort of value with currency and taxes like 100$ + 23% vat tax

Price is an aggregate of value in currency like 100$
