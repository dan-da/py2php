class BankAccount:
    def __init__(self):
        self.balance = 0

    def withdraw(self, amount):
        self.balance -= amount
        return self.balance

    def deposit(self, amount):
        self.balance += amount
        return self.balance

a = BankAccount()
b = BankAccount()
a.deposit(100)
b.deposit(50)
b.withdraw(10)
balance = a.withdraw(10)

print "balance:", balance
