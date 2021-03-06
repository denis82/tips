I – Принцип разделения интерфейсов 


Определение: клиенты не должны вынужденно зависеть от методов, которыми не пользуются. 


Смысл: класс должен предоставлять удобный интерфейс с точки зрения его разнообразных клиентов. 


Краткое описание: интерфейс класса должен быть цельным и согласованным не зависимо от числа клиентов. 
Несколько разных клиентов вполне могут использовать лишь подмножество методов класса,
до тех пор, пока интерфейс класса будет оставаться согласованным. 
Проблемы появляются тогда, когда интерфейс класса начинает распухать или появляются 
разные методы с похожей семантикой лишь для того, чтобы ими было удобно пользоваться 
определенным клиентам. 


Типичные примеры нарушения: 1) класс или интерфейс содержит несколько методов со схожей 
семантикой, которые используются разными клиентами; 2) интерфейс класса слишком 
разнороден и содержит методы, отвечающие за слабосвязанные операции. 


Anti-ISP – Принцип тысячи интерфейсов. Интерфейсы классов разбиваются на слишком 
большое число составляющих, что делает их неудобными для использования всеми клиентами. 