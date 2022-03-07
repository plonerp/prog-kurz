class Clovek:
    def __init__(self, jmeno):
        self.jmeno = jmeno


class Student(Clovek):
    def __init__(self, jmeno, obor):
        # zachytny bod
        super().__init__(jmeno)
        # zachytny bod
        self.obor = obor
