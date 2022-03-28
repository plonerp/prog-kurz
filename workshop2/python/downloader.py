class Downloader:

    def get_file(self, filename):
        fp = open(filename, "r")
        content = fp.read()
        fp.close()
        return content
